<?php




$dbHost = 'ls-ecb0362e864832106d732c53f28b83115238c11d.crywkgjesajq.ap-southeast-2.rds.amazonaws.com';
$dbUsername = 'dbmasteruser';
$dbPassword = '4s-qJnSwkzzAw[7{-,T-{`Xj%0y-)3(n';
$dbName = 'ezweb';
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
