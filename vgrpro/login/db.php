<?php
/* Database connection settings */
$host = 'ls-ecb0362e864832106d732c53f28b83115238c11d.crywkgjesajq.ap-southeast-2.rds.amazonaws.com';
$user = 'dbmasteruser';
$pass = '4s-qJnSwkzzAw[7{-,T-{`Xj%0y-)3(n';
$db = 'ezweb';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
