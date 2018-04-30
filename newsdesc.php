<html>
<head>
</head>


<body>
<?php

$user = "root";
$pass = "";
$database = "news";

$database = new mysqli("localhost", $user, $pass, $database) or die ("Unable to connect");

if ($database->connect_errno) {
    echo "Failed to connect to MySQL: (" . $database->connect_errno . ") " . $database->connect_error;
}


$sql = "SELECT NewsID, NewsTitle, NewsDesc FROM news_desc WHERE NewsID = 4";
$result = $database->query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["NewsTitle"]. "<br>" . $row["NewsDesc"];
	}
}


if ($database->connect_errno) {
    echo "Failed to connect to MySQL: (" . $database->connect_errno . ") " . $database->connect_error;
}

$database -> close();
?>
</body>

</html>