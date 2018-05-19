<?php

    $playlistId = 'UCe-nw2Z-ooq79kJp1NVT_Lw';
    $API_key    = 'AIzaSyBhL1Po7rECEWO2xj531srkeg6E-jjIksI';
    $maxResults = 10;

    $data = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$playlistId.'&maxResults='.$maxResults.'&key='.$API_key.''));






 ?>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js
 "></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">

<div class="container">
  <div class="row" style="margin-top:50px;">
    <div class="col-xs-12 col-md-8 col-sm-8 video-container">

      <iframe src="https://www.youtube.com/embed/<?php echo str_replace("https://i.ytimg.com/vi/","",$data->items[0]->snippet->thumbnails->high->url);?>" frameboard="0" allowfullscreen="" width="100%" height="450px"></iframe>

    </div>

    <div class="col-xs-12 col-md-4 col-sm-4" style="padding:0px; background-color:#cc;">
      <ul style="padding:0px;">
        <?php
          foreach ($data -> items as $video) {
          $title = $video->snippet->title;
          $description = $video->snippet->description;

          $thumbail = $video->snippet->thumbnails->high->url;

          $videoId = str_replace("https://i.ytimg.com/vi/","",$video->snippet->thumbnails->high->url);


          // code...
         ?>
          <li>
            <span style="cursor:pointer;margin-bottom:10px;" onclick="switchVideo('<?php echo $videoId; ?>');">
                <div class="col-xs-12" id="vid-<?php echo $videoId;?>" style="padding-right:0px;padding-top:8px;padding-bottom:8px;border-bottom:1px solid white;">
                  <div class="image col-md4 col-lg-4" style="padding-left:0px;">

                  </div>
                  <div class="text col-md-8 col-lg-8">
                    <?php echo $title; ?>

                  </div>

                </div>
                </span>
          </li>
        <?php } ?>
      </ul>
    </div>

  </div>

</div>
<script >
    $("#vid-<?php echo str_replace("https://i.ytimg.com/vi/","",$data->items[4]->snippet->thumbnails->high->url);?>").addClass('selected');
    function switchVideo (videoId) {
       $(".video-container iframe").attr('src','https://www.youtube.com/embed/' + videoId);
       $(".selected").removeClass('selected');
       $("#vid-"+videoId).addClass('selected');

    }
</script>
