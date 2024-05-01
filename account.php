<?php
include('helper/config.php');
include('scripts/login-script.php');
include('scripts/signup-script.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Gym php-5 Template | Login / Register</title>
	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">

	<!-- Color Switcher Mockup -->
	<link href="assets/css/color-switcher-design.css" rel="stylesheet">
	<link rel="stylesheet" href="components/header.php">

	<!-- Color Themes -->
	<link id="theme-color-file" href="assets/css/color-themes/default-theme.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/php5shiv/3.7.3/php5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<?php include('components/header.php') ?>
		<!-- End Main Header -->

		<!--Page Title-->
		<section class="page-title" style="background-image:url(assets/images/background/R2.jpeg)">
			<div class="auto-container">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Login / Register</h2>
						<div class="text">Fitness is not a destination it is a way of life.</div>
					</div>
					<div class="pull-right">
						<ul class="page-breadcrumb">
							<li><a href="index-2.php">home</a></li>
							<li>Login / Register</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Page Title-->

		<!-- Sidebar Cart Item -->
		<div class="xs-sidebar-group info-group">
			<div class="xs-overlay xs-bg-black"></div>
			<div class="xs-sidebar-widget">
				<div class="sidebar-widget-container">
					<div class="widget-heading">
						<a href="#" class="close-side-widget">
							X
						</a>
					</div>
					<div class="sidebar-textwidget">

						<!-- Sidebar Info Content -->
						<div class="sidebar-info-contents">
							<div class="content-inner">
								<div class="logo">
									<a href="index-2.php"><img src="assets/images/logo.png" alt="" /></a>
								</div>
								<div class="content-box">
									<h2>About Us</h2>
									<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
									<a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
								</div>
								<div class="contact-info">
									<h2>Contact Info</h2>
									<ul class="list-style-one">
										<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
										<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
										<li><span class="icon fa fa-envelope"></span>Gym@gmail.com</li>
										<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
									</ul>
								</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
									<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
									<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
									<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- END sidebar widget item -->


		<!--Register Section-->
		<section class="register-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Form Column-->
					<div class="form-column column col-lg-6 col-md-12 col-sm-12">

						<div class="sec-title">
							<h2>Login Now</h2>
							<div class="separate"></div>
						</div>

						<!--Login Form-->
						<div class="styled-form login-form">
							<form method="post" action="#">
								<div class="form-group">
									<span class="adon-icon"><span class="fa fa-user"></span></span>
									<input type="text" name="username" value="" placeholder="Your Name *">
								</div>
								<div class="form-group">
									<span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
									<input type="email" name="useremail" value="" placeholder="Emai Address*">
								</div>
								<div class="form-group">
									<span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
									<input type="password" name="userpassword" value="" placeholder="Enter Password">
								</div>
								<div class="clearfix">
									<div class="form-group pull-left">
										<button type="submit" class="theme-btn btn-style-three" name="login"><span class="txt">Login Now</span></button>
									</div>
									<div class="form-group social-links-two pull-right">
										Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
									</div>
								</div>

								<div class="clearfix">
									<div class="pull-left">
										<input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
									</div>
								</div>

							</form>
						</div>

					</div>

					<!--Form Column-->
					<div class="form-column column col-lg-6 col-md-12 col-sm-12">

						<div class="sec-title">
							<h2>Register Here</h2>
							<div class="separate"></div>
						</div>

						<!--Login Form-->
						<div class="styled-form register-form">
							<form method="post" action="#">
								<div class="form-group">
									<span class="adon-icon"><span class="fa fa-user"></span></span>
									<input type="text" name="username" value="" placeholder="Your Name *">
								</div>
								<div class="form-group">
									<span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
									<input type="email" name="useremail" value="" placeholder="Emai Address*">
								</div>
								<div class="form-group">
									<span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
									<input type="password" name="userpassword" value="" placeholder="Enter Password">
								</div>
								<div class="clearfix">
									<div class="form-group pull-left">
										<button type="submit" class="theme-btn btn-style-three" name="signup_form"><span class="txt">Register here</span></button>
									</div>
									<div class="form-group submit-text pull-right">
										* You must be a free registered to submit content.
									</div>
								</div>

							</form>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!--End Register Section-->

		<!-- Subscribe Section -->
		<section class="subscribe-section">
			<div class="auto-container">
				<div class="inner-container margin-bottom">
					<div class="pattern-layer" style="background-image:url(assets/images/background/7.jpg)"></div>
					<div class="section-image" style="background-image:url(assets/images/resource/newslatter.png)"></div>
					<div class="row clearfix">

						<!-- Title Column -->
						<div class="title-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h3>Don’t miss any updates <br> Get subscribed!</h3>
							</div>
						</div>

						<!-- Form Column -->
						<div class="form-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">

								<div class="newsletter-form">
									<form method="post" action="https://expert-themes.com/php/gym/contact.php">
										<div class="form-group">
											<input type="email" name="email" value="" placeholder="Add your email ......" required="">
											<button type="submit" class="theme-btn submit-btn"><span class="txt">Subscribe</span></button>
										</div>
									</form>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Subscribe Section -->

		<!-- Main Footer -->
		<?php include('components/footer.php') ?>

	</div>
	<!--End pagewrapper-->

	<!-- Color Palate / Color Switcher -->



	<!-- Search Popup -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
		<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
		<form method="post" action="https://expert-themes.com/php/gym/blog.php">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
	<!-- End Header Search -->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="php"><span class="fa fa-arrow-up"></span></div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/tilt.jquery.min.js"></script>
	<script src="js/jquery.paroller.min.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/mixitup.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/nav-tool.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/script.js"></script>
	<script src="js/color-settings.js"></script>

</body>

</php>

