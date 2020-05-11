<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		setcookie(session_name(), '', 100);
		session_unset($_SESSION['username']);
		session_destroy();
		$_SESSION = array();
		header("location: index.php");
	}
?>

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
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="cars.php">Cars</a></li>
						<li><a href="service.php">Service</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li>
							<?php  if (isset($_SESSION['username'])) : ?>
								Welcome <em style="color: green"><?php echo $_SESSION['username']; ?></em>
								<a name="logout" value="logout" href="index.php?logout=true" style="color: red;">LOGOUT</a>
							<?php endif ?>
						</li>
					</ul>							 
				</nav><!-- #nav-menu-container -->	
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7 col-md-6 ">
					<h6 class="text-white ">the Royal Essence of Journey</h6>
					<h1 class="text-white text-uppercase">
						Relaxed Journey Ever				
					</h1>
					<p class="pt-20 pb-20 text-white">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
				</div>
				<div class="col-lg-5  col-md-6 header-right" style="margin-top: 35px;">
					<h4 class="text-white pb-30">Book Your Car Today!</h4>
					<form class="form" role="form" autocomplete="off">
							<div class="form-group">
									<div class="default-select" id="default-select">
								<select>
									<option value="" disabled selected hidden>Select Your Car</option>
									<option value="1">BMW</option>
									<option value="1">Farrari</option>
									<option value="1">Toyota</option>
								</select>
							</div>
							</div>
							<div class="form-group row">
									<div class="col-md-6 wrap-left">
										<div class="default-select" id="default-select">
									<select>
										<option value="" disabled selected hidden>Pickup</option>
										<option value="1">Pickup One</option>
										<option value="1">Pickup Two</option>
										<option value="1">Pickup Three</option>
										<option value="1">Pickup Four</option>
									</select>
								</div>
									</div>
									<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">                                          
									<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
									<div class="input-group-prepend">
										<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>											
								</div>
									</div>
							</div>
							<div class="form-group row">
									<div class="col-md-6 wrap-left">
										<div class="default-select" id="default-select">
									<select>
										<option value="" disabled selected hidden>Drop off</option>
										<option value="1">Drop off One</option>
										<option value="1">Drop off Two</option>
										<option value="1">Drop off Three</option>
										<option value="1">Drop off Four</option>
									</select>
								</div>
									</div>
									<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">                                              
									<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
									<div class="input-group-prepend">
										<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>											
								</div>
									</div>
							</div>							    
							<div class="from-group">
								<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
								<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
								<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
							</div>
							<div class="form-group row">
									<div class="col-md-12">
											<button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
									</div>
							</div>
					</form>
				</div>											
			</div>
		</div>					
	</section>
	<!-- End banner Area -->	

	<!-- Start feature Area -->
	<section class="feature-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>What Services we offer to our clients</h1>
					<p>
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-license"></span>Professional Service</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-phone"></span>Great Support</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>				
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>									
					</div>
				</div>						
			</div>
		</div>	
	</section>
	<!-- End feature Area -->		

	<!-- Start fact Area -->
	<section class="facts-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col single-fact">
					<h1 class="counter">2536</h1>
					<p>Projects Completed</p>
				</div>
				<div class="col single-fact">
					<h1 class="counter">6784</h1>
					<p>Really Happy Clients</p>
				</div>
				<div class="col single-fact">
					<h1 class="counter">1059</h1>
					<p>Total Tasks Completed</p>
				</div>
				<div class="col single-fact">
					<h1 class="counter">2239</h1>
					<p>Cups of Coffee Taken</p>
				</div>	
				<div class="col single-fact">
					<h1 class="counter">435</h1>
					<p>In House Professionals</p>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End fact Area -->		

	<!-- Start model Area -->
	<section class="model-area section-gap" id="cars">
		<div class="container">
			<div class="row d-flex justify-content-center pb-40">
				<div class="col-md-8 pb-40 header-text">
					<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
					<p class="text-center">
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>				
			<div class="active-model-carusel">
				<div class="row align-items-center single-model item">
					<div class="col-lg-6 model-left">
						<div class="title justify-content-between d-flex">
							<h4 class="mt-20">Audi 3000 msi</h4>
							<h2>$149<span>/day</span></h2>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<p>
							Capacity         : 04 Person <br>
							Doors            : 04 <br>
							Air Condition    : Dual Zone <br>
							Transmission     : Automatic
						</p>
						<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
					</div>
					<div class="col-lg-6 model-right">
						<img class="img-fluid" src="img/car.jpg" alt="">
					</div>
				</div>
				<div class="row align-items-center single-model item">
					<div class="col-lg-6 model-left">
						<div class="title justify-content-between d-flex">
							<h4 class="mt-20">Audi 3000 msi</h4>
							<h2>$149<span>/day</span></h2>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<p>
							Capacity         : 04 Person <br>
							Doors            : 04 <br>
							Air Condition    : Dual Zone <br>
							Transmission     : Automatic
						</p>
						<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
					</div>
					<div class="col-lg-6 model-right">
						<img class="img-fluid" src="img/car.jpg" alt="">
					</div>
				</div>
				<div class="row align-items-center single-model item">
					<div class="col-lg-6 model-left">
						<div class="title justify-content-between d-flex">
							<h4 class="mt-20">Audi 3000 msi</h4>
							<h2>$149<span>/day</span></h2>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<p>
							Capacity         : 04 Person <br>
							Doors            : 04 <br>
							Air Condition    : Dual Zone <br>
							Transmission     : Automatic
						</p>
						<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
					</div>
					<div class="col-lg-6 model-right">
						<img class="img-fluid" src="img/car.jpg" alt="">
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End model Area -->					

	<!-- Start callaction Area -->
	<section class="callaction-area relative section-gap">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<h1 class="text-white">Experience Great Support</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</p>
					<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
				</div>
			</div>
		</div>	
	</section>
	<!-- End callaction Area -->

	<!-- start footer Area -->		
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Quick links</h6>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Features</h6>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Resources</h6>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>												
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>							
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
																<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
																<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>	
				<p class="mt-50 mx-auto footer-text col-lg-12">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>											
			</div>
		</div>
	</footer>	
	<!-- End footer Area -->		

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>			
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfqMSyB-mYKfPhKXGPqy5IY0-daeU9gYg"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
		<script src="js/easing.min.js"></script>			
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>	
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>	
	<script src="js/owl.carousel.min.js"></script>			
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>	
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>					
	<script src="js/parallax.min.js"></script>		
	<script src="js/mail-script.js"></script>	
	<script src="js/main.js"></script>	
</body>
</html>
