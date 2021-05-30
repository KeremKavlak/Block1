<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css\main.css">
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" width="16px" height="16px" />
		<title>Play now!</title>
	</head>
	<body>
		<div id="big_wrapper">
			<div class="grid-container-game">
				<div class="top">
					<img src="images/logo.svg" width="70px" height="auto">
				<header>CancerCoffeeCo.</header>
				<?php require 'php_functions\navigation.php'; ?>
			</div>
			<div class="header">
				<header id="top_header" class="grid">
					<h1>Play now!</h1>
				</header>
			</div>
			<div class="mid">
				<div id="game">
					<section>
						<div class="flex">
							<form>
							 Easy<input type="radio" name="diff" checked="checked" id="Easy">
							 Hard<input type="radio" name="diff" id="Hard">
							 <input type="button" value="Start Game" onclick="generateQuiz()">
							</form>
							<div class="field">Score</div>
							<div id="score" class="field">0</div>
							<div class="field">Question</div>
							<div id="question" class="field"></div>
							<div id="ansresp" class="field"></div>
						</div>
						<p><input type="text" id="ans" placeholder="answer here" required></p>
						<input class="btn" name="login_but" type="button" onclick="submit()">
					</section>
				</div>
				<aside>
					<header>
						<h1>Top Three</h1>
					</header>
					<table>
						<thead>
							<tr>
								<th>Username</th>
								<th>Score</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>username</td>
								<td>score</td>
							</tr>
							<tr>
								<td>username</td>
								<td>score</td>
								
							</tr>
							<tr>
								<td>username</td>
								<td>score</td>
								
							</tr>
						</tbody>
					</table>
				</aside>
			</div>
			<?php require 'php_functions\footer.php'; ?>
		</div>
		<script src="js/game.js"></script>
	</body>
</div>
</html>