<!-- Header file  -->
<?php include "../includes/header.php" ?>
<!-- /Header file -->
   
   
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
                                <i class="material-icons">visibility</i>
                            </div>
                            <p class="card-category">Views</p>
                            <h3 class="card-title">1000</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i>
                                Live update of the total number of views
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
                            <p class="card-category">Products</p>
                            <h3 class="card-title">45</h3>
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
                            <h3 class="card-title">75</h3>
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
                                <i class="material-icons">star</i>
                            </div>
                            <p class="card-category">Sales</p>
                            <h3 class="card-title">+245</h3>
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
            
            
<!--  ******Footer****   -->
<?php include "../includes/footer.php" ?>