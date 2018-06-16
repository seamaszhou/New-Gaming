<!DOCTYPE html>
<html>


<?php include '../php_files/head3.php'; ?>

<body>
    <div>
        <?php include '../php_files/nav2.php'; ?>
        <?php include '../php_files/db_fns.php'; ?>
    </div>

    <?php


    $handle = db_connect();
    if (mysqli_connect_errno($handle))
    {
        echo "fail connect DB " . mysqli_connect_error();
    }
    $res= mysqli_query($handle,"SELECT * FROM games where id in (5)");

    while ($row = mysqli_fetch_array($res)) {


     ?>

    <div id="empresa" style="padding:100px;">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-5"><img src="../<?php echo$row["image"] ?>"></div>
              <div class="col-sm-6 col-md-7 col-lg-7">
                  <h1 style="color:#e74c3c"><?php echo$row["Name"] ?></h1>
                  <h4 style="color:#95a5a6"><?php echo$row["Console"] ?> </h4>
                <h6 style="color:#34495e">  Release Date:<?php echo$row["Day"] ?> May</h6>
                  <p style="color:#34495e"><br><?php echo$row["Description"] ?></p><p class="font-weight-bold" style="font-size:50px;">$<?php echo$row["Price"] ?></p> </div>

            </div>
        </div>
    </div>
    <div class="container-fluid" id="dqv">
        <h1></h1>
        <div class="row">
            <div class="col-sm-8 col-md-7 col-lg-6 mx-auto">

                <div class="row">
                  <div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kaD9eZinNXo"></iframe>
</div>
                    <div class="col-sm-5 col-md-6 col-lg-6 controls"><input type="range" value="0" id="progress-bar" class="dqv-range prog"></div>
                    <div class="col-md-12"><select class="form-control-sm d-none" id="speed"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
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
