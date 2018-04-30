<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
    <div>
	<?php include 'php_files/nav.php'; ?>
    </div>
<?php

$user = "root";
$pass = "";
$database = "news";

$database = new mysqli("localhost", $user, $pass, $database) or die ("Unable to connect");

if ($database->connect_errno) {
    echo "Failed to connect to MySQL: (" . $database->connect_errno . ") " . $database->connect_error;
}


$sql = "SELECT NewsID, NewsTitle, NewsDesc FROM news_desc WHERE NewsID = 2";
$result = $database->query($sql);




if ($database->connect_errno) {
    echo "Failed to connect to MySQL: (" . $database->connect_errno . ") " . $database->connect_error;
}

$database -> close();
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
    <p class="lead text-left mx-auto" style="width:500px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis mauris accumsan, aliquet dui vel, rutrum dolor. Nunc vitae auctor metus. Quisque posuere nibh ut sem tincidunt, quis feugiat elit lobortis. Sed ut fringilla purus. Suspendisse volutpat
        ex non sem vehicula venenatis ut sed purus. Nunc eget fermentum metus, non consectetur velit. Donec semper leo a tellus posuere mollis. Duis a eleifend metus. Sed viverra enim sit amet mattis viverra. Ut euismod viverra lectus id aliquam. Cras
        eget odio mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ipsum nulla, vestibulum id diam eu, malesuada malesuada ex. Vestibulum et volutpat mauris. Donec sagittis sem vitae lacinia pellentesque.
        Ut mattis viverra aliquam.</p>
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
