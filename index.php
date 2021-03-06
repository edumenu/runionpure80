<?php session_start(); ?>
<?php include "admin_page/Login/includes/db.php"?>
<?php include "admin_page/Login/functions.php"?>
<?php pageViewCheck('index.php');?>
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
    <!-- Top navigation -->
	<nav class="navbar navbar-fixed-top shadow" id="js-nav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#home">home</a></li>
					<li><a href="#about">about us</a></li>
					<li><a href="#testimonials">testimonials</a></li>
					<li><a href="#contact">contact</a></li>
					<li><a href="shop">Shop</a></li>
					<li><a href="admin_page/Login/index">Admin</a></li>
				</ul>
			</div>
		</div>
    </nav>
     <!-- /Top navigation -->
	
<!--Slider-->
	<section class="home section image-slider" id="home">
		<div class="home-slider text-center">
			<div class="swiper-wrapper">
                <?php
                //Obtaining data from the slider table
                $query = "SELECT * FROM slider";
                $result = $connection->query($query);
                confirmQuery($result);  

                while($row = mysqli_fetch_assoc($result)) {
                  //Storing the slider content  
                  $slider_id = $row['slider_id'];
                  $slider_image = $row['slider_image']; 

                 ?>	
			
				<div class="swiper-slide" style="background: url(img/slider/<?php echo $slider_image?>);">
					<a class="arrow bounce text-center" href="#about"> About<span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
					<h2 class="home-slider-title-main" style="position: absolute; bottom: 0; text-align: center; width: 100%;">Richard Lee Runion</h2>
				</div>
				<?php } ?>
			</div>
			<div class="home-pagination"></div>
<!--			<div class="home-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>-->
<!--			<div class="home-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>-->
		</div>
	</section>
	
<?php 
    //Obtaining the about content already in the database
    $query = "SELECT * FROM about";
    $result = $connection->query($query);
    confirmQuery($result);  

    while($row = mysqli_fetch_assoc($result)) {
      //Storing the about content into a variable 
      $about_content = $row['about_content'];
      $about_date = $row['about_date'];
    }        
    //Outputting a date format
    $newDate = date("m-d-Y", strtotime($about_date));
?>	

		
<!--About us-->
	<section class="about white-color" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading">About us</h3>
				</div>
				<div class="col-md-7 overflow-hidden wow fadeInLeft">
				<!-- Displaying the about me content -->
					<p><?php echo $about_content ?></p>
					<h5 style="font-size: 0.7em">Last update: <bold><?php echo $newDate?></bold></h5>
				</div>
				<div class="col-md-4 col-md-push-1 wow fadeInRight">
				<?php
                //Query to obatin data for the creddentials section
                $query = "SELECT * FROM credentials";
                $result = $connection->query($query);
                confirmQuery($result);   
                $num_rows = mysqli_num_rows($result);
                //Checking for the number of rows in the credentials table to decide if we want to display them or not
                if($num_rows == 0){
                    //Do nothing if there are not credentials
                }else{
                ?>    
                   <!-- Credentials header -->      
                    <h4>Credentials:</h4>
                    <ul class="styled-list">
                <?php
                    //Displaying credentials onto the page
                    while($row = mysqli_fetch_assoc($result)){
                       $cred_list = $row['cred_list'];    
                       echo "<li>$cred_list</li>"; 
                      }
                   }         
                ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!--End of About Us-->
	
<?php
    
    //Obtaining data for the testimonial section
    $query = "SELECT * FROM testimonial";
    $result = $connection->query($query);
    confirmQuery($result);  

    while($row = mysqli_fetch_assoc($result)) {
      //Storing the testimonial content into a variable 
      $test_content = $row['test_content'];
      $test_date = $row['test_date'];
      $test_title = $row['test_title'];
    }    
    //Changing the date format
    $newDate2 = date("m-d-Y", strtotime($test_date));
?>	
		
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
							<div class="testimonials-container shadow"> <img alt="user avatar" class="wow fadeInUp" src="img/slider/lee1.jpg">
								<h3 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $test_title?> </h3>
								<p class="wow fadeInUp" data-wow-delay=".6s"> <?php echo $test_content?> </p>
								<h5 style="font-size: 0.7em; text-align: right;">Last update: <bold><?php echo $newDate2?></bold></h5>
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

<!--Transformation-->
<section class="transformation" id="transformation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading black-color">Transformations</h3>
            </div>
            <div class="transformation-slider text-center">
                <div class="swiper-wrapper">
                   <?php 
                    //Query to obtain data for the clients section
                    $query = "SELECT * FROM clients";
                    $result = $connection->query($query);
                    confirmQuery($result);
                    $num = mysqli_num_rows($result);

                    if($num == 0){
                        echo "<h1>There are no images</h1>";
                    }else{            

                    while($row = mysqli_fetch_assoc($result)){
                       $client_name = $row['client_name'];
                       $client_image = $row['client_image'];
                    ?>
                    <div class="swiper-slide">
                        <h3 class="wow fadeInUp" data-wow-delay=".6s" style="margin-bottom: 10px;"><?php echo $client_name?> </h3>
                            <img id='responsive_img' src="admin_page/admin/includes/images/transformation/<?php echo $client_image?>" alt="">
                    </div>
                    <?php } } ?>
                </div>
                <div class="transformation-pagination"></div>
<!--					<div class="testimonials-slider-next right-arrow-negative"> <span class="ti-arrow-right"></span> </div>-->
<!--					<div class="testimonials-slider-prev left-arrow-negative"> <span class="ti-arrow-left"></span> </div>-->
            </div>
        </div>
    </div>
</section>
<!--End of Transformation-->

<?php

if(isset($_POST['submit'])){
    
 $to = "ehdemdume@gmail.com";    //Sender's email
 $subject = wordwrap($_POST['subject'], 70); //Wordrap wraps a string into another line when it reaches a specific length
 $body = $_POST['body'];  //Body of the email
 $header =  $_POST['contact-email'];
    
 // send email
mail($to,$subject,$body,$header);
    
}    
    
?>

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
            <form action="" method="post" autocomplete="on">
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
                    <textarea class="form-control" id="body" name="body" placeholder="Enter Message" maxlength="140" rows="7"></textarea>
                </div>

                <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit">
            </form>
         </div>
        </div>
    </div>
</div>

    <!-- Maps -->
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
								<li><a href="https://www.facebook.com/richard.l.runion" target="_blank"><span class="ti-facebook"></span></a></li>
								<li><a href="https://twitter.com/" target="_blank"><span class="ti-twitter-alt"></span></a></li>
								<li><a href="http://linkedin.com/" target="_blank"><span class="ti-linkedin"></span></a></li>
<!--								<li><a href="https://vimeo.com/" target="_blank"><span class="ti-vimeo-alt"></span></a></li>-->
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