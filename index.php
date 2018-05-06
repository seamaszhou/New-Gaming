<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
    <div>
	<?php include 'php_files/nav.php'; ?>
    </div>
    <div style="background-image:url(&quot;assets/img/firewatch-sd-2560x1080.jpg&quot;);background-size:cover;background-repeat:no-repeat;height:851px;"><h1 class="text-center" style="color:#ffffff;font-size:60px;padding-top:15%;">VGR-PRO</h1><h1 class="text-center" style="color:#ffffff;font-size:20px;">Find the newest game news and reviews!</h1></div>
    <div style="background-size:contain;background-repeat:no-repeat;height:750px;">
        <h1 class="text-center" style="font-weight:bold;padding-top:100px;">New Games</h1>
        <div class="card-group" style="padding:0;padding-top:30px;padding-right:300px;padding-left:300px;">
          <?php
          session_start();
          include_once('db_fns.php');
          $handle = db_connect();
          if (mysqli_connect_errno($handle))
          {
              echo "fail connect DB " . mysqli_connect_error();
          }
          $res= mysqli_query($handle,"SELECT * FROM stories where id in (1)");

          while ($row = mysqli_fetch_array($res)) {


           ?>
            <div class="card border-light"><img class="card-img-top mx-auto w-50 d-block" src="<?php echo$row["image"] ?>"/><?php } ?>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>

            <?php

            $res= mysqli_query($handle,"SELECT * FROM stories where id in (2)");

            while ($row = mysqli_fetch_array($res)) {


             ?>
            <div class="card border-light "><img class="card-img-top mx-auto w-50 d-block" src="<?php echo$row["image"] ?>"/><?php } ?>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>

            <?php

            $res= mysqli_query($handle,"SELECT * FROM stories where id in (3)");

            while ($row = mysqli_fetch_array($res)) {


             ?>
            <div class="card border-light"><img class="card-img-top mx-auto w-50 d-block" src="<?php echo$row["image"] ?>"/><?php } ?>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>
        </div>
    </div>

    <div style="background-size:contain;background-repeat:no-repeat;height:550px;">
        <h1 class="text-center" style="font-weight:bold;">News</h1>
        <div class="card-group" style="padding:0;padding-top:30px;padding-right:300px;padding-left:300px;">
            <div class="card"><img class="card-img-top w-100 d-block">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="card"><img class="card-img-top w-100 d-block">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="card"><img class="card-img-top w-100 d-block">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>
        </div>
    </div>

    </div>
<?php include 'php_files/footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
