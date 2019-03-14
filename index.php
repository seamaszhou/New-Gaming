<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>


<body>
    <div>
	<?php include 'php_files/nav.php'; ?>
  <?php include 'php_files/db_fns.php'; ?>

    </div>



          <div class=" demo-3" >
          	<div class="content">
          		<div id="large-header" class="large-header">
          			<canvas id="demo-canvas"></canvas>
          			<h1 class="main-title">VGR-PRO</span></h1>
          		</div>
          	</div>
          </div>
    <div style="background-size:contain;background-repeat:no-repeat;height:750px;">

        <h1 class="text-center" style="font-weight:bold;padding-top:100px;">New Games</h1>
        <div style="padding:0;padding-top:30px;" class="row justify-content-center align-items-center">
          <?php


          $handle = db_connect();
          if (mysqli_connect_errno($handle))
          {
              echo "fail connect DB " . mysqli_connect_error();
          }
          $res= mysqli_query($handle,"SELECT * FROM games where id in (1)");

          while ($row = mysqli_fetch_array($res)) {


           ?>

            <figure class="snip1527">

            <div class="image">


            <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>" alt="pr-sample23" /></div>

            <figcaption>
              <div class="date"><span class="day"><?php echo$row["Day"] ?></span><span class="month">May</span></div>
              <h3><?php echo$row["Name"] ?></h3>
              <p>
                <?php echo$row["short_desc"] ?>
              </p><?php } ?>
            </figcaption>

                <div class="demo-actions" id="video1">
                  <a href="#" class="btn btn-default btn-show"></a>


            </div>
          </figure>

            <?php

            $res= mysqli_query($handle,"SELECT * FROM games where id in (2)");

            while ($row = mysqli_fetch_array($res)) {


             ?>
             <figure class="snip1527">

             <div class="image">


             <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>" alt="pr-sample23" /></div>

             <figcaption>
               <div class="date"><span class="day"><?php echo$row["Day"] ?></span><span class="month">May</span></div>
               <h3><?php echo$row["Name"] ?></h3>
               <p>
                 <?php echo$row["short_desc"] ?>
               </p><?php } ?>
             </figcaption>

                 <div class="demo-actions" id="video2">
                   <a href="#" class="btn btn-default btn-show"></a>


             </div>
           </figure>

            <?php

            $res= mysqli_query($handle,"SELECT * FROM games where id in (3)");

            while ($row = mysqli_fetch_array($res)) {


             ?>
             <figure class="snip1527">

             <div class="image">


             <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>" alt="pr-sample23" /></div>

             <figcaption>
               <div class="date"><span class="day"><?php echo$row["Day"] ?></span><span class="month">May</span></div>
               <h3><?php echo$row["Name"] ?></h3>
               <p>
                 <?php echo$row["short_desc"] ?>
               </p><?php } ?>
             </figcaption>

                 <div class="demo-actions" id="video3">
                   <a href="#" class="btn btn-default btn-show"></a>


             </div>
           </figure>
        </div>
    </div>






    <div style="background-size:contain;background-repeat:no-repeat;height:750px;">

        <h1 class="text-center" style="font-weight:bold;padding-top:100px;">News</h1>
        <div style="padding:0;padding-top:30px;" class="row justify-content-center align-items-center">
          <?php


          $handle = db_connect();

          $sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 1";
          $result = $handle->query($sql);
          while ($row = $result -> fetch_assoc()) {


           ?>

            <figure class="snip1527">

            <div class="image">


            <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

            <figcaption>
              <div class="date"><span class="day">29</span><span class="month">May</span></div>
              <h3><?php echo$row["NewsTitle"]   ?></h3>
              <p>
               <?php } ?>
              </p>
            </figcaption>


              <a href="News/1.php"></a>
          </figure>

          <?php




          $sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 2";
          $result = $handle->query($sql);
          while ($row = $result -> fetch_assoc()) {


           ?>

            <figure class="snip1527">

            <div class="image">


            <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

            <figcaption>
              <div class="date"><span class="day">29</span><span class="month">May</span></div>
              <h3><?php echo$row["NewsTitle"]   ?></h3>
              <p>
               <?php } ?>
              </p>
            </figcaption>


            <a href="News/2.php"></a>
          </figure>

          <?php




          $sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 3";
          $result = $handle->query($sql);
          while ($row = $result -> fetch_assoc()) {


           ?>

            <figure class="snip1527">

            <div class="image">


            <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

            <figcaption>
              <div class="date"><span class="day">29</span><span class="month">May</span></div>
              <h3><?php echo$row["NewsTitle"]   ?></h3>
              <p>
                  <?php } ?>
              </p>
            </figcaption>


            <a href="News/3.php"></a>
          </figure>
        </div>
    </div>







    </div>
<?php include 'php_files/footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/buttonhover.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>

    <script type="text/javascript" src="./assets/index_files/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/index_files/flavr.min.js"></script>
    <script src="assets/js/TweenLite.min.js"></script>
    <script src="assets/js/EasePack.min.js"></script>
    <script src="assets/js/rAF.js"></script>
    <script src="assets/js/canvas.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script type="text/javascript">



    $(document).ready(function () {


                    $('#video1 .btn-show').on('click', function(){
                        new $.flavr({
                            title       : 'Ikaruga',
                            content     : '<iframe width="820" height="315" src="https://www.youtube.com/embed/kaD9eZinNXo" frameborder="0" allowfullscreen>' +
                                            '</iframe>',
                            buttons     : {
                                close   : {},
                                checkmore :{action: function(){
                                    location.href = "Games/1.php";
                                }}
                            }
                        });

                        return false;

                    });

                    $('#video2 .btn-show').on('click', function(){
                        new $.flavr({
                            title       : 'Little Nightmares',
                            content     : '<iframe width="820" height="315" src="https://www.youtube.com/embed/UuM2Sfh22c0" frameborder="0" allowfullscreen>' +
                                            '</iframe>',
                            buttons     : {
                                close   : {},
                                checkmore :{action: function(){
                                    location.href = "Games/2.php";
                                }}
                            }
                        });

                        return false;

                    });

                    $('#video3 .btn-show').on('click', function(){
                        new $.flavr({
                            title       : 'Donkey Kong Country: Tropical Freeze',
                            content     : '<iframe width="820" height="315" src="https://www.youtube.com/embed/1psp2t0Zi9o" frameborder="0" allowfullscreen>' +
                                            '</iframe>',
                            buttons     : {
                                close   : {},
                                checkmore :{action: function(){
                                    location.href = "Games/3.php";
                                }}
                            }
                        });

                        return false;

                    });
                  });

    </script>
</body>

</html>
