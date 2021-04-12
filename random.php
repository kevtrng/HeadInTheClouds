<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// require "./php/utility.php";
require "./database/database.php";
$pdo = db_connect();
// handle_form_submission();
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
		<title>Head In The Clouds</title>

		<link rel="stylesheet" href="./src/random.css">
		<link rel="stylesheet" href="./src/cloud.css">
		<link rel="stylesheet" href="./src/welcome.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>

		<nav class = "navBar">
			<h3>HEAD IN THE CLOUDS</h3>
			<!-- <img src="./src/images/logoCloud.png"> -->
			<ul>
				<li><a href="anotherPage.php">CLOUD WALL</a></li>
				<li><a href="random.php">CLOUD GENERATOR</a></li>
			</ul>
		</nav>


		<h1>HEAD IN THE CLOUDS</h1>
		<h2>RANDOM CLOUDS</h2>

		<div id="randCloud"><p><?php generateRand()?></p></div>

		<input type="button" value="Generate" id="randButton" class="enterButton"/>


		<script src="./src/js/random.js"></script>
	</body>
</html>
