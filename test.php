<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vgrpro</title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="assets/css/Video-Parallax-Background.css">
</head>


<div class="image">
<button type="button" style="display: none;position:absolute;;">Hello</button>
<img class=" mx-auto w-100  d-block" src="<?php echo$row["image"] ?>" alt="pr-sample23" /></div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">


$(document).ready(function () {
                $(document).on('mouseenter', '.image', function () {
                    $(this).find(":button").show();
                }).on('mouseleave', '.image', function () {
                    $(this).find(":button").hide();
                });
            });

</script>
