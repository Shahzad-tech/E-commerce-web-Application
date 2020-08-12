<?php
include_once("./conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php
    if (session_status() == PHP_SESSION_NONE || !isset($_SESSION) || !isset($_SESSION['user_id'])) {
        echo '<script>
        $(document).ready(function () {
            $("#dashboard").attr("style", "display:none");
            $("#myorder").attr("style", "display:none");
            $("#logout").attr("style", "display:none");
        });
        </script>';
    }
    if (isset($_SESSION['user_id'])) {
        echo '<script>
        $(document).ready(function () {
            $("#register").attr("style", "display:none");
            $("#login").attr("style", "display:none");
        });
        </script>';
    }
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success static-top">
    
        <a class="navbar-brand" href="#">Contact us <i style='font-size:24px' class='fas'>&#xf879;</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav offset-4">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
                </a>
          </li>
          <li id="dashboard" class="nav-item">
            <a class="nav-link" href="Dashboard.php">Dashboard</a>
          </li>
          <li id="myorder" class="nav-item">
            <a class="nav-link" href="myorder.php">Myorder
            </a>
          </li>
          <li id="register" class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li id="login" class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contactus.php">Contact us</a>
          </li>
          <li id="logout" class="nav-item">
            <a class="nav-link" href="destroy_session.php">Logout</a>
          </li>
        </ul>
      </div>

</nav>

<div class="container">
  <div class="row mt-5">
    <div class="col-sm offset-1"><h4 class="text-danger font-weight-light">Features</h4><p class="text-muted">Offering Different Items.<br>Dashboard Available.<br>Item Delivered at Door Step.<br>Much More ...</p></div>
    <div class="col-sm offset-1"><h4 class="text-danger font-weight-light">Contact Us</h4><p class="text-muted">Have any questions?<br>We'd love to hear from you<br>You can email us: <ins class="text-info">formore@email.com </ins> </p></div>
    <div class="col-sm offset-1"><h4 class="text-danger font-weight-light">Phone Numbers</h4><p class="text-muted">+92 312-6345671<br>+92 333-4567843<br>+92 300 5432169<br>+92 321-6758421</p></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm offset-1"><h4 class="text-danger font-weight-light">Address</h4><p class="text-muted">Comsats Univesity Islamabad Park Road, Tarlai Kalan Islamabad 45550, Pakistan.<br><span class="text-success">You can also get directions from the map below.</span></p></div>
    <div class="col-sm"></div>
    <div class="col-sm"></div>
  </div>
  <hr>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-12">
<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJj99b7krq3zgRsb5i1AVeteY&key=AIzaSyDwsr4QylJ1GYKpKYpIFPSWQNqdsFURe7w" allowfullscreen></iframe>
  </div>
</div>

<div class="row text-muted text-center bg-light mt-5">
  <div class="col-4 offset-4 text-muted text-center mt-2 mb-3">
      
          Created by Shahzad Javed & Faraz Haider <br>
          SP18-BCS-149  | SP18-BCS-103<br>
          Islamabad.
  </div>
  <div class="col-2 offset-2 mt-2">
      <i style="font-size:24px" class="fa">&#xf09a;</i>
      <i style="font-size:24px" class="fa">&#xf099;</i>
      <i style="font-size:24px" class="fa">&#xf16d;</i>
      <i style="font-size:24px" class="fa">&#xf2ac;</i>
  </div>
  
</div>
</div>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>