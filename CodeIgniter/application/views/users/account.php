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
									<li class="nav-item" role="presentation"><a class="nav-link" href="../../../index.php">Home</a></li>
									<li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="../../../game.php">Games&nbsp;</a>
											<div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../../../game.php">Games</a><a class="dropdown-item" role="presentation" href="../../../news.php">News</a><a class="dropdown-item" role="presentation" href="#"></a></div>
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
		<div class="progressbar-heading grids-heading">
			<h2>User Account</h2>
		</div>

		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<a href="<?php echo base_url(); ?>users/logout" class="logoutBtn">Logout</a>
						<div class="input-info">
							<h3>Welcome <?php echo $user['name']; ?>!</h3>
						</div>
						<div class="account-info">
							<p><b>Name: </b><?php echo $user['name']; ?></p>
							<p><b>Email: </b><?php echo $user['email']; ?></p>
							<p><b>Phone: </b><?php echo $user['phone']; ?></p>
							<p><b>Gender: </b><?php echo $user['gender']; ?></p>
						</div>
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
