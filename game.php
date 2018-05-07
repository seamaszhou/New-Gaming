<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
<?php include 'php_files/nav.php'; ?>
<?php include 'php_files/db_fns.php'; ?>


    <section id="filtr-gallery">
        <div class="container">
            <h1 class="text-center">MY GALLERY</h1>
            <div class="filtr-controls"><span class="active" data-filter="all">all </span><span data-filter="1">ps4</span><span data-filter="2">XBOXONE</span><span data-filter="3">Switch</span><span data-filter="4">PC</span></div>
            <div class="row filtr-container">

              <?php
              session_start();
              
              $handle = db_connect();
              if (mysqli_connect_errno($handle))
              {
                  echo "fail connect DB " . mysqli_connect_error();
              }
              $res= mysqli_query($handle,"SELECT * FROM stories where id in (1,2)");

              while ($row = mysqli_fetch_array($res)) {


               ?>
                <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1">
                  <a href="<?php echo$row["image"] ?>">
                <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>

                <?php
                $res1= mysqli_query($handle,"SELECT * FROM stories where id in (3,4)");

                while ($row = mysqli_fetch_array($res1)) {
                 ?><div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2">
                   <a href="<?php echo$row["image"] ?>">
                 <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>

                <?php
                $res1= mysqli_query($handle,"SELECT * FROM stories where id in (5,6)");

                while ($row = mysqli_fetch_array($res1)) {
                 ?><div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="3">
                   <a href="<?php echo$row["image"] ?>">
                 <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>
                <?php
                $res1= mysqli_query($handle,"SELECT * FROM stories where id in (7,8)");

                while ($row = mysqli_fetch_array($res1)) {
                 ?><div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="4">
                   <a href="<?php echo$row["image"] ?>">
                 <img src="<?php echo$row["image"] ?>" /></a></div>
                <?php } ?>

          <!--  <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1"><a href="https://source.unsplash.com/eWFdaPRFjwE/1200x1200.jpg">
              <img class="img-fluid" src="https://source.unsplash.com/eWFdaPRFjwE/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1"><a href="https://source.unsplash.com/gF7hhMIC3vo/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/gF7hhMIC3vo/600x450.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2"><a href="https://source.unsplash.com/F3ePNdQb_Lg/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/F3ePNdQb_Lg/600x450.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2"><a href="https://source.unsplash.com/xFunHeSh3kU/1200x1200.jpg"><img class="img-fluid" src="https://source.unsplash.com/xFunHeSh3kU/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1, 3"><a href="https://source.unsplash.com/jqvxcyVx2YE/900x1600.jpg"><img class="img-fluid" src="https://source.unsplash.com/jqvxcyVx2YE/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2"><a href="https://source.unsplash.com/cFplR9ZGnAk/1200x1200.jpg"><img class="img-fluid" src="https://source.unsplash.com/cFplR9ZGnAk/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2, 3"><a href="https://source.unsplash.com/duo-xV0TU7s/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/duo-xV0TU7s/600x450.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1"><a href="https://source.unsplash.com/T7K4aEPoGGk/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/T7K4aEPoGGk/600x450.jpg" alt="image"></a></div>-->

        </div>
        </div>
    </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
