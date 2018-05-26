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

    //Checking to see if the first uploaded image is empty or not. IF it is, replace it with the second image 
    if(empty($product_image_1)){
        $product_image_1 = $product_image_2;
        $product_image_2 = '';
    }

    //Query to send data to the product table
    $query = "INSERT INTO products(product_name, product_image_1, product_image_2, product_description, product_price) VALUES ('{$product_name}','{$product_image_1}','{$product_image_2}','{$product_description}','{$product_price}')";

    //Sending query and checking for query success
    $result = $connection->query($query);
    confirmQuery($result);
    echo "<script>window.top.location.href ='view_all_products';</script>";
}  
?>

<div class="container">
  <!-- Form -->
  <form action="" method="post" enctype="multipart/form-data">
   <!-- Product name -->
    <div class="form-group">
      <label for="email">Product name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter product name" name="product_name">
    </div>
     <!-- /Product name -->
     
       <!-- Description -->
    <div class="form-group">
      <label for="email">Description:</label>
      <textarea id="description" name="product_description" id="" cols="20" rows="5" class="form-control" placeholder="Enter product description"></textarea>
    </div>
     <!-- /Description -->
     
    <!--Price -->
    <div class="form-group">
      <label for="pwd">Price(enter the price without the dollar sign):</label>
      <input type="text" class="form-control" id="price" placeholder="Enter product price" name="product_price">
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
       <td><input type="file" class="form-control-file" name="image1"></td>
       <td><input type="file" class="form-control-file" name="image2"></td>
       </tr>
     </table>
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
