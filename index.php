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
        <div style="padding:0;padding-top:30px;padding-right:300px;padding-left:300px;">
          <?php
          session_start();

          $handle = db_connect();
          if (mysqli_connect_errno($handle))
          {
              echo "fail connect DB " . mysqli_connect_error();
          }
          $res= mysqli_query($handle,"SELECT * FROM stories where id in (1)");

          while ($row = mysqli_fetch_array($res)) {


           ?>

            <figure class="snip1527">

            <div class="image">


            <img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>"<?php } ?> alt="pr-sample23" /></div>

            <figcaption>
              <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
              <h3>Dark Souls: Remaster</h3>
              <p>
                Then, there was fire. Re-experience the critically acclaimed, genre-defining game that started it all. Beautifully remastered, return to Lordran in stunning high-definition detail running at 60fps. Dark Souls Remastered includes the main game plus the Artorias of the Abyss DLC.
              </p>
            </figcaption>

                <div class="demo-actions" id="video1">
                  <a href="#" class="btn btn-default btn-show"></a>


            </div>
          </figure>

            <?php

            $res= mysqli_query($handle,"SELECT * FROM stories where id in (2)");

            while ($row = mysqli_fetch_array($res)) {


             ?>
             <figure class="snip1527">
             <div class="image"><img class=" mx-auto w-100 d-block" src="<?php echo$row["image"] ?>"<?php } ?> alt="pr-sample23" /></div>

             <figcaption>
               <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
               <h3>Japanese game</h3>
               <p>

                 Then, there was fire. Re-experience the critically acclaimed, genre-defining game that started it all. Beautifully remastered, return to Lordran in stunning high-definition detail running at 60fps. Dark Souls Remastered includes the main game plus the Artorias of the Abyss DLC.
               </p>
             </figcaption>
             <div class="demo-actions" id="video2">
               <a href="#" class="btn btn-default btn-show"></a>


         </div>
           </figure>

            <?php

            $res= mysqli_query($handle,"SELECT * FROM stories where id in (3)");

            while ($row = mysqli_fetch_array($res)) {


             ?>
             <figure class="snip1527">
             <div class="image"><img class=" mx-auto w-100 d-block" src="<?php echo$row["image"] ?>"<?php } ?> alt="pr-sample23" /></div>

             <figcaption>
               <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
               <h3>Game Name</h3>
               <p>
Then, there was fire. Re-experience the critically acclaimed, genre-defining game that started it all. Beautifully remastered, return to Lordran in stunning high-definition detail running at 60fps. Dark Souls Remastered includes the main game plus the Artorias of the Abyss DLC.
               </p>
             </figcaption>
             <div class="demo-actions" id="video3">
               <a href="#" class="btn btn-default btn-show"></a>


         </div>
           </figure>
        </div>
    </div>




    <?php $sql = "SELECT NewsID, NewsTitle, NewsDesc, Summary FROM news_desc WHERE NewsID = 1";
    $result = $handle->query($sql); ?>



    <div style="background-size:contain;background-repeat:no-repeat;height:550px;">
        <h1 class="text-center" style="font-weight:bold;">News</h1>
        <div class="card-group" style="padding:0;padding-top:30px;padding-right:300px;padding-left:300px;">
            <div class="card"><img class="card-img-top w-100 d-block">
                <div class="card-body">

                    <h4 class="card-title"><?php if($result -> num_rows > 0){
                  	while($row = $result -> fetch_assoc()){
                  		echo $row["NewsTitle"];

                   ?></h4>
                    <p class="card-text"><?php echo $row["Summary"];
                  }} ?></p><button class="btn btn-info" type="button">Check More</button></div>
            </div>

            <?php $sql = "SELECT NewsID, NewsTitle, NewsDesc, Summary FROM news_desc WHERE NewsID = 2";
            $result = $handle->query($sql); ?>
            <div class="card"><img class="card-img-top w-100 d-block">
                <div class="card-body">
                    <h4 class="card-title"><?php if($result -> num_rows > 0){
                  	while($row = $result -> fetch_assoc()){
                  		echo $row["NewsTitle"];

                   ?></h4>
                    <p class="card-text"><?php echo $row["Summary"];
                  }} ?></p><button class="btn btn-info" type="button">Check More</button></div>
            </div>

            <?php $sql = "SELECT NewsID, NewsTitle, NewsDesc, Summary FROM news_desc WHERE NewsID = 3";
            $result = $handle->query($sql); ?>
            <div class="card"><img class="card-img-top w-100 d-block">
                <div class="card-body">
                    <h4 class="card-title"><?php if($result -> num_rows > 0){
                  	while($row = $result -> fetch_assoc()){
                  		echo $row["NewsTitle"];

                   ?></h4>
                    <p class="card-text"><?php echo $row["Summary"];
                  }} ?></p><button class="btn btn-info" type="button">Check More</button></div>
            </div>
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
                            title       : 'Dark Souls: Remaster',
                            content     : '<iframe width="820" height="315" src="https://www.youtube.com/embed/1yVOMHz9luo" frameborder="0" allowfullscreen>' +
                                            '</iframe>',
                            buttons     : {
                                close   : {},
                                checkmore :{action: function(){
                                    location.href = "http://google.com";
                                }}
                            }
                        });

                        return false;

                    });

                    $('#video2 .btn-show').on('click', function(){
                        new $.flavr({
                            title       : 'Dark Souls: Remaster',
                            content     : '<iframe width="820" height="315" src="https://www.youtube.com/embed/1yVOMHz9luo" frameborder="0" allowfullscreen>' +
                                            '</iframe>',
                            buttons     : {
                                close   : {},
                                checkmore :{action: function(){
                                    location.href = "http://google.com";
                                }}
                            }
                        });

                        return false;

                    });

                    $('#video3 .btn-show').on('click', function(){
                        new $.flavr({
                            title       : 'Dark Souls: Remaster',
                            content     : '<iframe width="820" height="315" src="https://www.youtube.com/embed/1yVOMHz9luo" frameborder="0" allowfullscreen>' +
                                            '</iframe>',
                            buttons     : {
                                close   : {},
                                checkmore :{action: function(){
                                    location.href = "http://google.com";
                                }}
                            }
                        });

                        return false;

                    });
                  });

    </script>
</body>

</html>
