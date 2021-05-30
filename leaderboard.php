<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css\main.css">
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" width="16px" height="16px" />
		<title>Leaderboard</title>
		<script src="js/table.js"></script>
	</head>
	<body>
		<div id="big_wrapper">
			
			<div class="grid-container-leaderboard">
				<div class="top">
					<img src="images/logo.svg" width="70px" height="auto">
				<header>CancerCoffeeCo.</header>
				<?php require 'php_functions\navigation.php'; ?>
			</div>
			<div class="header">
				<header id="top_header" class="grid">
					<h1>Leaderboard</h1>
				</header>
			</div>
			<div class="mid">
				<h2>Score table</h2>
			 <table>
                        
                        <thead>
                            
                            <tr>
                                <th>Username</th>
                                <th>Scores</th>
                            </tr>
                        </thead>
                        
                        <tbody id="highscores">
                        </tbody>
                    </table>
		</div>
		<?php require 'php_functions\footer.php'; ?>
	</div>
</body>
</div>
</html>