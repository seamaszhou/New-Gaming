<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'seamas';
$dbPassword = 'zjd670810';
$dbName = 'ezweb';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
