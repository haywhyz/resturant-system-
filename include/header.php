<?php
// session_start();
include_once ('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Taste - Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
  .menu-img{
    box-sizing: border-box;
    margin-bottom: 30px;
  }
  .menu-img img{
    width: 100%;
    height: 200px;
  }
  .menu-img .card{
    box-shadow: 1px 2px 3px rgba(0,0,0,0.2);
    height: 20.5em !important;
  }
  .menu-img .btn{
    margin: 0 !important;
    float: left !important
  }
  .menu-price{
    font-size: 18px !important;
  }
  .ftco-section {
    padding: 1em 0;
}
</style>

</head>
<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand font-weight-bold" href="index.php">Taste</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
          <?php
          if(isset($_SESSION['email'])){
            echo '<li class="nav-item"><a href="view-orders.php" class="nav-link">Orders</a></li>';
             echo '<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
          }
          else{
            echo ' <li class="nav-item"><a href="" class="nav-link" id="login">Login</a></li>';
           echo '<br/>';
            echo ' <li class="nav-item"><a href="" class="nav-link" id="register">Register</a></li>';
          }
          ?>
         
         
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->