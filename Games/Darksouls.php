<!DOCTYPE html>
<html>

<?php include 'php_files/head.php'; ?>

<body>
    <div>
        <?php include 'php_files/nav.php'; ?>
        <?php include 'php_files/db_fns.php'; ?>
    </div>
    <div id="empresa" style="padding:20px;margin:1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1>Game Name</h1>
                    <p>Game Description</p><small>Price :&nbsp;</small></div>
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/law-document.jpeg"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="dqv">
        <h1></h1>
        <div class="row">
            <div class="col-sm-8 col-md-7 col-lg-6 mx-auto">
                <div id="video-placeholder"><img class="img-fluid" src="assets/img/video_place_holder.jpg"></div>
                <div class="row">
                    <div class="col-sm-7 col-md-6 col-lg-6 controls"><i class="material-icons" id="prev">skip_previous</i><i class="material-icons" id="pause">pause</i><i class="material-icons" id="play">play_arrow</i><i class="material-icons" id="next">skip_next</i><i class="material-icons" id="mute-toggle">volume_up</i>
                        <input
                            type="range" min="0" max="100" step="1" id="volume-input" class="dqv-range vol">
                            <div>
                                <div class="dqv-range dur"><span id="current-time">0:00</span><span> / </span><span id="duration">0:00</span></div>
                            </div>
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-6 controls"><input type="range" value="0" id="progress-bar" class="dqv-range prog"></div>
                    <div class="col-md-12"><select class="form-control-sm d-none" id="speed"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Dynamically-Queue-Videos.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="assets/js/Video-Parallax-Background.js"></script>
</body>

</html>
