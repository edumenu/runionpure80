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
    
    if(isset($_POST['create_product'])){
        //Obtaining the product data from the form
        $product_description = escape($_POST['product_description']);
        $product_price = escape($_POST['product_price']);
        $product_image = $_FILES['image']['name'];
        //Creating a temporary variable to contain the image
        $product_image_temp = $_FILES['image']['tmp_name'];
        //Moving the uploaded file to a new location in the directory    
        move_uploaded_file($product_image_temp, "images/$product_image");
        
        //Query to send data to the product table
        $query = "INSERT INTO products(product_image, product_description, product_price) VALUES ('{$product_image}','{$product_description}', '{$product_price}')";
        
        //Sending query and checking for query success
        $result = $connection->query($query);
        confirmQuery($result);
//        redirect("view_all_products.php");
        echo "<script>window.top.location.href ='view_all_products.php';</script>";
    }  
?>

<div class="container">
  <h2>Add a product</h2>
  <!-- Form -->
  <form action="" method="post" enctype="multipart/form-data">
   <!-- Description -->
    <div class="form-group">
      <label for="email">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="product_description">
    </div>
     <!-- /Description -->
     
    <!--Price -->
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="product_price">
    </div>
     <!-- /Price -->
     
      <!-- Image -->
    <div class="form-group">
     <label for="exampleFormControlFile1">Select an image:</label>
     <input type="file" class="form-control-file" name="image">
    </div>
    <!-- /Image-->
   
    <button id="add_product" type="submit" class="btn btn-success" name="create_product">Submit</button>
 </form>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 

</body>

</html>
