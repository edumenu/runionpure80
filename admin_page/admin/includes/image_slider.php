<?php include "header.php"?>
 <?php include "../../Login/includes/db.php"?>

 <div class="wrapper">
       
       <!-- Side navigation -->
       <?php include "sidenav.php"?>
       <!-- /Side navigation -->
  
        <div class="main-panel">
         
           <!-- Top navbar -->
       <?php include "topnav.php"?>
       <!-- /Top navbar -->
       
  <!-- Page Header -->          
 <div class="alert alert-success" role="alert"><h1>Slider</h1></div> 
        
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Add or delete images for the image slider</h4>
            </div>
            
            <div class="card-body">
                <div class="embed-responsive embed-responsive-4by3">
                 <!-- An iframe for add_product2 page -->
                 <?php     
                    //Displaying the iframe
                   echo " <iframe class='embed-responsive-item' src='image_slider2.php?>' allowfullscreen></iframe>"; 
                    ?>
                </div>
            </div>
            
        </div>
         
     
<?php include "footer.php"?>