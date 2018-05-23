<!-- Header file  -->
<?php include "../includes/header.php" ?>
<!-- /Header file -->
<?php include "../../Login/includes/db.php"?>
   
   
   <div class="wrapper">
       
   <!-- Side navigation -->
   <?php include "../includes/sidenav.php"?>
   <!-- /Side navigation -->

    <div class="main-panel">


   <!-- Top navbar -->
   <?php include "../includes/topnav.php"?>
   <!-- /Top navbar --> 

    <div class="alert alert-success" role="alert"><h1>Welcome Admin</h1></div>   
            
            
    <div class="content">
        <div class="container-fluid">

           <!-- Number of viewers -->
            <div class="row">

               <!-- Total number views -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">home</i>
                            </div>
                            <p class="card-category">Home page Views</p>
                            <h3 id="home_views" class="card-title home_views">400</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i>
                                Total number of views on home page
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total number views -->

                <!-- Number of products in the store -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Shop page views</p>
                            <h3 id="shop_views" class="card-title shop_views">45</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">store</i> Total number of prodcuts in the store
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- /Number of products in the store -->

                <!-- Number of users for admin -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">person</i>
                            </div>
                            <p class="card-category">Users</p>
                            <?php 
                                          
                            $query = "SELECT * FROM users";
                            $result = $connection->query($query);
                            confirmQuery($result);
                            $num_rows = mysqli_num_rows($result);
                            echo "<h3 class='card-title'>$num_rows</h3>";
      
                            ?>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">person</i>Total number of users
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Number of users for admim -->

                <!-- Number of sales -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">shopping_cart</i>
                            </div>
                            <p class="card-category">Products</p>
                               <?php 
                                          
                            $query = "SELECT * FROM products";
                            $result = $connection->query($query);
                            confirmQuery($result);
                            $num_rows = mysqli_num_rows($result);
                            echo "<h3 class='card-title'>$num_rows</h3>";
      
                            ?>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">star</i> Total number of sales
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- /Number of sales -->

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        
       $(document).ready(function(){
           
           //Get request for dashboard page
       $.get("../includes/dashboard_get.php", function(data, status){
             //Checking for errors
                 if(status == '404'){
                     alert('Requested page not found. [404]');
                 }else if(status == '500'){
                       alert('Internal Server Error [500]');
                 }else{
                    //Parsing the json array 
                    var views = jQuery.parseJSON(data);
                    //Assigning the obtained values 
                    $(".home_views").html(views['index.php']);
                    $(".shop_views").html(views['shop.php']);
                 }
                     
                 });
       }); 
        
    </script>        
            
<!--  ******Footer****   -->
<?php include "../includes/footer.php" ?>