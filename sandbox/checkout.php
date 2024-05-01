<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Gym HTML-5 Template | Checkout</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="components/header.php">

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
	 <?php include ('components/header.php') ?>   
    <!-- End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Checkout</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="index-2.php">home</a></li>
						<li>Checkout</li>
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
								<a href="index-2.php"><img src="images/logo.png" alt="" /></a>
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
	
	<!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">
            	
            <!--Default Links-->
            <ul class="default-links">
                <li>Returning customer? <a href="#" data-toggle="modal" data-target="#schedule-box">Click here to login</a></li>
            </ul>
                
            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form">
                    <form method="post" action="https://expert-themes.com/php/gym/checkout.php">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                
                                <div class="sec-title"><h2>Billing Details</h2></div>
                        		<div class="billing-inner">
                                    <div class="row clearfix">
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">First name <sup>*</sup></div>
                                            <input type="text" name="field-name" value="" placeholder="First Name">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Last name <sup>*</sup></div>
                                            <input type="text" name="field-name" value="" placeholder="Last Name">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Company name </div>
                                            <input type="text" name="field-name" value="" placeholder="Company name">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Address <sup>*</sup></div>
                                            <input type="email" name="field-name" value="" placeholder="Street Address">
                                            <input class="address-two" type="email" name="field-name" value="" placeholder="Apartment, Suit unit etc (optional)">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Town / City <sup>*</sup></div>
                                            <input type="text" name="field-name" value="" placeholder="Town /City">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">State / Country <sup>*</sup> </div>
                                            <select name="country">
                                                <option>Select an option</option>
                                                <option>Pakistan</option>
                                                <option>USA</option>
                                                <option>CANADA</option>
                                                <option>INDIA</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Postcode / Zip <sup>*</sup></div>
                                            <input type="text" name="code" value="" placeholder="Postcode / Zip">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email Address <sup>*</sup></div>
                                            <input type="text" name="field-name" value="" placeholder="Email Address">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone <sup>*</sup></div>
                                            <input type="text" name="field-name" value="" placeholder="Select an option">
                                        </div>
                                        
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Creat an account?</label></div>
                                        </div>
                                        
                                        <div class="form-group sec-title col-md-12 col-xs-12"><h2>Ship to Different Address</h2></div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Order Notes</div>
                                            <textarea placeholder="Note about your order. e.g. special note for delivery"></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="sec-title"><h2>Your Order</h2></div>
                                <div class="shop-order-box">
                                	<ul class="order-list">
                                    	<li>Prodcut<span>TOTAL</span></li>
                                        <li>Electric Hummer x 1<span>$65.00</span></li>
                                        <li>Subtotal<span class="dark">$65.00</span></li>
                                        <li>Shipping And Handling<span>Free Shipping</span></li>
                                        <li class="total">TOTAL<span class="dark">$65.00</span></li>
                                    </ul>
                                    
                                    
                                    <!--Place Order-->
                                    <div class="place-order">
                                        <!--Payment Options-->
                                        <div class="payment-options">
                                            <ul>
                                            	<li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2" checked>
                                                        <label for="payment-2"><strong>Direct Bank Transfer</strong>
                                                        	<span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1">
                                                        <label for="payment-1"><strong>Cheque Payment</strong>
                                                        	<span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3"><strong>Paypal</strong><img src="images/resource/paypall.jpg" alt="" /> <a href="#" class="what-paypall">What is PayPal?</a></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <button type="button" class="theme-btn btn-style-three"><span class="txt">Place Order</span></button>
                                        
                                    </div>
                                    <!--End Place Order-->
                                    
                                </div>
                                
                                
                            </div>
                        </div>                             
                    </form>
                    
                </div>
                
            </div><!--End Billing Details-->
    	</div>
    </div>
	
	<!-- Subscribe Section -->
	<section class="subscribe-section">
		<div class="auto-container">
			<div class="inner-container margin-bottom">
				<div class="pattern-layer" style="background-image:url(images/background/7.jpg)"></div>
				<div class="section-image" style="background-image:url(images/resource/newslatter.png)"></div>
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
    <footer class="main-footer style-four" style="background-image:url(images/background/2.jpg)">
		<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index-2.php"><img src="images/footer-logo.png" alt="" /></a>
                                    </div>
									<div class="text">Gym Expert is a champ in providing its users with absolutely everything a fitness or gym site needs. consectetur adipiscing elit. Suspendisse interdum nulla eu posuere scelerisque.</div>
									<div class="social-links">
										<span>Follow on Socials </span>
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-instagram"></a>
										<a href="#" class="fa fa-linkedin"></a>
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget news-widget">
									<h4>Latest Posts</h4>
									<!-- Footer Column -->
									<div class="widget-content">
										<div class="post">
											<div class="thumb"><a href="blog-single.php"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
											<h5><a href="blog-single.php">Your Future is Created by What You Do Today</a></h5>
											<span class="date">JUNE 21, 2023</span>
										</div>

										<div class="post">
											<div class="thumb"><a href="blog-single.php"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
											<h5><a href="blog-single.php">How to Maximise Time Spent at The GYM.</a></h5>
											<span class="date">JUNE 21, 2019</span>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Our Services</h4>
									<ul class="list-link">
										<li><a href="#">Fat Burn</a></li>
										<li><a href="#">Streching</a></li>
										<li><a href="#">Weight Loss</a></li>
										<li><a href="#">Self Defense</a></li>
										<li><a href="#">Body Building</a></li>
										<li><a href="#">Psycho Trainning</a></li>
										<li><a href="#">Strength Trainning</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget timing-widget">
									<h4>Working Hours</h4>
									<ul>
										<li>Monday – Friday:<span>07:00 – 21:00</span></li>
										<li>Saturday:<span>07:00 – 16:00</span></li>
										<li>Sunday Closed</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="copyright">Copyright 2023 Theme by expertthemes</div>
			</div>
		
		</div>
	</footer>
	
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
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>

<!-- Mirrored from expert-themes.com/php/gym/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 11:26:47 GMT -->
</php>

<?php include('components/footer.php') ?>