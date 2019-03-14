<!DOCTYPE html>
<html>

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
</head>

<body>
    <div>
	<?php include '../php_files/nav2.php'; ?>
    </div>
    <?php include '../php_files/db_fns.php'; ?>
<?php

$handle = db_connect();


$sql = "SELECT NewsID, NewsTitle, NewsDesc FROM news WHERE NewsID = 10";
$result = $handle->query($sql);





?>

    </div><small class="mt-auto" style="margin-top:200px;"></small>
    <img src="https://artistryingames.com/wp-content/uploads/2018/04/Destiny-2-PVP-Exotic-Weapon-Changes-for-Warmind-Explained-1036x583.jpg" alt="" class=" mx-auto d-block ">
    <h1 class="text-center ml-auto" style="margin-top:100px;">
      <?php if($result -> num_rows > 0){
    	while($row = $result -> fetch_assoc()){
    		echo $row["NewsTitle"];

     ?>
  </h1>

    <p class="lead text-left mx-auto" style="width:500px;">


      <?php echo $row["NewsDesc"];
    	}} ?>
    </p>
    <p class="lead text-left mx-auto" style="width:500px;"></p>
    <div class="container">
  <?php include 'crud/comment.php' ?>
    </div>



    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/-Filterable-Cards-.js"></script>
    <script src="../assets/js/Dynamically-Queue-Videos.js"></script>
    <script src="../assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="../assets/js/Video-Parallax-Background.js"></script>
</body>

</html>
