<html>
<?php include 'php_files/head.php'; ?>
<title>Inserting New News</title>
<body>
    <div>
	<?php include 'php_files/nav.php'; ?>
    </div>
    <?php include 'db_fns.php'; ?>
<?php


if (isset($_POST['submitted'])){
 include('db_connect()');
 $title = $_POST['title'];
 $desc = $_POST('desc'];
 $date = date("y-m-d");
 $sqlinsert = "INSERT INTO news_desc (NewsTitle, NewsDesc, NewsDate) VALUES ('$title', '$desc', '$date')";

?>

<h1>Insert New News</h1>
<form method = "post" action ="insert.php">
<input type ="hidden" name ="submitted" value = "true"/>
<fieldset>
	<legend> New News</legend>
	<label>Title: <input type = "text" name = "title"/></label>
	<label>Title: <input type = "text" name = "desc"/></label>
</fieldset>
<input type = "submit" value = "Add"/>
</form>
</body>
</html>