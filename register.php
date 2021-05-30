<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="main.css">
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<div id="big_wrapper">
			<?php require 'header.php'; ?>
			<?php require 'navigation.php'; ?>
			<div id="logins">
				<section>
					<h2>Login Form</h2>
					<input type="text" name="username" placeholder="Username" maxlength="16" required>
					<input type="password" name="password" placeholder="Password" required>
					<button type="submit" class="registerbtn">Register</button>
				</section>
			</div>
		</div>
		<?php require 'footer.php'; ?>
	</body>
</html>