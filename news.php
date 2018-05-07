<!DOCTYPE html>
<html>


<?php include 'php_files/head.php'; ?>


<body>
<?php include 'php_files/nav.php'; ?>
    <div class="mt-5">

  <?php include 'php_files/db_fns.php';
  $handle = db_connect();?>
    </div>
	<figure class="snip1527">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample23.jpg" alt="pr-sample23" /></div>
  <?php $sql = "SELECT NewsID, NewsTitle, NewsDesc, Summary FROM news_desc WHERE NewsID = 1";
  $result = $handle->query($sql); ?>
  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    <h3><?php if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
      echo $row["NewsTitle"];

   ?></h3>
    <p>

      <?php echo $row["Summary"];
    }} ?>
    </p>
  </figcaption>
  <a href="news-d.php"></a>
</figure>
<figure class="snip1527 hover">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample24.jpg" alt="pr-sample24" /></div>
  <?php $sql = "SELECT NewsID, NewsTitle, NewsDesc, Summary FROM news_desc WHERE NewsID = 2";
  $result = $handle->query($sql); ?>
  <figcaption>
    <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
    <h3><?php if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
      echo $row["NewsTitle"];

   ?></h3>
    <p>

      <?php echo $row["Summary"];
    }} ?>
    </p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample25.jpg" alt="pr-sample25" /></div>
  <?php $sql = "SELECT NewsID, NewsTitle, NewsDesc, Summary FROM news_desc WHERE NewsID = 3";
  $result = $handle->query($sql); ?>
  <figcaption>
    <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
    <h3><?php if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
      echo $row["NewsTitle"];

   ?></h3>
    <p>

      <?php echo $row["Summary"];
    }} ?>
    </p>
  </figcaption>
  <a href="#"></a>
</figure><figure class="snip1527">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample23.jpg" alt="pr-sample23" /></div>
  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    <h3>The World Ended Yesterday</h3>
    <p>

      You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you don't have an attitude.
    </p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1527 hover">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample24.jpg" alt="pr-sample24" /></div>
  <figcaption>
    <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
    <h3>An Abstract Post Heading</h3>
    <p>

      Sometimes the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
    </p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample25.jpg" alt="pr-sample25" /></div>
  <figcaption>
    <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
    <h3>Down with this sort of thing</h3>
    <p>

      I don't need to compromise my principles, because they don't have the slightest bearing on what happens to me anyway.
    </p>
  </figcaption>
  <a href="#"></a>
</figure>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
