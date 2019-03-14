<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js
 "></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
<?php

$api_key = 'AIzaSyBhL1Po7rECEWO2xj531srkeg6E-jjIksI';

$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;
$playlist = json_decode(file_get_contents($api_url));
?>
<div class="container">
  <div class="row">


  <div class="col-xs-4 col-md-4 col-sm-4" style="padding:0px; background-color:#cc;">
    <ul class="list-group" style="padding:0px;">
      <?php
        foreach ($playlist->items AS $item) {
        $title = $item->snippet->title;
        $image = $item->snippet->thumbnails->default->url;
        $videoId = $item->snippet->resourceId->videoId;
        // code...
       ?>
        <li class="list-group-item">
          <span style="cursor:pointer;margin-bottom:10px;" onclick="switchVideo('<?php echo $videoId; ?>');">
              <div class="col-xs-12" id="vid-<?php echo $videoId;?>" style="padding-right:0px;padding-top:8px;padding-bottom:8px;border-bottom:1px solid white;">
                <div class="row">


                <div class="image col-md4 col-lg-4" style="padding-left:0px;">
<img src="<?php echo $image; ?>">
                </div>
                <div class="text col-md-8 col-lg-8">
                  <?php echo $title; ?>

                </div>

</div>
              </div>
              </span>
        </li>
      <?php } ?>
    </ul>


  </div>

<div class="col-xs-12 col-md-8 col-sm-8 video-container">

      <iframe src="https://www.youtube.com/embed/<?php echo $item->snippet->resourceId->videoId;?>" frameboard="0" allowfullscreen="" width="100%" height="450px"></iframe>

    </div>


  </div>
  </div>


<script >
    $("#vid-<?php echo $playlist->items[0]->snippet->resourceId->videoId;?>").addClass('selected');
    function switchVideo (videoId) {
       $(".video-container iframe").attr('src','https://www.youtube.com/embed/' + videoId);
       $(".selected").removeClass('selected');
       $("#vid-"+videoId).addClass('selected');
}
</script>
