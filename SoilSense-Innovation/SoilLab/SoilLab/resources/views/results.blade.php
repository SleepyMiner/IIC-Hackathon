<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crop Recommendations</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <style>
      /* Custom CSS for crop recommendations */
      .card {
        margin: 20px;
        border-radius: 10px;
      }
      .card-header {
        font-size: 1.5rem;
        text-align: center;
      }
      .card-body {
        background-color: #f9f9f9;
      }
      .alert-warning {
        text-align: center;
        font-weight: bold;
      }
      .list-group-item {
        border: none;
        border-bottom: 1px solid #ddd;
        padding: 10px;
        margin: 5px 0;
      }
      .crop-image {
        max-width: 100px;
        height: auto;
        border-radius: 8px;
      }
      .badge {
        font-size: 0.8rem;
        border-radius: 5px;
      }
      .btn-secondary {
        background-color: #6c757d;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
      }
      .btn-secondary:hover {
        background-color: #5a6268;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="card shadow">
        <div class="card-header bg-success text-white">
          <h3>Crop Recommendations</h3>
        </div>
        <div class="card-body">
          @if($crops->isEmpty())
            <div class="alert alert-warning" role="alert">
              No suitable crops found for the given soil conditions.
            <p>To make soil more fertile add fertilizer and pesticides. </p>
            </div>
          @else
            <ul class="list-group">
              @foreach ($crops as $crop)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <strong>{{ $crop->name }}</strong>
                  <span class="badge bg-primary"></span>
                  <img src="{{ asset($crop->image_url) }}" alt="{{ $crop->name }}" class="crop-image mb-4">
                </li>
              @endforeach
            </ul>
          @endif

          <a href="/" class="btn btn-secondary mt-3">Go Back</a>
        </div>
      </div>
    </div>
  </body>
</html>
