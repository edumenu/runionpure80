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

     <div class="alert alert-success" role="alert"><h1>Shop</h1></div>     
         
     <!-- Table for products -->          
     <div class="table-responsive">
      <table class="table table-shopping table-bordered">
              <thead style="background-color: #A23AB5;color: white;">
                  <tr>
                      <th class="text-left">First Image</th>
                      <th class="text-left">Second Image</th>
                      <th class="text-center">Name</th>
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
                        $num_rows = mysqli_num_rows($result);
        
                       if($num_rows == 0){
                           echo "<div class='alert alert-danger text-center' role='alert'> There are no products!</div>";
                          }else{

                        while($row = mysqli_fetch_assoc($result)) {
                          //Storing the about content into a variable 
                          $product_id = $row['product_id'];
                          $product_name = $row['product_name'];
                          $product_description = $row['product_description'];
                          $product_price = $row['product_price'];
                          $product_image_1 = $row['product_image_1'];
                          $product_image_2 = $row['product_image_2'];
                          $product_views = $row['product_views'];
                    ?> 
                 <tr id="product_table">
                      <td>  <!-- Image column-->
                          <div class="img-container">
                              <?php
                            //Display a default image when there is no image
                            if(empty($product_image_1)){
                                echo " <img src='images/default.png' alt='...''>";
                            }else{
                                echo " <img src='images/$product_image_1' alt='...''>";
                            }
                            ?>
                          </div>
                      </td>
                      <td>  <!-- Image column-->
                          <div class="img-container">
                              <?php 
                             //Display a default image when there is no image
                            if(empty($product_image_2)){
                                echo " <img src='images/default.png' alt='...''>"; 
                            }else{
                                 echo " <img src='images/$product_image_2' alt='...''>";
                            }
                              
                              ?>
                          </div>
                      </td>

                      <td><!-- Product name column-->
                         <p class="text-left"><?php echo $product_name?></p>
                      </td>
                        
                      <td><!-- Description column-->
                         <p class="text-center" style="overflow-x:hidden;height: 80px;"><?php echo $product_description?></p>
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
                       <?php echo "<a title='Edit' href='edit_product.php?p_id={$product_id}' type='button' class='btn btn-success'><i class='material-icons'>edit</i></a>"?>
                     
                       <?php echo "<a title='Delete' rel='{$product_id}' href='javascript:void(0)' type='button' class='delete_link btn btn-danger' data-toggle='modal' data-target='#myModal' id='delete_link'><i class='material-icons'>close</i></a>"?>
                      </td>
                  </tr>
                  
                  <?php } } ?>
                  
              </tbody>
      </table>
     </div>
     
     
                                  <?php 
//        //Post request to delete product
        if(isset($_POST['delete'])){
            //Checking to see if its a user
//            if(isset($_SESSION['user_role'])){
                //CHecking to see if user is an admin
//                if($_SESSION['user_role'] == 'admin'){
                    //Obtaining the product id
                    $the_product_id = escape($_POST['product_id']);
            
                    //Obtaining the ID for the image and deleting it in the directory
                    if(!empty($the_product_id)){
                        $query = "SELECT * FROM products WHERE product_id = '{$the_product_id}'";
                        $result = $connection->query($query);

                        while($row = mysqli_fetch_assoc($result)){
                          $product_image_1 = $row['product_image_1'];
                          $product_image_2 = $row['product_image_2'];
                          $file1 = 'images/'. $product_image_1;
                          $file2 = 'images/'. $product_image_2;
                          unlink($file1);
                          unlink($file2);    
                        }
                    }
            
                    
                    $query = "DELETE FROM products WHERE product_id = '{$the_product_id}'";
                    $result = $connection->query($query);
                    confirmQuery($result);
                    redirect("view_all_products.php");
                    
                }
            //}
        //}
         
        ?>
     
     
     
         <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          
            <div class="modal-body">
            <p>Are you sure you want to delete this product?</p>
            </div>
             
     
          <div class="modal-footer">
           
           
             <form action="" method="post">
          
             
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <input id='modal_delete_link' type="hidden" name="product_id" value=""/>

                <button name="delete" value="Delete" type="submit" class="btn btn-danger">Delete</button>
              
             </form>
           
           
          </div>

       </div>
     </div>
    </div> 
     
     
<?php include "footer.php"?>