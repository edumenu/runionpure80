<?php session_start(); ?>

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
				<form action="includes/login.php" method="post">
					<span class="login100-form-title p-b-26">
						Login
					</span>
					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="username" placeholder="Enter Username" autocomplete="on">
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
							<button class="login100-form-btn" name="login" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
<!--
						<a href="#">
							Forgotten your password?
						</a>
-->
						<br>
						<a href="registration.php" class="btn btn-success">
							Register
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>