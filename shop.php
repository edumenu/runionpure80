<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>runionpure80 </title>
	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="width=device-width" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="css/bootstrap-light.css" rel="stylesheet">
	<link id="pagestyle" href="css/theme-light.css" rel="stylesheet">
</head>

<!--  Navigation  -->
<body data-offset="50" data-spy="scroll" data-target=".navbar" class="dark-theme">
	<nav class="navbar navbar-fixed-top shadow" id="js-nav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
				
<!--				<a class="navbar-brand" href="#" style="color: black"> Home </a>-->
			</div>
			<div class="collapse navbar-collapse navbar-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="#products">products</a></li>
					<li><a href="#special">special</a></li>
					<li><a href="#contact">contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-- End of navigation-->
	

    
	<span id="items-counter" class="h3 cart-items-counter" style="display: none">0</span>
	<div class="cart-widget-container">
	<div class="cart-widget text-center">
	<a class="close" id="cart-widget-close">
	<span class="ti-close"></span>
	</a>
	<img class="cart-logo" src="img/logo-black.png" width="200" alt="store logo">
	<h3 class="section-heading">Your cart</h3>
	<div id="cart-empty" class="cart-empty"><h4>is empty <span class="ti-face-sad icon"></span> </h4></div>
	<!-- container for js inject cart items content -->
	<div class="items-container" id="items"></div>
	<!-- container for js inject cart items content -->

<!-- Dleivery options -->
	<div class="cart-delivery" id="cart-delivery">
	<h4 class="section-heading">Delivery option</h4>
		<div class="custom-radio">
			<input id="radio1" type="radio" name="delivery" value="10.00" checked> 
			<label for="radio1">domestic delivery ($10)</label>
		</div>

		<div class="custom-radio">
			<input id="radio2" type="radio" name="delivery" value="15.00"> 
			<label for="radio2">express domestic delivery ($15) </label>
		</div>
	</div>
	<div class="cart-summary" id="cart-summary">
	<h4 class="section-heading">summary</h4>
		<div class="cart-summary-row" id="cart-total">Total products <span class="cart-value">$<span id="cost_value">0.00</span></span></div>
		<div class="cart-summary-row">Shipping <span class="cart-value">$<span id="cost_delivery"></span></span></div>
		<div class="cart-summary-row cart-summary-row-total">Total <span class="cart-value">$<span id="total-total"></span></span></div>
	</div>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="cart-form" id="cart-form">
		<!-- Identify your business so that you can collect the payments. -->
		<input type="hidden" name="business" value="yourpaypal@email.com">
		<!-- Specify a Buy Now button. -->
		<input type="hidden" name="cmd" value="_xclick">
		<!-- Specify details about the item that buyers will purchase. -->
		<input type="hidden" name="item_name" value="Interio store - checkout">
		<input type="hidden" name="amount" id="amount" value="">
		<input type="hidden" name="currency_code" value="USD">
		<!-- Display the payment button. -->
		<button type="submit" name="submit" class="btn btn-default btn-lg">
		pay pal checkout <span class="ti-arrow-right"></span>
		</button>
	</form>
	</div>
	<div class="cart-widget-close-overlay"></div>
	</div>






	<section class="section-min section product white-bg" id="products">
		<div class="container overflow-hidden">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading">Products</h3>
				</div>
				<div class="col-md-12">
					<div class="product-list-slider">
						<ul class="swiper-wrapper product-list product-list-vertical">
							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".2s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product2.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic grey chair</span>
										<span class="product-list-price">$400.00</span>
									</span>
								</a> 

								<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair" data-cost="400.00" data-id="1" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 		
							</li>
							
							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".4s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic yellow chair</span>
										<span class="product-list-price">$300.00</span>
									</span>
								</a>

								<button class="btn btn-default add-item" type="button" data-image="img/product3.png" data-name="Textile classic yellow chair" data-cost="300.00" data-id="2" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 	
							</li>

							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".6s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product2.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic grey chair no. 2</span>
										<span class="product-list-price">$600.00</span>
									</span>
								</a> 

								<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair no. 2" data-cost="600.00" data-id="3" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 		
							</li>
							
							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".8s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic yellow chair no. 2</span>
										<span class="product-list-price">$500.00</span>
									</span>
								</a>

								<button class="btn btn-default add-item" type="button" data-image="img/product3.png" data-name="Textile classic yellow chair no. 2" data-cost="500.00" data-id="4" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 	
							</li>

							<li class="swiper-slide text-center"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product2.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic grey chair no. 3</span>
										<span class="product-list-price">$600.00</span>
									</span>
								</a> 

								<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair no. 3" data-cost="600.00" data-id="5" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 		
							</li>
							
							<li class="swiper-slide text-center"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic yellow chair no. 3</span>
										<span class="product-list-price">$500.00</span>
									</span>
								</a>

								<button class="btn btn-default add-item" type="button" data-image="img/product3.png" data-name="Textile classic yellow chair no. 3" data-cost="500.00" data-id="6" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 	
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="product-list-pagination text-center"> </div>
						<div class="product-list-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>
						<div class="product-list-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="product-list-slider">
						<ul class="swiper-wrapper product-list product-list-vertical">
							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".2s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product2.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic grey chair</span>
										<span class="product-list-price">$400.00</span>
									</span>
								</a> 

								<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair" data-cost="400.00" data-id="1" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 		
							</li>
							
							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".4s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic yellow chair</span>
										<span class="product-list-price">$300.00</span>
									</span>
								</a>

								<button class="btn btn-default add-item" type="button" data-image="img/product3.png" data-name="Textile classic yellow chair" data-cost="300.00" data-id="2" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 	
							</li>

							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".6s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product2.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic grey chair no. 2</span>
										<span class="product-list-price">$600.00</span>
									</span>
								</a> 

								<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair no. 2" data-cost="600.00" data-id="3" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 		
							</li>
							
							<li class="swiper-slide wow fadeInUp text-center" data-wow-delay=".8s"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic yellow chair no. 2</span>
										<span class="product-list-price">$500.00</span>
									</span>
								</a>

								<button class="btn btn-default add-item" type="button" data-image="img/product3.png" data-name="Textile classic yellow chair no. 2" data-cost="500.00" data-id="4" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 	
							</li>

							<li class="swiper-slide text-center"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product2.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic grey chair no. 3</span>
										<span class="product-list-price">$600.00</span>
									</span>
								</a> 

								<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair no. 3" data-cost="600.00" data-id="5" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 		
							</li>
							
							<li class="swiper-slide text-center"> 
								<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal"><img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
									<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
								</span> 

								<a href="#" data-target="#product-01" data-toggle="modal">
									<span class="product-list-right pull-left">
										<span class="product-list-name h4 black-color">Textile classic yellow chair no. 3</span>
										<span class="product-list-price">$500.00</span>
									</span>
								</a>

								<button class="btn btn-default add-item" type="button" data-image="img/product3.png" data-name="Textile classic yellow chair no. 3" data-cost="500.00" data-id="6" >
									<span class="ti-shopping-cart"></span>add to cart
								</button> 	
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="product-list-pagination text-center"> </div>
						<div class="product-list-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>
						<div class="product-list-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<!-- PRODUCT MODAL -->
		<div class="modal fade product-modal" id="product-01" role="dialog" tabindex="-1">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content shadow">
					<a class="close" data-dismiss="modal"> <span class="ti-close"></span></a>
					<div class="modal-body">
						<!-- Wrapper for slides -->
						<div class="carousel slide product-slide" id="product-carousel">
							<div class="carousel-inner cont-slider">
								<div class="item active"> <img alt="" src="img/product.png" title=""> </div>
								<div class="item"> <img alt="" src="img/product2.png" title=""> </div>
								<div class="item"> <img alt="" src="img/product3.png" title=""> </div>
								<div class="item"> <img alt="" src="img/product4.png" title=""> </div>
							</div>
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#product-carousel"> <img alt="" src="img/product.png"> </li>
<!--
								<li class="" data-slide-to="1" data-target="#product-carousel"> <img alt="" src="img/product2.png"> </li>
								<li class="" data-slide-to="2" data-target="#product-carousel"> <img alt="" src="img/product3.png"> </li>
