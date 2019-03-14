<?php
function db_connect(){
    try {
      // $con = mysqli_connect("localhost","root","","ezweb");
      $con = mysqli_connect("ls-ecb0362e864832106d732c53f28b83115238c11d.crywkgjesajq.ap-southeast-2.rds.amazonaws.com","dbmasteruser","4s-qJnSwkzzAw[7{-,T-{`Xj%0y-)3(n","ezweb");
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


 <?php
/**
 *
 */
class MySQLDatabase
{
  var $link;
  function connect($user, $password, $database){
      $this->link = mysqli_connect('ls-ecb0362e864832106d732c53f28b83115238c11d.crywkgjesajq.ap-southeast-2.rds.amazonaws.com', $user, $password);
      if(!$this->link){
        die('Not connected :'.mysqli_error());

      }
      $db = mysqli_select_db($this->link, $database);
      if(!$db){
        die('Cannot uses :'.mysqli_error());
      }
      return $this->link;
  }

  function disconnect(){

    mysqli_close($this->link);
  }
}



  ?>
