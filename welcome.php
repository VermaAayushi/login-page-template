<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Main Menu</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Scoot Scoot</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Home</a>
            <a class="nav-item nav-link" href="features.html">Features</a>
            <a class="nav-item nav-link" href="pricing.html">Pricing</a>
          </div>
        </div>
      </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container">
        <div class="row">
            <br>
        </div>
        <div class="row">
          <div class="col-2">
          </div>
          <div class="col">
              <div class="row">
                  <a href="features.html">
                    <img class ="feature_image" src="assets/features (1).png" >
                    <img class ="feature_image" src="assets/features (2).png" >
                    <img class ="feature_image" src="assets/features (3).png" >
                  </a>
              </div>
              <div class="row">
                  <a href="features.html">
                    <img class ="feature_image" src="assets/features (4).png" >
                    <img class ="feature_image" src="assets/features (5).png" >
                    <img class ="feature_image" src="assets/features (6).png" >
                  </a>
              </div>
          </div>
          <div class="col-2">
          </div>
        </div>
      </div>
      <style>
          .feature_image{
              padding: 20px;
              width: 250px;
            height: 250px;
          }
      </style>
      <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0%;">
        <div class="container">
          <h1 class="display-4" style="text-align: center;">A CAR FOR EVERY NEED</h1>
          <p class="lead" style="text-align: center;">We have a range of cars, so something will perfectly fit your trip</p>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/cars (1).png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/cars (2).png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/cars (3).png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/cars (4).png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="#">Scoot Scoot</a>
      </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>