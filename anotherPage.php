<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// require "./php/utility.php";
// require "./database/database.php";
require_once("./database/database.php");
db_connect();
get_comments();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Head In The Clouds</title>

    <link rel="stylesheet" href="./src/welcome.css">
  </head>
  <body>

    <h1>FUCK</h1>

    <div class = "button">

        <button class= "enterButton" type="button"><a href= "userValidation.php">ENTER</a></button>
    </div>

	<?php
	showComments();
	?>

  </body>
</html>
