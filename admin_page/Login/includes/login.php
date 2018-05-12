<?php ob_start(); ?>
<!-- This function creates a new session or resumes a current one based on a session identifier passed via GET or POST -->
<?php session_start();?>

<?php include "db.php";?>
<?php include "../functions.php";?>

<?php

if(isset($_POST['login'])){
//Obtaining the username and password
$username = $_POST['username'];
$password = $_POST['password'];
    
login_user($username, $password);
    
//    
//while($row = mysqli_fetch_array($select_user_query)){
//        
//    $db_user_id = $row['user_id'];
//    $db_username = $row['username'];
//    $db_user_password = $row['user_password'];
//    $db_user_firstname = $row['user_firstname'];
//    $db_user_lastname = $row['user_lastname'];
//    $db_user_role = $row['user_role'];
//        
//}
//    
//if(password_verify($password,$db_user_password)) {
//    
//    //Setting a session
//    $_SESSION['username'] = $db_username;
//    $_SESSION['firstname'] = $db_user_firstname;
//    $_SESSION['lastname'] = $db_user_lastname;
//    $_SESSION['user_role'] = $db_user_role;
//    
////Open the admin the page when username and password are correct 
//    header("Location: ../../admin/index.php");
//
//}else{
//    header("Location: ../index.php");
//}
    
    
    
}


?>