-->
<!--								<li class="" data-slide-to="3" data-target="#product-carousel"> <img alt="" src="img/product4.png"> </li>-->
							</ol>
						</div>
						<!-- Wrapper for slides -->
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-push-2">
									<div class="row">
										<div class="col-md-8">
											<h3 class="pull-left section-heading">Textile classic grey chair</h3>
										</div>
										<div class="col-md-4">
											<span class="product-right-section">
												<span>$299.00</span>
												<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair" data-cost="299.00" data-id="8">
												<span class="ti-shopping-cart"></span>add to cart </button>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-8 col-md-push-2 product-description">
									<h4 class="section-heading">Ut enim ad minim veniam</h4>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
									<div class="row">
										<div class="col-md-6"> <img src="img/product.png" class="img-responsive" alt="product image"> </div>
										<div class="col-md-6">
											<h4 class="section-heading">Ut enim ad minim veniam</h4>
											<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
										</div>
									</div>
									<div class="product-tabs">
										<ul class="nav nav-tabs">
											<li class="active"><a data-toggle="tab" href="#tab1">Details</a></li>
											<li><a data-toggle="tab" href="#tab2">Info tab</a></li>
											<li><a data-toggle="tab" href="#tab3">Other info </a></li>
										</ul>
										<div class="tab-content">
											<div id="tab1" class="tab-pane fade in active">
												<h4 class="section-heading">details</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											</div>
											<div id="tab2" class="tab-pane fade">
												<h4 class="section-heading">Info tab</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
											</div>
											<div id="tab3" class="tab-pane fade">
												<h4 class="section-heading">other info</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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
		<!-- / PRODUCT MODAL -->
	</section>
	

	
	
	

<!-- Special-->
	<section class="countdown" id="special">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading">special!</h3>
				</div>
				<div class="col-md-5">
					<ul class="product-list product-list-vertical">
						<li class="wow fadeInUp" data-wow-delay=".2s">
							<span class="product-list-left pull-left">
									<a href="#" data-target="#product-01" data-toggle="modal">
										<img alt="product image" class="product-list-primary-img" src="img/product3.png"> 
										<img alt="product image" class="product-list-secondary-img" src="img/product4.png">
									</a>
							</span>
						</li>
					</ul>
				</div>
				<div class="col-md-7 text-center">
					<div class="countdown-container">
						<h3 class="wow fadeInDown">Yellow textile chair</h3>
						<p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<!-- data in countdown ul from js -->
						<ul id="countdown" class="countdown-counter wow fadeInUp"></ul>
						<!-- data in countdown ul from js --><span class="countdown-price h3 wow fadeInUp">$420.00</span>
						<button class="btn btn-default add-item wow swing" type="button" data-image="img/product.png" data-name="Yellow textile chair [promo]" data-cost="420.00" data-id="9">
							<span class="ti-shopping-cart"></span>add to cart
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--End of special-->


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
							<li><span class="ti-email icon"></span>lee_runion@aol.com</li>
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