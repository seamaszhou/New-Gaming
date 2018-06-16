<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
<?php include 'php_files/nav.php'; ?>
<?php include 'php_files/db_fns.php'; ?>


    <section id="filtr-gallery">
        <div class="container mt-5" >
            <h1 class="text-center" >Game Gallery</h1>
            <div class="filtr-controls"><span class="active" data-filter="all">all </span><span data-filter="1">ps4</span><span data-filter="2">XBOXONE</span><span data-filter="3">Switch</span><span data-filter="4">PC</span></div>
            <div class="row filtr-container">

              <?php


              $handle = db_connect();

              $res= mysqli_query($handle,"SELECT * FROM games where id in (1,2,3,4,5)");

              while ($row = mysqli_fetch_array($res)) {


               ?>
                <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="3">
                  <a href="Games/<?php echo$row["id"]?>.php">
                <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>

                <?php
                $res1= mysqli_query($handle,"SELECT * FROM games where id in (6,7,8,9,10,11,12,13)");

                while ($row = mysqli_fetch_array($res1)) {
                 ?><div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1">
                   <a href="Games/<?php echo$row["id"]?>.php">
                 <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>

                <?php
                $res1= mysqli_query($handle,"SELECT * FROM games where id in (15,16,17,18,19,20,21)");

                while ($row = mysqli_fetch_array($res1)) {
                 ?><div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2">
                  <a href="Games/<?php echo$row["id"]?>.php">
                 <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>
                <?php
                $res1= mysqli_query($handle,"SELECT * FROM games where id in (22,23,25,26,27,28,29)");

                while ($row = mysqli_fetch_array($res1)) {
                 ?><div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="4">
                  <a href="Games/<?php echo$row["id"]?>.php">
                 <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>

  

        </div>
        </div>
    </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>

</body>

</html>
