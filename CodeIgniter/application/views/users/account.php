<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vgrpro</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Filterable-Gallery-with-Lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mloureiro1973-login.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mloureiro1973-login.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/News-Cards.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">

    <link href="../../assets/css/search.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean">
			<div class="container"><a class="navbar-brand" href="#">VGR-PRO</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse"
					id="navcol-1">
							<ul class="nav navbar-nav ml-auto">
									<li class="nav-item" role="presentation"><a class="nav-link" href="../../index.php">Home</a></li>
									<li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="../../game.php">Games&nbsp;</a>
											<div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../../../game.php">Games</a><a class="dropdown-item" role="presentation" href="../../../news.php">News</a><a class="dropdown-item" role="presentation" href="#"></a></div>
									</li>
									<li class="nav-item" role="presentation"><a class="nav-link" href="../../collection.php">Collection</a></li>
									<li class="nav-item" role="presentation"><a class="nav-link" href="account"><i class="fa fa-user"></i></a></li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#" id="addClass"><i class="fa fa-search"></i></span></a>
                  </li>
							</ul>
					</div>
			</div>
	 </nav>
   <div id="qnimate" class="off">
       <div id="search" class="open">
       <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
       <form action="http://bootsnipp.com/user/snippets/508jR" method="" autocomplete="off">
               <input type="text" placeholder="Type search keywords here" value="" name="term" id="search_text">
       </form>
       <div id="result"></div>
       </div>
   </div>





<div class="container">
    <div class="row m-y-2">
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>

            </ul>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <h4 class="m-y-2">User Name : <?php echo $user['name']; ?></h4>
                    <a href="<?php echo base_url(); ?>users/logout">logout</a><br>
                    <a href="<?php echo base_url(); ?>email">Verify your email</a>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Email address</h6>
                            <p>
                                <?php echo $user['email']; ?>
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Recent Tags</h6>
                            <a href="" class="tag tag-default tag-pill">html5</a>
                            <a href="" class="tag tag-default tag-pill">react</a>
                            <a href="" class="tag tag-default tag-pill">codeply</a>
                            <a href="" class="tag tag-default tag-pill">angularjs</a>
                            <a href="" class="tag tag-default tag-pill">css3</a>
                            <a href="" class="tag tag-default tag-pill">jquery</a>
                            <a href="" class="tag tag-default tag-pill">bootstrap</a>
                            <a href="" class="tag tag-default tag-pill">responsive-design</a>
                            <hr>
                            <span class="tag tag-primary"><i class="fa fa-user"></i> 900 Followers</span>
                            <span class="tag tag-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="tag tag-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
                            <table class="table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>


            </div>
        </div>




    </div>
</div>
<hr>
</body>
</html>

 <script type="text/javascript">
 $(function(){
 $("#addClass").click(function () {
         $('#qnimate').addClass('popup-box-on');
           });

           $("#removeClass").click(function () {
         $('#qnimate').removeClass('popup-box-on');
           });
 });
 $(document).ready(function(){

  load_data();

  function load_data(query)
  {
   $.ajax({
    url:"../../php_files/fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('#result').html(data);
    }
   });
  }
  $('#search_text').keyup(function(){
   var search = $(this).val();
   if(search != '')
   {
    load_data(search);
   }
   else
   {
    load_data();
   }
  });
 });

 </script>
