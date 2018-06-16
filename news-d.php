<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
    <div>
	<?php include 'php_files/nav.php'; ?>
    </div>
    <?php include 'php_files/db_fns.php'; ?>
<?php

$handle = db_connect();


$sql = "SELECT NewsID, NewsTitle, NewsDesc FROM news_desc WHERE NewsID = 2";
$result = $handle->query($sql);





?>

    </div><small class="mt-auto" style="margin-top:200px;"></small>
    <h1></h1>
    <h1 class="text-center ml-auto" style="margin-top:100px;">
      <?php if($result -> num_rows > 0){
    	while($row = $result -> fetch_assoc()){
    		echo $row["NewsTitle"];

     ?>
  </h1>

    <p class="lead text-left mx-auto" style="width:500px;">


      <?php echo $row["NewsDesc"];
    	}} ?>
    </p><img class="d-block mx-auto" src="assets/img/desk.jpg">
    <p class="lead text-left mx-auto" style="width:500px;"></p>

        <?php include 'comment.php' ?>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Dynamically-Queue-Videos.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="assets/js/Video-Parallax-Background.js"></script>
</body>

</html>
