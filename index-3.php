<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Gym HTML-5 Template | Homepage 02</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">
<link rel="stylesheet" href="components/header.php">

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
<?php include ('components/header.php') ?> 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	
	
	<!--Main Slider-->
    <section class="main-slider-two">
    	
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url(images/main-slider/image-3.jpg)">
				<div class="pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
				<div class="pattern-dots" style="background-image:url(images/main-slider/dots.png)"></div>
                <div class="auto-container">
					
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Runner’s Life</div>
						<h1>The Best <br> Fitness Studio <br> in Town</h1>
						<div class="link-box clearfix">
							<div class="btn-one-outer"><a href="#" class="theme-btn btn-style-one"><span class="txt">Join Us Now</span></a></div>
						</div>
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
					</div>
					
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/main-slider/image-3.jpg)">
				<div class="pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
				<div class="pattern-dots" style="background-image:url(images/main-slider/dots.png)"></div>
                <div class="auto-container">
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Runner’s Life</div>
						<h1>The Best <br> Fitness Studio <br> in Town</h1>
						<div class="link-box clearfix">
							<div class="btn-one-outer"><a href="#" class="theme-btn btn-style-one"><span class="txt">Join Us Now</span></a></div>
						</div>
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
					</div>
                </div>
            </div>
			
			<div class="slide" style="background-image:url(images/main-slider/image-3.jpg)">
				<div class="pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
				<div class="pattern-dots" style="background-image:url(images/main-slider/dots.png)"></div>
                <div class="auto-container">
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Runner’s Life</div>
						<h1>The Best <br> Fitness Studio <br> in Town</h1>
						<div class="link-box clearfix">
							<div class="btn-one-outer"><a href="#" class="theme-btn btn-style-one"><span class="txt">Join Us Now</span></a></div>
						</div>
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
					</div>
                </div>
            </div>
			
        </div>
		
		<!-- Social Box -->
		<div class="social-box">
			<ul>
				<li class="share"><span class="icon fa fa-share"></span></li>
				<li><a href="#" class="fa fa-facebook-f"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="#" class="fa fa-google"></a></li>
				<li><a href="#" class="fa fa-whatsapp"></a></li>
			</ul>
		</div>
		
    </section>
    <!--End Main Slider-->
	
	<!-- Calculate Section Two -->
	<section class="calculate-section-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="pattern-layer" style="background-image:url(images/background/3.jpg)"></div>
				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title light">
								<div class="title">CALCULATE BMI</div>
								<h2>Calculate Your <br> Body Mass Index</h2>
							</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Default Form -->
							<div class="default-form style-three">
								
								<!-- Default Form -->
								<form method="post" action="https://expert-themes.com/html/gym/contact.php">
									<div class="row clearfix">
									
										<div class="col-lg-4 col-md-6 col-sm-12 form-group">
											<input type="text" name="cm" placeholder="Hight / cm" required>
										</div>
										
										<div class="col-lg-4 col-md-6 col-sm-12 form-group">
											<input type="text" name="weight" placeholder="Weight / kg" required>
										</div>
										
										<div class="form-group col-lg-4 col-md-6 col-sm-12">
											<select class="custom-select-box">
												<option>Select an activity factor:</option>
												<option>Factor 01</option>
												<option>Factor 02</option>
											</select>
										</div>
										
										<div class="form-group col-lg-4 col-md-6 col-sm-12">
											<select class="custom-select-box">
												<option>Gender</option>
												<option>Male</option>
												<option>Female</option>
											</select>
										</div>
										
										<div class="form-group col-lg-4 col-md-6 col-sm-12">
											<div class="btn-two-outer"><button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Calculate</span></button></div>
										</div>
										
									</div>
								</form>
								
								<!--End Default Form -->
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Calculate Section Two -->
	
	<!-- Choose Section -->
	<section class="choose-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="info-box">
							<h3><a href="#">Cardio <br> Training</a></h3>
							<a class="more" href="#">More <span class="arrow fa fa-arrow-circle-right"></span></a>
							<div class="icon flaticon-stationary-bike"></div>
						</div>
						
						<div class="info-box style-two">
							<h3><a href="#">Fitness <br> Training</a></h3>
							<a class="more" href="#">More <span class="arrow fa fa-arrow-circle-right"></span></a>
							<div class="icon flaticon-people"></div>
						</div>
						
						<div class="image">
							<img src="images/resource/choose-1.jpg" alt="" />
						</div>
						<div class="image-1">
							<img src="images/resource/choose-2.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Why Choose Us</div>
							<h2>We Raise Your <br> Confidence</h2>
						</div>
						
						<!-- Featured Block -->
						<div class="featured-block">
							<div class="block-inner">
								<span class="icon flaticon-people"></span>
								<strong>Free Fitness Training</strong>
								<div class="feature-text">Train with the best experts in bodybuilding field.</div>
							</div>
						</div>
						
						<!-- Featured Block -->
						<div class="featured-block">
							<div class="block-inner">
								<span class="icon flaticon-stationary-bike"></span>
								<strong>Cardio and Strength</strong>
								<div class="feature-text">Our personal trainers will help you find a perfect workout.</div>
							</div>
						</div>
						
						<!-- Featured Block -->
						<div class="featured-block">
							<div class="block-inner">
								<span class="icon flaticon-premium"></span>
								<strong>No Commitment Memberships</strong>
								<div class="feature-text">Our personal trainers will help you find a perfect workout.</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Choose Section -->
	
	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">OUR CLASSES</div>
				<h2>Featured <br> Classes Service</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="classes-detail.php"><img src="images/resource/feature-1.jpg" alt="" /></a>
							<div class="icon-box">
								<span class="icon flaticon-tools-and-utensils-1"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="title">GYM</div>
							<h4><a href="classes-detail.php">Psycho Training</a></h4>
							<div class="text">Winning means you’re willing to go longer, work harder for more.</div>
							<a class="read-more" href="classes-detail.php">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="classes-detail.php"><img src="images/resource/feature-2.jpg" alt="" /></a>
							<div class="icon-box">
								<span class="icon flaticon-muscle"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="title">CARDIO</div>
							<h4><a href="classes-detail.php">Self Defence</a></h4>
							<div class="text">Don’t practice until you get it right practice until can’t wrong</div>
							<a class="read-more" href="classes-detail.php">Read More</a>
						</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="classes-detail.php"><img src="images/resource/feature-3.jpg" alt="" /></a>
							<div class="icon-box">
								<span class="icon flaticon-people"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="title">Fitness</div>
							<h4><a href="classes-detail.php">FITNESS FOR MAN</a></h4>
							<div class="text">Winning means you’re willing to go longer, work harder for more.</div>
							<a class="read-more" href="classes-detail.php">Read More</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Counter Section -->
	<section class="counter-section margin-top">
		<div class="auto-container">
			<div class="inner-container">
				<div class="pattern-layer" style="background-image:url(images/background/4.jpg)"></div>
				<!-- Fact Counter -->
				<div class="fact-counter">
					<div class="row clearfix">

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-muscle"></div>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3500" data-stop="120">0</span>
									</div>
									<div class="counter-title">Expert Trainer</div>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-fitness"></div>
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="2500" data-stop="550">0</span>
									</div>
									<div class="counter-title">Happy Clint</div>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-building"></div>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="150">0</span>
									</div>
									<div class="counter-title">Total Branch</div>
								</div>
							</div>
						</div>
						
						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-fitness-1"></div>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2000" data-stop="25">0</span>
									</div>
									<div class="counter-title">Experience</div>
								</div>
							</div>
						</div>
					
					</div>
					
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- TimeTable Section Two -->
	<section class="timetable-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Time Table</div>
				<h2>Working housr <br> & Classes</h2>
			</div>
			<div class="inner-container">
				<div class="table-outer">
					<div class="table-inner">
						<!-- Table Title Box -->
						<div class="table-title-box clearfix">
							<div class="title">ALL EVENTS</div>
							<div class="day">MONDAY</div>
							<div class="day">TUESDAY</div>
							<div class="day">WEDNESDAY</div>
							<div class="day">THURSDAY</div>
							<div class="day">FRIDAY</div>
							<div class="day">SATURDAY</div>
							<div class="day">SUNDAY</div>
						</div>
						<!-- Timetable Tabs-->
						<div class="timetable-tabs tabs-box">
							
							<!--Tab Btns-->
							<ul class="tab-btns tab-buttons clearfix">
								<li data-tab="#prod-cardio" class="tab-btn active-btn">CARDIO</li>
								<li data-tab="#prod-crossfit" class="tab-btn">CROSSFIT</li>
								<li data-tab="#prod-gym" class="tab-btn">GYM</li>
								<li data-tab="#prod-powerlifting" class="tab-btn">POWERLIFTING</li>
							</ul>
					
							<!--Tabs Container-->
							<div class="tabs-content">
							
								<!--Tab / Active Tab-->
								<div class="tab active-tab" id="prod-cardio">
									<div class="content">
										<div class="clearfix">
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!--Tab-->
								<div class="tab" id="prod-crossfit">
									<div class="content">
										<div class="clearfix">
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!--Tab-->
								<div class="tab" id="prod-gym">
									<div class="content">
										<div class="clearfix">
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!--Tab-->
								<div class="tab" id="prod-powerlifting">
									<div class="content">
										<div class="clearfix">
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">GYM OPEN <span>11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
											<!-- Time Box -->
											<div class="time-box">
												<div class="box-inner">
													<div class="time">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<!-- Appointment Box -->
				<div class="appointment-box text-center">
					<div class="appointment-inner">
						<div class="text">if you want appointment to <a href="contact.php">contact now.</a></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End TimeTable Section Two -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<div class="inner-container" style="background-image:url(images/background/5.jpg)">
				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title light">
								<div class="title">OUR TESTIMONIAL</div>
								<h2>WHAT OUR CLIENTS <br> SAY ABOUT US</h2>
							</div>
						</div>
					</div>
					
					<!-- Testimonial Column -->
					<div class="testimonial-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="single-item-carousel owl-carousel owl-theme">
							
								<!-- Testimonial Block Two -->
								<div class="testimonial-block-two">
									<div class="inner-box">
										<div class="upper-box">
											<div class="author-image">
												<img src="images/resource/author-5.jpg" alt="" />
											</div>
											<div class="title">Nutritionist</div>
											<h4>Mellisa Martinez</h4>
											<div class="rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
										</div>
										<div class="quote-icon flaticon-right-quote"></div>
										<div class="text">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et recusandae. </div>
									</div>
								</div>
								
								<!-- Testimonial Block Two -->
								<div class="testimonial-block-two">
									<div class="inner-box">
										<div class="upper-box">
											<div class="author-image">
												<img src="images/resource/author-5.jpg" alt="" />
											</div>
											<div class="title">Nutritionist</div>
											<h4>Mellisa Martinez</h4>
											<div class="rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
										</div>
										<div class="quote-icon flaticon-right-quote"></div>
										<div class="text">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et recusandae. </div>
									</div>
								</div>
								
								<!-- Testimonial Block Two -->
								<div class="testimonial-block-two">
									<div class="inner-box">
										<div class="upper-box">
											<div class="author-image">
												<img src="images/resource/author-5.jpg" alt="" />
											</div>
											<div class="title">Nutritionist</div>
											<h4>Mellisa Martinez</h4>
											<div class="rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
										</div>
										<div class="quote-icon flaticon-right-quote"></div>
										<div class="text">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et recusandae. </div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Pricing Section -->
	<section class="pricing-section">
		<div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">Time Table</div>
				<h2>Working housr <br> & Classes</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Pricing Block -->
				<div class="pricing-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box" style="background-image:url(images/resource/price-1.jpg)">
						<h4>Basic Plan</h4>
						<div class="title">Here Goes Some Descripation</div>
						<div class="price">For 1 Month<span>$99</span></div>
						<ul class="price-list">
							<li>Free Hand</li>
							<li>Gym Fitness</li>
							<li>Weight Loss</li>
							<li>Personal Trainer</li>
						</ul>
						<div class="btn-one-outer"><a href="#" class="theme-btn btn-style-one" type="submit"><span class="txt">Select Now</span></a></div>
					</div>
				</div>
				
				<!-- Pricing Block -->
				<div class="pricing-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box" style="background-image:url(images/resource/price-2.jpg)">
						<h4>Standard Plan</h4>
						<div class="title">Here Goes Some Descripation</div>
						<div class="price">For 6 Month<span>$149</span></div>
						<ul class="price-list">
							<li>Free Hand</li>
							<li>Gym Fitness</li>
							<li>Weight Loss</li>
							<li>Personal Trainer</li>
						</ul>
						<div class="btn-one-outer"><a href="#" class="theme-btn btn-style-one" type="submit"><span class="txt">Select Now</span></a></div>
					</div>
				</div>
				
				<!-- Pricing Block -->
				<div class="pricing-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box" style="background-image:url(images/resource/price-3.jpg)">
						<h4>Ultimate Plan</h4>
						<div class="title">Here Goes Some Descripation</div>
						<div class="price">For 1 Year<span>$249</span></div>
						<ul class="price-list">
							<li>Free Hand</li>
							<li>Gym Fitness</li>
							<li>Weight Loss</li>
							<li>Personal Trainer</li>
						</ul>
						<div class="btn-one-outer"><a href="#" class="theme-btn btn-style-one" type="submit"><span class="txt">Select Now</span></a></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->
	
	<!-- News Section -->
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our Blog & Artical</div>
				<h2>Latest News <br> Posts</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-single.php"><img src="images/resource/news-4.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-folder-open"></span> GYM</li>
							</ul>
							<h4><a href="blog-single.php">Push your Fitness Further <br> with Our GYM Facilities</a></h4>
							<div class="lower-box">
								<div class="clearfix">
									<div class="pull-left">
										<a class="comment" href="blog-single.php"><span class="icon fa fa-comment-o"></span> 02</a>
									</div>
									<div class="pull-right">
										<div class="author-info">
											<div class="info-inner">
												<div class="icon flaticon-user-4"></div>
												By Jone Ankar <span>11.12.2023</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-single.php"><img src="images/resource/news-5.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-folder-open"></span> Fitness</li>
							</ul>
							<h4><a href="blog-single.php">How to keep your Body Health in Over Festival</a></h4>
							<div class="lower-box">
								<div class="clearfix">
									<div class="pull-left">
										<a class="comment" href="blog-single.php"><span class="icon fa fa-comment-o"></span> 02</a>
									</div>
									<div class="pull-right">
										<div class="author-info">
											<div class="info-inner">
												<div class="icon flaticon-user-4"></div>
												By Jone Ankar <span>11.12.2023</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-single.php"><img src="images/resource/news-6.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-folder-open"></span> Cardio Burn</li>
							</ul>
							<h4><a href="blog-single.php">Give your Fitness a Boost with our GYM Challenge</a></h4>
							<div class="lower-box">
								<div class="clearfix">
									<div class="pull-left">
										<a class="comment" href="blog-single.php"><span class="icon fa fa-comment-o"></span> 02</a>
									</div>
									<div class="pull-right">
										<div class="author-info">
											<div class="info-inner">
												<div class="icon flaticon-user-4"></div>
												By Jone Ankar <span>11.12.2023</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	
	<!-- Clients Section -->
    <section class="clients-section style-two">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Clients Section -->
	
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
    <footer class="main-footer style-two" style="background-image:url(images/background/pattern-4.png)">
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
									<ul class="footer-info-list">
										<li><span class="icon fa fa-location-arrow"></span>27 Division St, New York, <br> United State Aamrica</li>
										<li><span class="icon fa fa-phone"></span><a href="tel:+1-044-123-456-789">+1 (044) 123 456 789</a></li>
										<li><span class="icon fa fa-envelope-o"></span><a href="mailto:info@example.com">info@example.com</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Useful Links</h4>
									<ul class="list-link">
										<li><a href="#">Terms and Conditions</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Cookie Policy & Date Protection</a></li>
										<li><a href="#">Complaints Policy</a></li>
										<li><a href="#">TimeTable Maniged</a></li>
										<li><a href="#">Update News</a></li>
									</ul>
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
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget consult-widget">
									<h4>Free Consultation</h4>
									<div class="phone"><span class="icon fa fa-phone"></span> 1-800-643-430</div>
									<div class="text">Power GYM lift is champ in providing its users with absolutely everything a fitness or gym site needs.</div>
									<div class="social-links">
										<a href="#" class="fa fa-facebook"></a>
										<a href="#" class="fa fa-twitter"></a>
										<a href="#" class="fa fa-instagram"></a>
										<a href="#" class="fa fa-linkedin"></a>
									</div>
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
	
</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
	<div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
	
    <h5>Other Options</h5>
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
	
    <a href="#" class="purchase-btn">Purchase now $17</a>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

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
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>

</html>