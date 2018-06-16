<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php session_start();
    include_once('db_fns.php');
    $handle = db_connect();
    if (mysqli_connect_errno($handle))
    {
        echo "fail connect DB " . mysqli_connect_error();
    }
    $res= mysqli_query($handle,"SELECT * FROM stories where id in (1,7)");
    echo "<table>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>";?><img src="<?php echo$row["image"] ?>" height="100" width="100">
    <?php
      echo "</td>";
      echo "</tr>";
      // code...
    }
    echo "</table>";
      ?>
  </body>
</html>
