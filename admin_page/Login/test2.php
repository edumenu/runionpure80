<?php include "includes/db.php"?>
<?php

    if(isset($_GET['key'])){
    $the_product_id = $_GET['key'];     
     //Obtaining all the products from the database
    $query = "SELECT * FROM products WHERE product_id = $the_product_id";
    $result = $connection->query($query);

    while($row = mysqli_fetch_assoc($result)) {
      //Storing the about content into a variable 
      $product_id = $row['product_id'];
      $product_name = $row['product_name'];
      $product_image_1 = $row['product_image_1'];
      echo $product_id;echo "<br>";
      echo $product_name;echo "<br>";
      echo $product_image_1;
      echo "<br>";
    } 
    } 
?>