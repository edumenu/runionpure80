<?php

//Function to redirect Users
function redirect($location){
    
    header("Location:" . $location);
    exit;
}

//Function to check if username exist when registering
function username_exists($username){

    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = $connection->query($query);
    confirmQuery($result);

    if(mysqli_num_rows($result) > 0) {

        return true;
    } else {
        
        return false;
    }
}

//Query failing message error
function confirmQuery($result) {
    
    global $connection;

    if(!$result ) {
          
    echo "QUERY FAILED . Error:" . $connection->error;
        
      }
}

//Function to login user into admin
 function login_user($username, $password)
 {

     global $connection;
    
    $username = trim($username);
    $password = trim($password);

    //Escaping special characters in a string
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password); 

    //Creating an error array to store all errors
    //Error messages
    $error_user = "<strong>Username is incorrect</strong>";
    $error_password = "<strong>Password is incorrect</strong>";

    //Making a query to check for the user's existence 
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $connection->query($query);
     
    confirmQuery($result);

    if($result->num_rows > 0){
        //Obtaining the user's info
        while($row = mysqli_fetch_array($result)){

        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['password'];
        $db_user_firstname = $row['firstname'];
        $db_user_lastname = $row['lastname'];
        $db_user_role = $row['user_role'];   
        }

    if(password_verify($password,$db_user_password) && $db_user_role == 'admin' ) {

        //Setting a session
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;

        //Open the admin the page when username and password are correct 
        header("Location: ../../admin/main/dashboard");

        }else{
            //Creating the error message
            $_SESSION['error'] = $error_password;
            header("Location: ../index");
        }

    }else{
        //Creating the error message
        $_SESSION['error'] = $error_user;
        header("Location: ../index");

        return true;
 }
     
 }

//Functon for registering users 
function register_user($username, $email, $password, $firstname, $lastname){

    global $connection;
  
    //Triming the sides of the text    
    $username = trim($username);
    $email = trim($email);
 
    //Encrypting information obtained from the user.
    //This function escapes special characters in a string for use in an SQL statement
    $username = mysqli_real_escape_string($connection, $username);
    $email    = mysqli_real_escape_string($connection, $email);

    //first parameter = password
    //Second parameter = algorithm
    //cost is the amount of time it takes a function to give you a new hash 
    $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12));

    $query = "INSERT INTO users (username, firstname, lastname, email, password, user_role) ";
    $query .= "VALUES('{$username}','{$firstname}','{$lastname}','{$email}','{$password}','subscriber')";
    //$register_user_query = mysqli_query($connection, $query);
    $result = $connection->query($query);

    confirmQuery($result);
    //header("Location: index.php");
    echo "<script>window.top.location.href ='index.php';</script>";

}

//Escaping string going into the database
function escape($string) {

global $connection;

return mysqli_real_escape_string($connection, trim($string));

}

//Function for empty pictures 1
function imageCheck1($image_1,$product_id){
    
    global $connection;
    
    //Query to retreive image of the select product
    $query = "SELECT * FROM products WHERE product_id = '{$product_id}'";
    //Sending query and checking for query success
    $result = $connection->query($query);
    confirmQuery($result);
    
    //Obtain product image from the database
    while($row = mysqli_fetch_assoc($result)){
        //Retreive first image
         $image_1 = $row['product_image_1'];   
      }
    
    return $image_1; 
}

//Function for empty pictures 2
function imageCheck2($image_2, $product_id){
    
    global $connection;
    
    //Query to retreive image of the select product
    $query = "SELECT * FROM products WHERE product_id = '{$product_id}'";
    //Sending query and checking for query success
    $result = $connection->query($query);
    confirmQuery($result);
    
    //Obtain product image from the database
    while($row = mysqli_fetch_assoc($result)){
        //Retreive first image
         $image_2 = $row['product_image_2'];   
      }
    return $image_2; 
}

//Funcyion to check number of views on each page

 function pageViewCheck($the_current){
 global $connection;
     
  //Obatining the IP address of the user
  $userip = $_SERVER['REMOTE_ADDR'];
  //Assigning the current page
  $my_page = $the_current;        
  //Increment value to increment the number of views for each IP address
  $increment_value = 1;
  
  //Query to check the number of rows (IP addresses) in the page_view table
  $check_ip = "SELECT * FROM page_view WHERE page = '$my_page' AND user_ip = '$userip'";
  $result = $connection->query($check_ip);
  confirmQuery($result);
  $num_rows = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  $views_per_page = $row['page_views'];

  if($num_rows == 1){
      
      if($views_per_page <= 2){
      //Update the number page views in the page_view table to a maximum of 3       
      $update_view = "UPDATE page_view SET page_views = page_views + '$increment_value' WHERE page = '$my_page' AND user_ip = '$userip'";
      $result = $connection->query($update_view);
      confirmQuery($result);
          
      //If the number of views is less than to 3, increment it
      $update_view = "UPDATE total_view SET total_visit = total_visit + '$increment_value' WHERE page = '$my_page'";
      $result = $connection->query($update_view);
      confirmQuery($result);    
          
      }else{
     
      }
      
  }else{
      //If the IP address doesn't exist, insert it into the table 
      $insert_view = "INSERT INTO page_view(page, user_ip) VALUES ('{$my_page}','{$userip}')";
       $result = $connection->query($insert_view);
       confirmQuery($result);
      //Update the number of views on each page 
      $update_view = "UPDATE total_view SET total_visit = total_visit + '$increment_value' WHERE page = '$my_page'";
       $result = $connection->query($update_view);
       confirmQuery($result);
  }
 }

?>