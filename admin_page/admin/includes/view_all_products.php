<?php include "header.php"?>
<?php include "../../Login/includes/db.php"?>

 <div class="wrapper">
       
    <!-- Side navigation -->
    <?php include "../includes/sidenav.php"?>
    <!-- /Side navigation -->

    <div class="main-panel">

       <!-- Top navbar -->
    <?php include "../includes/topnav.php"?>
    <!-- /Top navbar -->

     <div class="alert alert-success" role="alert"><h1>List of all products</h1></div>     
         
     <!-- Table for products -->          
     <div class="table-responsive">
      <table class="table table-shopping">
              <thead>
                  <tr>
                      <th class="text-left">Image</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Price</th>
                      <th class="text-right">Number of views</th>
                      <th class="text-right">Action</th>
                  </tr>
              </thead>
              <tbody>
                 
                  <?php
                     //Obtaining all the products from the database
                        $query = "SELECT * FROM products";
                        $result = $connection->query($query);
                        confirmQuery($result);  

                        while($row = mysqli_fetch_assoc($result)) {
                          //Storing the about content into a variable 
                          $product_id = $row['product_id'];
                          $product_description = $row['product_description'];
                          $product_price = $row['product_price'];
                          $product_image = $row['product_image'];
                          $product_views = $row['product_views'];
                    ?> 
                 <tr>
                      <td>  <!-- Image column-->
                          <div class="img-container">
                              <?php echo " <img src='images/$product_image' alt='...''>"?>
                          </div>
                      </td>

                      <td><!-- Description column-->
                         <p class="text-center"><?php echo $product_description?></p>
                      </td>

                      <td><!-- Price column-->
                          <p class="text-center"><?php echo "$product_price"?></p>
                      </td>

                      <td class="text-right"><!-- Number of views column-->
                         <button type="button" rel="tooltip" class="btn btn-info btn-sm">
                            <i class="material-icons">pageview</i><?php echo "   $product_views"?>
                        </button>
                      </td>

                      <td class="td-actions text-right">  <!--Edit and delete column -->
                        <a href="#"  type="button" class="btn btn-success"><i class="material-icons">edit</i></a>
                       <a href="#"  type="button" class="btn btn-danger"><i class="material-icons">close</i></a>
                      </td>
                  </tr>
                  
                  <?php } ?>
                  
              </tbody>
      </table>
     </div>
     
<?php include "footer.php"?>