<!DOCTYPE html>
<html>


<?php include 'php_files/head.php'; ?>


<body>
<?php include 'php_files/nav.php'; ?>
    <div class="mt-5">

  <?php include 'php_files/db_fns.php';
  ?>
    </div>
    <div style="padding:0;padding-top:30px;" class="row justify-content-center align-items-center">
      <?php $handle = db_connect();
      $sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 1";
      $result = $handle->query($sql);
      while ($row = $result -> fetch_assoc()) { ?>
	<figure class="snip1527">
  <div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    <h3><?php
      echo $row["NewsTitle"];

   ?></h3>
    <p>

      <?php echo $row["short_desc"];
    } ?>
    </p>
  </figcaption>
  <a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 2";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 3";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>

<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 1";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 2";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 3";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 2";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 1";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 2";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
<?php
$sql = "SELECT NewsID, NewsTitle, NewsDesc, short_desc,image FROM news WHERE NewsID = 3";
$result = $handle->query($sql);
while ($row = $result -> fetch_assoc()) { ?>
<figure class="snip1527">
<div class="image"><img  src="<?php echo$row["image"] ?>"alt="pr-sample23" /></div>

<figcaption>
<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
<h3><?php
echo $row["NewsTitle"];

?></h3>
<p>

<?php echo $row["short_desc"];
} ?>
</p>
</figcaption>
<a href="news-d.php"></a>
</figure>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
