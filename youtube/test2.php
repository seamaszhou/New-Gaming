<?php
//Get videos from channel by YouTube Data API
$API_key    = 'AIzaSyBhL1Po7rECEWO2xj531srkeg6E-jjIksI';
$channelID  = 'UCe-nw2Z-ooq79kJp1NVT_Lw';

//$API_key    = 'AIzaSyCGP9SuEm8fyx5gKVhjHXR8xnxdQt6xMaM';
//$channelID  = 'UCrxbEUEIrICawyYIDUZgdrw';
$maxResults = 10;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

foreach($videoList->items as $item){
    //Embed video
    if(isset($item->id->videoId)){
        echo '<div class="youtube-video">
                <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                <h2>'. $item->snippet->title .'</h2>
            </div>';
    }
}

 ?>
