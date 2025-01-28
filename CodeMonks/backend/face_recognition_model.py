import os
import cv2
import numpy as np
import face_recognition

class FaceRecognition:
 
    def __init__(self, dataset_path='dataset'):

        prototxt = "deploy.prototxt" #weights
        model = "res10_300x300_ssd_iter_140000.caffemodel"
        self.face_detection_net = cv2.dnn.readNetFromCaffe(prototxt, model)
        self.known_face_encodings = []
        self.known_face_names = []
        self.load_known_faces(dataset_path)

    def load_known_faces(self, dataset_path):
        """
        Loads face encodings from images in the specified dataset.

        Args:
            dataset_path (str): Path to the dataset folder.
        """
        for person_name in os.listdir(dataset_path):
            person_dir = os.path.join(dataset_path, person_name)

            if not os.path.isdir(person_dir):
                continue

            for image_filename in os.listdir(person_dir):
                if image_filename.lower().endswith(('.jpg', '.jpeg', '.png')):
                    image_path = os.path.join(person_dir, image_filename)
                    try:
                        image = face_recognition.load_image_file(image_path)
                        face_encodings = face_recognition.face_encodings(image)
                        for encoding in face_encodings:
                            self.known_face_encodings.append(encoding)
                            self.known_face_names.append(person_name)
                    except IndexError:
                        print(f"No face detected in {image_path}")

    def detect_faces(self, image):
     
        (h, w) = image.shape[:2]
        blob = cv2.dnn.blobFromImage(
            cv2.resize(image, (300, 300)), 1.0, (300, 300), (104.0, 177.0, 123.0)
        )
        self.face_detection_net.setInput(blob)
        detections = self.face_detection_net.forward()

        face_bboxes = []
        for i in range(0, detections.shape[2]):
            confidence = detections[0, 0, i, 2]

            if confidence > 0.5: #confidence levl
                box = detections[0, 0, i, 3:7] * np.array([w, h, w, h])
                (startX, startY, endX, endY) = box.astype("int")
                face_bboxes.append((startX, startY, endX, endY))

        return face_bboxes

    def recognize_faces(self, image):
   
        detected_faces = []
        face_bboxes = self.detect_faces(image)

        for bbox in face_bboxes:
            startX, startY, endX, endY = bbox

            try:
                face_roi = image[startY:endY, startX:endX]

                rgb_face = cv2.cvtColor(face_roi, cv2.COLOR_BGR2RGB)
                
                face_encoding = face_recognition.face_encodings(rgb_face)[0]

                distances = face_recognition.face_distance(self.known_face_encodings, face_encoding)
                best_match_index = np.argmin(distances)
                best_match_name = self.known_face_names[best_match_index]

                detected_faces.append({'name': best_match_name, 'bbox': bbox})

            except IndexError:
                continue  

        return detected_faces