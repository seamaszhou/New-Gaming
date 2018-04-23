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
</head>

<body>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean">
	    <div class="container"><a class="navbar-brand" href="#">VGR-PRO</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
	        <div class="collapse navbar-collapse"
	        id="navcol-1">
	            <ul class="nav navbar-nav ml-auto">
	                <li class="nav-item" role="presentation"><a class="nav-link" href="../../index.php">Home</a></li>
	                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="../../game.php">Games&nbsp;</a>
	                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../../game.php">Games</a><a class="dropdown-item" role="presentation" href="../../news.php">News</a><a class="dropdown-item" role="presentation" href="#"></a></div>
	                </li>
	                <li class="nav-item" role="presentation"><a class="nav-link" href="../../collection.php">Collection</a></li>
	                <li class="nav-item" role="presentation"><a class="nav-link" href="login"><i class="fa fa-user"></i></a></li>
	            </ul>
	        </div>
	    </div>
	 </nav>

<div class="container">
    <!-- validation -->
	<div class="grids">

							<?php
								if(!empty($success_msg)){
									echo '<p class="statusMsg">'.$success_msg.'</p>';
								}elseif(!empty($error_msg)){
									echo '<p class="statusMsg">'.$error_msg.'</p>';
								}
							?>
						</div>

						<div class="login-card">
							<div>
					<h2 class="text-center">User name</h2>
						</div><img class="img-fluid profile-img-card" src="assets/img/avatar_2x.png">
							<form action="" method="post">
								<div class="form-group has-feedback">
									<input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="">
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
									<!--<input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>-->
									<button
                class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="loginSubmit" value="Submit">Login </button>
								</div>
							</form>
							<a href="<?php echo base_url(); ?>users/registration">Need an account?</a>

						</div>




	</div>
	<!-- //validation -->
</div>
</body>
</html>
