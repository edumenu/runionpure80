<?php session_start(); ?>
<?php include "admin_page/Login/includes/db.php"?>
<?php include "admin_page/Login/functions.php"?>
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
					<li><a href="admin_page/Login/index.php">Admin</a></li>
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
   
    <!-- Product section -->
	<section class="section-min section product white-bg" id="products">
		<div class="container overflow-hidden">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading">Products</h3>
				</div>
				<div class="col-md-12">
					<div class="product-list-slider">
					
					   <!-- Displaying the images from the database -->
					   <?php include "product_list.php"?>
					
						<!-- Add Pagination -->
						<div class="product-list-pagination text-center"> </div>
						<div class="product-list-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>
						<div class="product-list-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>
					</div>
				</div>
				
				
			<!-- Second row -->
				
				
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
		
								<div class="item active"> <img id="prod_im11" alt="" src="admin_page/admin/includes/images/default.png"> </div>
								<div class="item"> <img id="prod_im12" alt="" src="admin_page/admin/includes/images/default.png"> </div>
							</div>
							
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#product-carousel"> <img id="prod_im21" alt="" src="admin_page/admin/includes/images/default.png"> </li>
								<li class="" data-slide-to="1" data-target="#product-carousel"> <img id="prod_im22" alt="" src="admin_page/admin/includes/images/default.png"> </li>
							</ol>
						</div>
						
						
						<!-- Wrapper for slides -->
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-push-2">
									<div class="row">
									
										<div class="col-md-8">
											<h3 class="pull-left section-heading">Name of product</h3>
										</div>
										<div class="col-md-4">
											<span class="product-right-section">
												<span id="product_price">$299.00</span>
												<button class="btn btn-default add-item" type="button" data-image="img/product.png" data-name="Textile classic grey chair" data-cost="299.00" data-id="8">
												<span class="ti-shopping-cart"></span>add to cart </button>
											</span>
										</div>
										
									</div>
								</div>
								<div class="col-md-8 col-md-push-2 product-description">
									
									<div class="product-tabs">
										<ul class="nav nav-tabs">
											<li class="active"><a data-toggle="tab" href="#tab1">Details</a></li>
										</ul>
										
										<div class="tab-content">
											<div id="tab1" class="tab-pane fade in active">
												<h4 class="section-heading">details</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>

   $(document).ready(function(){
 
        //Chnaging the images in the modal when the user selects an image
        $(".prod").on('click', function(data){
            
            var id = $(this).attr("rel");  //Obtaining the name of the image selected
            var new_img = 'admin_page/admin/includes/images/';  //Image template
            var default_img = 'default.png';
            
             $.get('product_modal.php', {'key' : id} ,function(data,status){
                 //Checking for errors
                 if(status == '404'){
                     alert('Requested page not found. [404]');
                 }else if(status == '500'){
                       alert('Internal Server Error [500]');
                 }else{
                     //Parsing the JSON object
                     var prod = jQuery.parseJSON(data);

                     //Dynamically changing the image src's
                     $('#prod_im11').attr('src',new_img + prod.product_image_1);
                     $('#prod_im12').attr('src',new_img + prod.product_image_2);
                     $('#prod_im21').attr('src',new_img + prod.product_image_1);
                     $('#prod_im22').attr('src',new_img + prod.product_image_2);
                   
                 }
            });  
     });
       
       //Changing the images in the modal to the efault images
//       $('.close').on('click', function(){
//           var default_img = 'admin_page/admin/includes/images/default.png';
//            $('#prod_im1').attr('src',default_img);
//            $('#prod_im2').attr('src',default_img);
//           $('input#prod_price').val() = '';
//       });


   });

 </script>
   
	
</body>

</html>