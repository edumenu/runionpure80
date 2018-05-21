<?php include "admin_page/Login/includes/db.php"?>
<?php
    
    // ********** This file makes a get request to retrieve products in the database ***********

    if(isset($_GET['key'])){    //Detecting to see if a get request was made
        
    //Storing the product_id obtained when the product image was selected    
    $the_product_id = $_GET['key'];     
     //Obtaining all the products from the database
    $query = "SELECT * FROM products WHERE product_id = $the_product_id";
    $result = $connection->query($query);
    $num_rows = mysqli_num_rows($result);
        
    if($num_rows == 0){
        echo "<div class='alert alert-danger' role='alert'> There are no images, please come back later</div>";
     }else{
     while($row = mysqli_fetch_assoc($result)) {
      //Storing the product content into a variable 
      $product_id = $row['product_id'];
      $product_name = $row['product_name'];
      $product_image_1 = $row['product_image_1'];
      $product_image_2 = $row['product_image_2'];
      $product_description = $row['product_description'];
      $product_price = $row['product_price'];
      //Creating and storing the variables in an associative array
      $product = array(
                 "product_id" => $product_id,
                 "product_name" => $product_name,
                 "product_image_1" => $product_image_1,
                 "product_image_2" => $product_image_2,
                 "product_description" => $product_description,
                 "product_price" => $product_price
                );    
      //COnverting the associated array into a JSON string    
      echo json_encode($product);
        } 
    }
        
    }
?>