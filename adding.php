<?php
	session_start();
	
	if(!isset($_SESSION['favourites'])){$_SESSION['favourites']= [];}
	
	function is_favourite($id){
		return in_array($id, $_SESSION['favourites']);
	}
	
?>

<style>

button.favourite-button{
	display : inline;
}

.favourite button.favourite-button{
	display : none;
}

button.unfavourite-button{
	display : none;
}

.favourite button.unfavourite-button{
	display : inline;
}

.favourite-star{
	color : yellow;
	font-size : 2em;
	float : right;
	display : none;
}

.favourite .favourite-star{
	display: block;
	}
</style>


<body>
	<div id = "blog-posts">
	<div id = "blog-post-101" class "blog-post <?php if(is_favourite(101)){
	echo 'favourite' ;} ?>"> 
	<span class = "favourite-star">&starf;</span>
	<h3>Blog Post 101</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<button class = "favourite-button">Favourite</button>
	<button class = "unfavourite-button">Unfavourite</button>
	</div>
	<div id = "blog-post-102" class "blog-post <?php if(is_favourite(102)){
	echo 'favourite';} ?>">
	<span class = "favourite-star">&starf;</span>
	<h3>Blog Post 102</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<button class = "favourite-button">Favourite</button>
	<button class = "unfavourite-button">Unfavourite</button>
	</div>
	<div id = "blog-post-103" class "blog-post <?php if(is_favourite(103)){
	echo 'favourite';} ?>">
	<span class = "favourite-star">&starf;</span>
	<h3>Blog Post 103</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<button class = "favourite-button">Favourite</button>
	<button class = "unfavourite-button">Unfavourite</button>
	</div>
	</div>
	
	<script>
	function favourite(){
		var parent = this.parentElement;
		
		var xhr = new XMLHttpRequest();
		xhr.open('POST','favourite.php', true);
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				var result = xhr.responseText;
				console.log('Result: ' + result);
				if(result == 'true'){
					parent.classList.add("favourite");
				}
			}
		};
		xhr.send("id=" + parent.id);
	}
	
	var buttons = document.getElementsByClassName("favourite-button");
	for(i=0; i < buttons.length; i++){
		buttons.item(i).addEventListener("click", favourite);
	}
	function unfavourite(){
		var parent = this.parentElement;
		
		var xhr = new XMLHttpRequest();
		xhr.open('POST','unfavourite.php', true);
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				var result = xhr.responseText;
				console.log('Result: ' + result);
				if(result == 'true'){
					parent.classList.remove("favourite");
				}
			}
		};
		xhr.send("id=" + parent.id);
	}
	
	var buttons = document.getElementsByClassName("unfavourite-button");
	for(i=0; i < buttons.length; i++){
		buttons.item(i).addEventListener("click", unfavourite);
	}
	</script>
	</body>
	
	