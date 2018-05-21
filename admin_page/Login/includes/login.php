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

//Login function to log the user in    
login_user($username, $password);    
}
?>