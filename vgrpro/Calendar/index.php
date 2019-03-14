<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('../php_files/head3.php') ?>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="jquery.min.js"></script>
<title>vgrpro</title>
</head>
<body>

<?php include('../php_files/nav2.php') ?>

<div id="calendar_div" style="padding-top:100px;">
		<h2 style="color:black" class="text-center">Game Release Calendar</h2>
	<?php echo getCalender(); ?>
</div>

</body>
</html>
