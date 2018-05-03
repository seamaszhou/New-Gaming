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
	                <li class="nav-item" role="presentation"><a class="nav-link" href="account"><i class="fa fa-user"></i></a></li>
	            </ul>
	        </div>
	    </div>
	 </nav>
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<div class="input-info">
							<h3>Register Form :</h3>
						</div>
						<div class="form-body form-body-info">
							<form action="" method="post">
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
									<?php echo form_error('name','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group has-feedback">
									<input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group valid-form">
									<input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control" data-match=".inputPassword" data-match-error="Whoops, these don't match" name="conf_password" placeholder="Confirm password" required="">
								  <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
									<?php
									if(!empty($user['gender']) && $user['gender'] == 'Female'){
										$fcheck = 'checked="checked"';
										$mcheck = '';
									}else{
										$mcheck = 'checked="checked"';
										$fcheck = '';
									}
									?>
									<div class="radio">
										<label>
										<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
										Male
										</label>
									</div>
									<div class="radio">
										<label>
										  <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
										  Female
										</label>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
								</div>
							</form>
						</div>
						<p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
</div>
</body>
</html>
