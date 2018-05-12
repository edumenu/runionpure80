 <?php ob_start(); ?>
<!-- This function creates a new session or resumes a current one based on a session identifier passed via GET or POST -->
<?php session_start();?>

<?php include "includes/db.php";?>
<?php include "functions.php";?>
 
 <?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
 
 $username = $_POST['username'];
 $password = $_POST['password'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
    
 //Error message for duplicate usernames    
 $error_alreadyExist = "<strong>User already exist, create a new one.</strong>";    

//Checking to see if the user exist    
if(username_exists($username) == false){
    //Registering the new user
    register_user($username, $email, $password, $firstname, $lastname);

}else{
    $_SESSION['error'] = $error_alreadyExist;
}
    
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form role="form" action="registration.php" method="post">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="firstname" placeholder="Enter First name">
					</div>
					
					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="lastname" placeholder="Enter Last name">
					</div>
					
					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="username" placeholder="Enter Username">
					</div>
					
					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="email" placeholder="Enter Email">
					</div>

					<div class="wrap-input100 validate-input">
						<input required class="input100" type="password" name="password" placeholder="Enter Password">
					</div>
				    
                    <div class="class='alert alert-danger text-center">
                    <!-- Displaying an error message when a user or email is incorrect -->
                     <?php if(!empty($_SESSION['error'])) { echo $_SESSION['error']; } ?>

					</div>
					<!-- Destroying the error message -->
					<?php unset($_SESSION['error']);?>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" value="Register">
								Register
							</button>
						</div>
					</div>
					
					<div class="text-center p-t-115">
						<br>
						<a href="index.php" class="btn btn-success">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>