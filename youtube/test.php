<?php
//$channelId = 'PLvGblRCkbOKWRE-wumwV2_YXjCr1llNad';
//$access_token = 'AIzaSyBhL1Po7rECEWO2xj531srkeg6E-jjIksI';
$playlistId = 'UCe-nw2Z-ooq79kJp1NVT_Lw';
$API_key    = 'AIzaSyBhL1Po7rECEWO2xj531srkeg6E-jjIksI';
$maxResults = 10;

$data = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$playlistId.'&maxResults='.$maxResults.'&key='.$API_key.''));

echo $data->items[0]->snippet->resourceId->videoId;

foreach($data->items as $playlist){
  $image = $playlist->snippet->thumbnails->default->url;
  $title = $playlist->snippet->title;
  $channel = $playlist->snippet->channelTitle;




 ?>
<div class="row">
      <img src="<?php echo $image; ?>" alt="">
</div>
<div class="col-xs-12 col-md-8 col-sm-8 video-container">
  <iframe src="https://www.youtube.com/embed/<?php echo $data->items[0]->snippet->resourceId->videoId;?>" frameboard="0" allowfullscreen="" width="100%" height="450px"></iframe>
</div>
<?php echo $title; ?>
<?php echo $channel;} ?>
