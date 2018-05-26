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
 <div class="alert alert-success" role="alert"><h1>Shop</h1></div> 
        
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit selected product</h4>
            </div>
            
            <div class="card-body">
               <?php 
                //Checking to see if the product ID exist
                if(!isset($_GET['p_id'])){
                  echo "<div class='alert alert-danger' role='alert' style='margin-bottom: 100px'> No product was selected</div>";  
                }
                ?>
                <div class="embed-responsive embed-responsive-4by3">
                 <!-- An iframe for add_product2 page -->
                 <?php 
                    if(isset($_GET['p_id'])){
                        //Obtaining the product ID from a get request
                        $val = $_GET['p_id'];
                        
                        //Displaying the iframe
                       echo " <iframe class='embed-responsive-item' src='edit_product2.php?p_id={$val}?>' allowfullscreen></iframe>"; 
                    } 
                    ?>
                </div>
            </div>
            
        </div>
         
     
<?php include "footer.php"?>