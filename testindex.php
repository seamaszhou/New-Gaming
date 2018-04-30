<html>
<head>
<title>Simple PHP Shopping Cart</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include("connect.php");
include("upload.php");
?>
<div id="product-grid">
<div class="txt-heading">Products</div>
<?php

$sql="SELECT*FROM image";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==0){
echo "No Image Found";
}else{
while($row=mysql_fetch_array($result)){?>


 <div class="product-item">
  <div class="product-image"><img src="files/<?php echo $row['name'];?>"></div>
  <div><strong><?php echo $row['name'];?></strong></div>
  <div class="product-size">Size: <?php echo $row['size']/1024;?>KB</div>
 </div>
<?php }}?>

</div>

</body>
</html>
