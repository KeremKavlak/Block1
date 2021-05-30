<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css\main.css">
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" width="16px" height="16px" />
		<title>Login</title>
		<script src="js/form.js"></script>
	</head>
	<body>
		<div id="big_wrapper">
			
			<div class="grid-container-form">
				<div class="top">
					<img src="images/logo.svg" width="70px" height="auto">
				<header>CancerCoffeeCo.</header>
				<?php require 'php_functions\navigation.php'; ?>
			</div>
			<div class="header">
				<header id="top_header" class="grid">
					<h1>Login now! Don't have an account, create one</h1>
				</header>
			</div>
			<div class="mleft">
				<div id="forms">
					<section>
						<header>
							<h1>Login</h1>
							<p id="fb"></p>
							<form method="post">
							</header>
							<p><input type="text" id="user" placeholder="Username"></p>
							<p><input type="password" id="pass" placeholder="Password"></p>
							<input class="btn-login" value="Login" name="login_but" type="button" onclick="login()">
						</form>
					</section>
				</div>
			</div>
			<div class="mright">
				<div id="forms">
					<section>
						<header>
							<h1>Register</h1>
							<form method="post">
							</header>
							<p> Username </p>
							<p><input type="text" id="userC" name="username" placeholder="Username"></p>
							<p> Password </p>
							<p><input type="password" id="passwordC" name="password" placeholder="Password"></p>
							<input class="btn-register" type="button" name="register_but" onclick="reg()" value="Create Account">
						</form>
					</section>
				</div>0
			</div>
			<?php require 'php_functions\footer.php'; ?>
		</div>
		
	</body>
</div>
</html>