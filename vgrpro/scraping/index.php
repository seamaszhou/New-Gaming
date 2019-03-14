<?php

use Symfony\Component\DomCrawler\Crawler;

require 'vendor/autoload.php';

//url
$term = 'pig';
$url = "https://www.pinterest.com.au/search/pins/?q='.$term.'&rs=typed&term_meta[]='.$term.'%7Ctyped";
$client = new \GuzzleHttp\Client();

//go get the data from url
$res = $client->request('GET', $url);
$html = ''.$res->getBody();
$crawler = new Crawler($html);


$items = $crawler->filter('.gridCentered>div > div >div')->each(function(Crawler $node, $i){
   //echo $node->html();

   $text = $node->text();
   $image = $node->filter('img')->attr('src');
   $item =[
     'image'=>$image,
     'text'=>$text
   ];


   return $item;

});
foreach ($items as $item ) {
  // code...
  echo '<img src="'.$item['image'].'"/>';
  echo "<p>".$item['text'].'</p>';
}



//loop through the data

//search for value that I want

//echo back out to the screen
 ?>
