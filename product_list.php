<?php
 
    //Obtaining the about content already in the database
    $query = "SELECT * FROM products LIMIT 4";
    $result = $connection->query($query);
    confirmQuery($result);
    $num_rows = mysqli_num_rows($result);
        
        if($num_rows == 0){
            echo "<ul class='swiper-wrapper product-list product-list-vertical'>
            <li class='swiper-slide wow fadeInUp text-center' data-wow-delay='.1s'> 
                <span class='product-list-left pull-left'>
                    <a id='prod' href='#' data-target='#product-01' data-toggle='modal'><img class='prod' id='responsive_img' alt='product image'  src='admin_page/admin/includes/images/default.png'>
                    </a>
                </span> 
                <a href='#' data-target='#product-01' data-toggle='modal'>
                    <span class='product-list-right pull-left'>
                        <span class='product-list-name h4 black-color'>No Image</span>
                        <span class='product-list-price'>No price</span>

                    </span>
                </a>		
             </li>
             </ul>";
        }else{

   echo "<ul class='swiper-wrapper product-list product-list-vertical'>";

    while($row = mysqli_fetch_assoc($result)) {
      //Counting the number of rows    
      $num_rows = mysqli_num_rows($result);
      //Storing the about content into a variable
      $product_id = $row['product_id'];
      $product_name = $row['product_name'];
      $product_description = $row['product_description'];
      $product_image_1 = $row['product_image_1'];
      $product_image_2 = $row['product_image_2'];
      $product_price = $row['product_price'];
       
      echo "<li class='swiper-slide wow fadeInUp text-center' data-wow-delay='.1s'> 
                <span class='product-list-left pull-left'>
                    <a id='prod' href='#' data-target='#product-01' data-toggle='modal'><img class='prod' rel='{$product_id}' id='responsive_img' alt='product image'  src='admin_page/admin/includes/images/{$product_image_1}'>
                    </a>
                </span> 
                <a href='#' data-target='#product-01' data-toggle='modal'>
                    <span class='product-list-right pull-left'>
                        <span class='product-list-name h4 black-color'>{$product_name}</span>
                        <span class='product-list-price'>\${$product_price}</span>
                    </span>
                </a>
                <button class='btn btn-default add-item' type='button' data-image='admin_page/admin/includes/images/{$product_image_1}' data-name='{$product_name}' data-cost='$product_price' data-id='$product_id'>
                    <span class='ti-shopping-cart'></span>add to cart
                </button> 		
             </li>"; 
    
    }

  echo "</ul>";
    }

?>