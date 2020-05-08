<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Car Rentals</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">					
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">		
</head>
<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				</div>		
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home" style="height: 100%">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="col-lg-5  col-md-6 header-right" style='margin-top: 50px;'>
					<h4 class='text-white pb-30'>Register</h4>

					<form class='form' method="post" action="register.php">

						<?php include('errors.php'); ?>

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class='form-control txt-field' value="<?php echo $username; ?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class='form-control txt-field' value="<?php echo $email; ?>">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class='form-control txt-field' name="password_1">
						</div>
						<div class="form-group">
							<label>Confirm password</label>
							<input type="password" class='form-control txt-field' name="password_2">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="reg_user">Register</button>
						</div>
						<h6 class='text-white pb-30'>
								Already a member? <a href="index.php">Sign in</a>
						</h6>
					</form>
				</div>			
			</div>
		</div>					
	</section>
	<!-- End banner Area -->	
</body>
</html>