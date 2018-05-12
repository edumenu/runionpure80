<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Lee's website</title>
	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="width=device-width" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="css/bootstrap-light.css" rel="stylesheet">
	<link id="pagestyle" href="css/theme-light.css" rel="stylesheet">
</head>

<body data-offset="50" data-spy="scroll" data-target=".navbar" class="dark-theme">
	<nav class="navbar navbar-fixed-top shadow" id="js-nav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
				
<!--				<a class="navbar-brand" href="#" style="color:black"> Home </a>-->
			</div>
			<div class="collapse navbar-collapse navbar-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#home">home</a></li>
					<li><a href="#about">about us</a></li>
					<li><a href="#testimonials">testimonials</a></li>
					<li><a href="#contact">contact</a></li>
					<li><a href="shop.php">Shop</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	
	
	
<!--Slider-->
	<section class="home section image-slider" id="home">
		<div class="home-slider text-center">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background: url(img/slider/lee3.jpg);">
					<a class="arrow bounce text-center" href="#about"> About<span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
					<h2 class="home-slider-title-main" style="position: absolute; bottom: 0; text-align: center; width: 100%;">Richard Lee Runion</h2>
				</div>

				<div class="swiper-slide" style="background: url(img/slider/lee2.jpg);">
					<h2 class="home-slider-title-main">Richard Lee Runion</h2>
					<a class="arrow bounce text-center" href="#about"> <span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
				</div>
                
                <div class="swiper-slide" style="background: url(img/slider/lee5.jpg);">
					<h2 class="home-slider-title-main" style="position: absolute; bottom: 0; text-align: center; width: 100%;">Richard Lee Runion</h2>
					<a class="arrow bounce text-center" href="#about"> <span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
				</div>
				
				<div class="swiper-slide" style="background: url(img/slider/lee6.jpg);">
					<h2 class="home-slider-title-main">Richard Lee Runion</h2>
					<a class="arrow bounce text-center" href="#about"> <span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
				</div>

			</div>
			<div class="home-pagination"></div>
			<div class="home-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>
			<div class="home-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>
		</div>
	</section>
	
	
	
	
	
<!--About us-->
	<section class="about white-color" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading">About us</h3>
				</div>
				<div class="col-md-7 overflow-hidden wow fadeInLeft">
					<h4>Best furniture ever!</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-4 col-md-push-1 wow fadeInRight">
					<h4>Our mission</h4>
					<ul class="styled-list">
						<li>1. Duis aute irure dolor </li>
						<li>2. Excepteur sint occaecat</li>
						<li>3. Deserunt mollit anim</li>
						<li>4. Nostrud exercitation</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!--End of About Us-->
	
	
	
<!--Testimonial-->
	<section class="testimonials" id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading white-color">Testimonials</h3>
				</div>
				<div class="testimonials-slider text-center col-md-12">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonials-container shadow"> <img alt="user avatar" class="wow fadeInUp" src="img/user1.png">
								<h3 class="wow fadeInUp" data-wow-delay=".4s"> Martin Johe, Co-Founder / CEO <span>Fastcompany ltd.</span> </h3>
								<p class="wow fadeInUp" data-wow-delay=".6s"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="testimonials-container shadow"> <img alt="user avatar" class="wow fadeInUp" src="img/user.png">
								<h3 class="wow fadeInUp" data-wow-delay=".4s"> Martin Johe, Co-Founder / CEO <span>Fastcompany ltd.</span> </h3>
								<p class="wow fadeInUp" data-wow-delay=".6s"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
							</div>
						</div>
					</div>
					<div class="testimonials-pagination"></div>
					<div class="testimonials-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>
					<div class="testimonials-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>
				</div>
			</div>
		</div>
	</section>
<!--End of Testimonial-->




<!-- Contact -->

	<section id="contact" class="contact contact-with-map">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading">contact</h3>
				</div>
				<div class="col-md-3">
					<div class="contact-data">
						<ul>
							<li><span class="ti-mobile icon"></span>+ 49 123 456 789</li>
							<li><span class="ti-email icon"></span>lee@exapmle.com</li>
							<li><span class="ti-skype icon"></span>@lee</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 col-md-push-1">
					<div class="contact-form">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="contact-email" name="contact-email" placeholder="Email" required>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
							</div>

							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
							</div>

							<button type="button" id="submit" name="submit" class="btn btn-primary btn-lg text-center float-right">Submit your message</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="google-maps">
			<div id="map-canvas"></div>
		</div>
	</section>
<!-- End of Contact-->
	
	
	
	
<!-- Footer -->
	<div class="section section-min">
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-4 text-center">
						<div class="social">
							<ul>
								<li><a href="http://facebook.com/" target="_blank"><span class="ti-facebook"></span></a></li>
								<li><a href="https://twitter.com/" target="_blank"><span class="ti-twitter-alt"></span></a></li>
								<li><a href="http://linkedin.com/" target="_blank"><span class="ti-linkedin"></span></a></li>
								<li><a href="https://vimeo.com/" target="_blank"><span class="ti-vimeo-alt"></span></a></li>
								<li><a href="http://youtube.com/" target="_blank"><span class="ti-youtube"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-4 col-md-offset-4 col-sm-12">
						<div class="footer-newsletter">
							<div class="center text-center">
								<form action="#" method="post">
									<div class="input-group">
										<input class="form-control" type="text" placeholder="e-mail"> 
										<span class="input-group-btn">
											<button class="btn btn-default" type="button"><span class="ti-arrow-right"></span></button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
<!-- End of footer -->
    
    
    
	<script src="js/vendor/wow.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
	<script src="js/vendor/swiper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/jquery.countTo.js"></script>
	<script src="js/vendor/jquery.inview.js"></script>
	<script src="js/vendor/jquery.countdown.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_6m6Glf1-P7jvVdHZ00e3Ue_EoUNe39g"></script>
	<script src="js/tt-cart.js"></script>
	<script src="js/main.js"></script>
</body>

</html>