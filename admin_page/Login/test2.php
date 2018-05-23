<?php include "includes/db.php"?>
<?php include "functions.php"?>
<?php
  //Obatining the IP address of the user
  $userip = $_SERVER['REMOTE_ADDR'];
  //Assigning the current page
  $my_page = 'test.php';
  //Increment value to increment the number of views for each IP address
  $increment_value = 1;
  
  //Query to check the number of rows (IP addresses) in the page_view table
  $check_ip = "SELECT * FROM page_view WHERE page = '$my_page' AND user_ip = '$userip'";
  $result = $connection->query($check_ip);
  confirmQuery($result);
  $num_rows = mysqli_num_rows($result);

  if($num_rows == 1){
      //If the IP address exist in the table, check the number of views on that page 
      $check_ip = "SELECT * FROM total_view WHERE page = '$my_page'";
      $result = $connection->query($check_ip);
      confirmQuery($result);
      $row = mysqli_fetch_assoc($result);
      $number_views = $row['total_visit'];
      
      if($number_views >= 3){
          
      }else{
          //If the number of views is less than to 3, increment it
           $update_view = "UPDATE total_view SET total_visit = total_visit + '$increment_value' WHERE page = '$my_page'";
           $result = $connection->query($update_view);
           confirmQuery($result); 
      }
      
  }else{
      //If the IP address doesn't exist, insert it into the table 
      $insert_view = "INSERT INTO page_view(page, user_ip) VALUES ('{$my_page}','{$userip}')";
       $result = $connection->query($insert_view);
       confirmQuery($result);
      //Insert 
      $update_view = "UPDATE total_view SET total_visit = total_visit + '$increment_value' WHERE page = '$my_page'";
       $result = $connection->query($update_view);
       confirmQuery($result);
      echo "There are no reccords";
  }
    
?>