<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="../assets/css/-Filterable-Cards-.css">
  <link rel="stylesheet" href="../assets/css/Filterable-Gallery-with-Lightbox.css">
  <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="stylesheet" href="../assets/css/Lightbox-Gallery.css">
  <link rel="stylesheet" href="../assets/css/mloureiro1973-login.css">
  <link rel="stylesheet" href="../assets/css/mloureiro1973-login.css">
  <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
  <link rel="stylesheet" href="../assets/css/News-Cards.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/dh-row-titile-text-image-right-1.css">
  <link rel="stylesheet" href="../assets/css/Video-Parallax-Background.css">
  <link rel="stylesheet" type="text/css" href="./assets/index_files/lato.css">
  <link rel="stylesheet" type="text/css" href="./assets/index_files/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="./assets/index_files/animate.css">
  <link rel="stylesheet" type="text/css" href="./assets/index_files/flavr.css">
  <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css" />
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <?php include '../php_files/nav2.php'; ?>


  <div class="form">

          <h1>Welcome</h1>

          <p>
          <?php

          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];

              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }

          ?>
          </p>

          <?php

          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }

          ?>

          <?php include'avatar.php' ?>

          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>



          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

    </div>


</body>
</html>
