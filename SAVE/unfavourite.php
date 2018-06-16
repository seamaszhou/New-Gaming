<?php
session_start();
if(!isset($_SESSION['favourites'])) {$_SESSION['favourites'] = [];}


function is_ajax_request(){
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

function array_remove($element, $array){
	$index = array_search($element, $array);
	array_splice($array, $index, 1);
	return $array;
}

if(!is_ajax_request()){
	exit;
}

$raw_id = isset($_POST['id']) ? $_POST['id'] : '';

if(preg_match("/blog-post-(\d+)/", $raw_id, $matches)){
	$id = $matches[1];
		if(in_array($id, $_SESSION['favourites'])){
			$_SESSION['favourites'] = array_remove($id, $_SESSION['favourites']);
		}
	echo 'true';
}else{
	echo'false';
}


?>