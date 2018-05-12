<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creative Button Styles </title>
  <meta name="description" content="Creative Button Styles  - Modern and subtle styles &amp; effects for buttons" />
  <meta name="keywords" content="button styles, css3, modern, flat button, subtle, effects, hover, web design" />
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>
</head>

<?php

use Symfony\Component\DomCrawler\Crawler;

require 'vendor/autoload.php';

//url
$term = 'pig';
$url = "http://ku.gamersky.com/release/pc_201805/";
$client = new \GuzzleHttp\Client();

//go get the data from url
$res = $client->request('GET', $url);
$html = ''.$res->getBody();
$crawler = new Crawler($html);


$items = $crawler->filter('.PF_1')->each(function(Crawler $node, $i){
   //echo $node->html();

   $text = $node->text();
   $image = $node->filter('img')->attr('src');
   $item =[
     'image'=>$image,
     'text'=>$text
   ];


   return $item;

});


$i = 1;
foreach ($items as $item ) {
  // grab images
  $image_content = file_get_contents($item['image']);
  file_put_contents('../pictures/'.$i.'.png', $image_content);
  // write to the csv

  $i++;
}






//loop through the data

//search for value that I want

//echo back out to the screen
 ?>


 <p>

   <button class="btn btn-3 btn-3e icon-arrow-right">Get Data</button>
 </p>
