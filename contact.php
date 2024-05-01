<?php

include('helper/config.php');
if (isset($_POST['submit_form'])) {
	$name = $_POST['username'];
	$email = $_POST['email'];

	$subject = $_POST['subject'];

	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$query = mysqli_query($con, "INSERT INTO student (Name, Email, Subject, Phone, Message) VALUES ('$name', '$email', '$subject', '$phone', '$message')");
}



?>






<!DOCTYPE html>

<html>


<head>

	<meta charset="utf-8">

	<title>Gym HTML-5 Template | Contact</title>

	<!-- Stylesheets -->

	<link href="assets/css/bootstrap.css" rel="stylesheet">



	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="components/header.php">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="helper/config.php">



	<!-- Color Switcher Mockup -->

	<link href="assets/css/color-switcher-design.css" rel="stylesheet">



	<!-- Color Themes -->

	<link id="theme-color-file" href="assets/css/color-themes/default-theme.css" rel="stylesheet">



	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">



	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

	<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">



	<!-- Responsive -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">





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

						<h2>Contact Us</h2>

						<div class="text">Fitness is not a destination it is a way of life.</div>

					</div>

					<div class="pull-right">

						<ul class="page-breadcrumb">

							<li><a href="index-2.php">home</a></li>

							<li>Contact Us</li>

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



		<!-- Contact Form Section -->

		<section class="contact-form-section">

			<div class="auto-container">



				<div class="row clearfix">



					<!-- Title Column -->

					<div class="title-column col-lg-4 col-md-12 col-sm-12">

						<div class="inner-column">

							<!-- Sec Title -->

							<div class="sec-title">

								<div class="title">Contact Now</div>

								<h2>Ask Us <br> Anything</h2>

							</div>

							<div class="text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>

						</div>

					</div>



					<!-- Form Column -->

					<div class="form-column col-lg-8 col-md-12 col-sm-12">

						<div class="inner-column">



							<!-- Default Form -->

							<div class="default-form style-two contact-form">



								<!-- Default Form -->

								<form method="POST" action="http://localhost/gym/contact.php">

									<div class="row clearfix">



										<div class="col-lg-6 col-md-6 col-sm-12 form-group">

											<input type="text" name="username" placeholder="Name" required>

										</div>



										<div class="col-lg-6 col-md-6 col-sm-12 form-group">

											<input type="email" name="email" placeholder="Email" required>

										</div>



										<div class="col-lg-6 col-md-6 col-sm-12 form-group">

											<input type="text" name="subject" placeholder="Subject" required>

										</div>



										<div class="col-lg-6 col-md-6 col-sm-12 form-group">

											<input type="text" name="phone" placeholder="Phone" required>

										</div>



										<div class="form-group col-lg-12 col-md-12 col-sm-12">

											<textarea name="message" placeholder="Your Message write hear"></textarea>

										</div>







										<div class="form-group clearfix col-lg-12 col-md-12 col-sm-12">

											<div class="btn-three-outer"><button class="theme-btn btn-style-three" type="submit" name="submit_form"><span class="txt">SEND MESSAGE</span></button></div>

										</div>



									</div>

								</form>



								<!--End Default Form -->

							</div>



						</div>

					</div>



				</div>

			</div>

		</section>

		<!-- End Contact Form Section -->



		<!-- Contact Map Section -->

		<section class="contact-map-section">

			<!-- Map Boxed -->

			<div class="map-boxed">

				<!--Map Outer-->

				<div class="map-outer">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s" height="500"></iframe>

				</div>

			</div>



			<div class="auto-container">

				<div class="map-info-boxed">

					<div class="clearfix">

						<!-- Column -->

						<div class="image-column col-lg-5 col-md-12 col-sm-12">

							<div class="image">

								<img src="assets/images/resource/info.jpg" alt="" />

							</div>

						</div>

						<!-- Column -->

						<div class="info-column col-lg-7 col-md-12 col-sm-12">

							<div class="inner-column">

								<ul>

									<li>

										<span class="icon flaticon-location-2"></span>

										<strong>Location</strong>

										27 Division St, New York, USA

									</li>

									<li>

										<span class="icon flaticon-call-2"></span>

										<strong>Contact</strong>

										<a href="tel:+1-044-123-456-789">+1 (044) 123 456 789</a>

									</li>

									<li>

										<span class="icon flaticon-email-1"></span>

										<strong>Email</strong>

										<a href="mailto:info@example.com">info@example.com</a>

									</li>

									</li>

							</div>

						</div>

					</div>

				</div>

			</div>



		</section>

		<!-- End Contact Section -->



		<!-- Clients Section -->

		<section class="clients-section style-four">

			<div class="auto-container">



				<div class="sponsors-outer">

					<!--Sponsors Carousel-->

					<ul class="sponsors-carousel owl-carousel owl-theme">

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/5.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure>
						</li>

						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure>
						</li>

					</ul>

				</div>



			</div>

		</section>

		<!-- End Clients Section -->



		<!-- Subscribe Section -->

		<section class="subscribe-section">

			<div class="auto-container">

				<div class="inner-container margin-bottom">

					<div class="pattern-layer" style="background-image:url(assets/images/background/7.jpg)"></div>

					<div class="section-image" style="background-image:url(assets/images/resource/.png)"></div>

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

									<form method="post" action="https://expert-themes.com/html/gym/contact.php">

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

		<form method="post" action="https://expert-themes.com/html/gym/blog.php">

			<div class="form-group">

				<input type="search" name="search-field" value="" placeholder="Search Here" required="">

				<button type="submit"><i class="fa fa-search"></i></button>

			</div>

		</form>

	</div>

	<!-- End Header Search -->



	<!--Scroll to top-->

	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



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

	<script src="js/validate.js"></script>

	<script src="js/nav-tool.js"></script>

	<script src="js/jquery-ui.js"></script>

	<script src="js/script.js"></script>

	<script src="js/color-settings.js"></script>

</body>


</html>
<?php include('components/footer.php') ?>