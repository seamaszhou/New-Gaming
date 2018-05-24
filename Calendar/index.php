<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('../php_files/head3.php') ?>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="jquery.min.js"></script>
</head>
<body>
<?php include('../php_files/nav.php') ?>
<div id="calendar_div">
	<?php echo getCalender(); ?>
</div>

</body>
</html>
