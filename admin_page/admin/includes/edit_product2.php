<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <!-- Toastr.js -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>

<?php include "../../Login/includes/db.php"?>
<?php include "../../Login/functions.php"; ?>
<?php 
    
    if(isset($_GET['p_id'])){
        //Obtaining the product ID from the selected product
        $the_product_id = escape($_GET['p_id']);
        
    //Query to retreive data to the product table
    $query = "SELECT * FROM products WHERE product_id = '{$the_product_id}'";

    //Sending query and checking for query success
    $result = $connection->query($query);
    confirmQuery($result);  
        
    //Obtain product data from the database
    while($row = mysqli_fetch_assoc($result)){
        $product_description = $row['product_description'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
        $product_image_1 = $row['product_image_1'];
        $product_image_2 = $row['product_image_2'];
    }
    
    //Obtaing data from the form
    if(isset($_POST['edit_product'])){
        //Obtaining the values from the form
        $product_name = escape($_POST['product_name']);
        $product_description = escape($_POST['product_description']);
        $product_price = escape($_POST['product_price']);
        $product_image_1 = $_FILES['image1']['name'];
        $product_image_2 = $_FILES['image2']['name'];
        //Creating a temporary variable to contain the image
        $product_image_temp_1 = $_FILES['image1']['tmp_name'];
        $product_image_temp_2 = $_FILES['image2']['tmp_name'];
        
        //Moving the uploaded file to a new location in the directory    
        move_uploaded_file($product_image_temp_1, "images/$product_image_1");
        move_uploaded_file($product_image_temp_2, "images/$product_image_2");
        
        //Obtainging the selected product's image just incase the image section in the form is empty
        //Checking which product images are empty
        if(empty($product_image_1)){
            
           $product_image_1 = imageCheck1($product_image_1,$the_product_id);
            
        } 
        
        if(empty($product_image_2)){
            
           $product_image_2 = imageCheck2($product_image_2,$the_product_id);
            
        } 
        
        if(empty($product_image_1) && empty($product_image_2)){
            
            $product_image_1 = imageCheck1($product_image_1,$the_product_id);
            $product_image_2 = imageCheck2($product_image_2,$the_product_id);
        }
        
        //Update query from the selected product
        $query = "UPDATE products SET product_name = '{$product_name}', product_image_1 = '{$product_image_1}', product_image_2 = '{$product_image_2}', product_description = '{$product_description}', product_price = '{$product_price}' WHERE product_id = '{$the_product_id}'";
        
        //Sending query and checking for query success
        $result = $connection->query($query);
        confirmQuery($result); 
        
        //Redirecting the user to the view all products page
        echo "<script>window.top.location.href ='view_all_products.php';</script>";
    }
        
    }else{
        echo "<div class='alert alert-danger text-center'><strong>No product was selected!</strong></div>";
    }
    
    
?>

<div class="container">
      <!-- Form -->
      <form action="" method="post" enctype="multipart/form-data">
      
       <!-- Name -->
        <div class="form-group">
          <label for="email">Name:</label>
          <input type="text" class="form-control" id="description" placeholder="Enter description" name="product_name" value='<?php echo $product_name ?>'>
        </div>
         <!-- /Name -->
         
           <!-- Description -->
        <div class="form-group">
          <label for="email">Description:</label>
         <textarea id="description" name="product_description" id="" cols="20" rows="5" class="form-control" placeholder="Enter product description"><?php echo $product_description ?></textarea>
        </div>
         <!-- /Description -->

        <!--Price -->
        <div class="form-group">
          <label for="pwd">Price:</label>
          <input type="text" class="form-control" id="price" placeholder="Enter price" name="product_price" value="<?php echo $product_price ?>">
        </div>
         <!-- /Price -->
        
        <!-- Image -->
        <div class="form-group">
         <label for="image">Select two images:</label>
          <table>
           <tr>
             <th>First image</th>
             <th>Second Image</th>
            </tr>
           <tr>
           <!-- Image 1 -->
           <td>
             <img width="100" src="images/<?php echo $product_image_1; ?>" alt="">
             <input type="file" class="form-control-file" name="image1">
           </td>
           <!-- Image 2 -->
           <td>
              <img width="100" src="images/<?php echo $product_image_2; ?>" alt="">
              <input type="file" class="form-control-file" name="image2">
           </td>
           </tr>
         </table>

        </div>
        <!-- /Image-->
        

        <button id="add_product" type="submit" class="btn btn-success" name="edit_product">Submit</button>
     </form>
</div>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 

</body>

</html>
