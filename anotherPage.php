<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// require "./php/utility.php";
require "./database/database.php";
$pdo = db_connect();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Head In The Clouds</title>

    <link rel="stylesheet" href="./src/welcome.css">
    <link rel="stylesheet" href="./src/cloud.css">
  </head>
  <body>

    <h1>FUCK</h1>

    <div class = "button">

        <button class= "enterButton" type="button"><a href= "userValidation.php">ENTER</a></button>
    </div>

	<div class = "sky">
		<?php
			get_comments();
		?>
	</div>
  </body>
</html>
