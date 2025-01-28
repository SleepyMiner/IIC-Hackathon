

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart soil advisior</title>
    <link rel="stylesheet" href="../static/css/style.css" />
    <link
      rel="icon"
      type="image/png"
      href="../static/image/Untitled design.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }

      .translate-section {
        margin-left: auto;
        margin-right: 20px; /* Space on the right */
      }

      /* Styles for the language dropdown */
      #google_translate_element {
        display: inline-block;
      }

      #google_translate_element select {
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        background-color: white; /* White background for dropdown */
        color: #333; /* Dark text color */
        font-size: 14px; /* Font size */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        transition: background-color 0.3s ease; /* Smooth transition */
      }

      #google_translate_element select:hover {
        background-color: white; /* Light grey on hover */
      }

      /* Hide "Powered by Google Translate" */
      .skiptranslate > iframe.skiptranslate {
        display: none !important; /* Hides iframe that shows the "Powered by Google Translate" */
      }

      /* For hiding the original text */
      body {
        top: 0 !important; /* To prevent any unnecessary space */
      }
    </style>
    <!-- You can place this script in a separate file or in the <head> -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
          anchor.addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
              behavior: "smooth",
            });
          });
        });
      });
    </script>
  </head>
  <body>
    <!-- Language selection dropdown with Google Translate -->

    <header>

      <div class="container">

        <h1 class="logo">Smart Soil Advisior</h1>
        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#features">About Us</a></li>

            <li><a href="#contact">Contact Us</a></li>
            <li>  <div class="translate-section" id="google_translate_element"></div></li>
          </ul>
        </nav>
      </div>
    </header>





    <section id="home">
      <div class="intro">
        <h1>Welcome to Smart Soil Advisior</h1>



      </div>
    </section>
    @yield('content')

    <section id="features" class="features-section">
      <h2>About US</h2>
      <div class="features-container">
        <div class="feature-box">
          <img src="images/portfolio-big-03.jpg" alt="Crop Recommendation" />
          <h3>Test soil</h3>
          <p>
           Test the soil.
        </div>
        <div class="feature-box">
          <img src="images/crop-yeild.jpg" alt="Yield Prediction" />
          <h3>Best crop suggestion</h3>
          <p> choose crops with high accuracy.</p>
        </div>
        <div class="feature-box">
          <img src="image/crop-rain.jpg" alt="Weather Forecast" />
          <h3>Better Yield</h3>
          <p>
            Get better crop yield.
          </p>
        </div>
        <div class="feature-box">
          <img
            src="image/crop-fertilizer.jpg"
            alt="Fertilizer Recommender"
          />
          <h3>Easy to use</h3>
          <p>
            This website is easy to use.
          </p>
        </div>
      </div>
    </section>













    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <p>
          If you have any questions, feel free to reach out to us through the
          following contact details:
        </p>
        <div class="contact-details">
          <div class="contact-item">
            <i class="fas fa-phone-alt"></i>
            <p>+91 9431350088</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <p>New market birsa chowk Ranchi,Jharkhand</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <p><a href="kavya.kriti1@s.amity.edu">kavya.kriti1@s.amity.edu</a></p>
          </div>
        </div>
      </section>
      <!-- Google Translate Script -->
      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement(
            {
              pageLanguage: "en",
              includedLanguages: "en,hi,mr",
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            },
            "google_translate_element"
          );

          // Store the selected language in local storage
          function setLanguage(lang) {
            localStorage.setItem("preferredLanguage", lang);
          }

          // Retrieve the preferred language from local storage
          function getPreferredLanguage() {
            return localStorage.getItem("preferredLanguage") || "en"; // Default to English
          }

          // Load the selected language on page load
          window.onload = function () {
            const preferredLanguage = getPreferredLanguage();
            if (preferredLanguage) {
              document.querySelector("#google_translate_element select").value =
                preferredLanguage; // Set the dropdown to the stored language
              setLanguage(preferredLanguage); // Call setLanguage function to store it
            }
          };

          // Add event listener to the dropdown to save the selected language
          document.addEventListener("change", function (event) {
            if (event.target.matches("#google_translate_element select")) {
              setLanguage(event.target.value);
            }
          });
        }
      </script>
      <script
        type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
      ></script>

      <footer>

      </footer>
    </body>
  </html>
