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

    <link rel="stylesheet" href="./src/cloudWall.css" />
    <link rel="stylesheet" href="./src/cloud.css" />
  </head>
  <body>

    <nav class = "navBar">
      <h3>HEAD IN THE CLOUDS</h3>
      <!-- <img src="./src/images/logoCloud.png"> -->
      <ul>
        <li><a href="anotherPage.php">CLOUD WALL</a></li>
        <li><a href="#">CLOUD GENERATOR</a></li>
      </ul>
    </nav>


    <h1>HEAD IN THE CLOUDS</h1>
    <h2>WALL OF CLOUDS</h2>


	<?php
	get_comments();
	?>

  </body>
</html>
