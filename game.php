<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
<?php include 'php_files/nav.php'; ?>



    <section id="filtr-gallery">
        <div class="container">
            <h1 class="text-center">MY GALLERY</h1>
            <div class="filtr-controls"><span class="active" data-filter="all">all </span><span data-filter="1">ps4</span><span data-filter="2">XBOXONE</span><span data-filter="3">Switch</span><span data-filter="3">PC</span></div>
            <div class="row filtr-container">

              <?php
              session_start();
              include_once('db_fns.php');
              $handle = db_connect();
              if (mysqli_connect_errno($handle))
              {
                  echo "fail connect DB " . mysqli_connect_error();
              }
              $pages_sql = "SELECT * FROM pages ORDER BY code";
              $pages_result = mysqli_query($handle,$pages_sql);
              echo '<table border = "0" width = "800">';
              while ($pages = mysqli_fetch_assoc($pages_result)) {
                $story_sql = "SELECT picture FROM stories where id = 1;
                -- page = '{$pages['code']}' and published is not null order by published desc";
                $story_result = mysqli_query( $handle,$story_sql);
                // code...
                $story = mysqli_fetch_assoc($story_result);
               ?>






                <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2">
                  <a href="<?php  echo 'data:image/jpeg;base64,'.base64_encode($story ['picture']);?>">
                <img class="img-fluid" alt="image" data-caption="<strong>Image description</strong><br><em>Lorem ipsum</em>" src="<?php  echo 'data:image/jpeg;base64,'.base64_encode($story ['picture']);?>"  /></a></div>


            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1"><a href="https://source.unsplash.com/eWFdaPRFjwE/1200x1200.jpg">
              <img class="img-fluid" src="https://source.unsplash.com/eWFdaPRFjwE/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1"><a href="https://source.unsplash.com/gF7hhMIC3vo/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/gF7hhMIC3vo/600x450.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2"><a href="https://source.unsplash.com/F3ePNdQb_Lg/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/F3ePNdQb_Lg/600x450.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2"><a href="https://source.unsplash.com/xFunHeSh3kU/1200x1200.jpg"><img class="img-fluid" src="https://source.unsplash.com/xFunHeSh3kU/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1, 3"><a href="https://source.unsplash.com/jqvxcyVx2YE/900x1600.jpg"><img class="img-fluid" src="https://source.unsplash.com/jqvxcyVx2YE/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2"><a href="https://source.unsplash.com/cFplR9ZGnAk/1200x1200.jpg"><img class="img-fluid" src="https://source.unsplash.com/cFplR9ZGnAk/600x600.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="2, 3"><a href="https://source.unsplash.com/duo-xV0TU7s/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/duo-xV0TU7s/600x450.jpg" alt="image"></a></div>
            <div class="col-6 col-sm-4 col-md-3 filtr-item" data-category="1"><a href="https://source.unsplash.com/T7K4aEPoGGk/1200x900.jpg"><img class="img-fluid" src="https://source.unsplash.com/T7K4aEPoGGk/600x450.jpg" alt="image"></a></div>
            <?php } ?>
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
