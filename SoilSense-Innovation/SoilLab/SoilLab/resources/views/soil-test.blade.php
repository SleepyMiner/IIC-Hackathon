




@extends('layout')

@section('content')


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Smart Crop Advisor </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">




    </nav>
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>









    <!-- Page Content -->

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h3>Soil Analysis Form</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('analyze') }}">
            @csrf

            <div class="mb-3">
                <label for="soil_type" class="form-label">Soil Type</label>
                <input type="text" class="form-control" id="soil_type" name="soil_type" placeholder="e.g., Loamy, Sandy" required>
            </div>

            <div class="mb-3">
                <label for="pH" class="form-label">pH Level</label>
                <input type="number" step="0.1" class="form-control" id="pH" name="pH" placeholder="e.g., 6.5" required>
            </div>

            <div class="mb-3">
                <label for="nitrogen" class="form-label">Nitrogen (mg/kg)</label>
                <input type="number" class="form-control" id="nitrogen" name="nitrogen" placeholder="e.g., 35" required>
            </div>

            <div class="mb-3">
                <label for="phosphorus" class="form-label">Phosphorus (mg/kg)</label>
                <input type="number" class="form-control" id="phosphorus" name="phosphorus" placeholder="e.g., 20" required>
            </div>

            <div class="mb-3">
                <label for="potassium" class="form-label">Potassium (mg/kg)</label>
                <input type="number" class="form-control" id="potassium" name="potassium" placeholder="e.g., 50" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Analyze Soil</button>
        </form>
    </div>
</div>






    <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">

               </div>



            <!--social_footer_ul ends here-->
        </div>
    </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>




@endsection





