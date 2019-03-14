<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "ezweb");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM games
  WHERE Name LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM tbl_customer ORDER BY CustomerID";
}
$result = $connect->query($query);
if($result )
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">

 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
    <td>'.$row["Name"].'</td>
    <td><a href="Games/'.$row["id"].'.php" ?>"<img src="'.$row["image"].'"/></a></td>

  ';
 }
 echo $output;
}
else
{

}

?>
