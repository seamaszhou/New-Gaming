<?php
function db_connect(){
    try {
      $con = mysqli_connect("localhost","root","","ezweb");
      mysqli_select_db($con,'ezweb');
    } catch (Exception $e) {
      echo $e -> message;
      exit;

    }
    if (!$con) {
      return false;
      // code...
    }
    return $con;


}

 ?>
