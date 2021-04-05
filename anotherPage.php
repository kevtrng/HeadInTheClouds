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

    <link rel="stylesheet" href="./src/cloudPost.css">
    <link rel="stylesheet" href="./src/cloud.css">
  </head>
  <body>

    <nav class = "navBar"> 
        <img src="./src/images/logoCloud.png"> 
      <ul>
        <li><a href="anotherPage.php">CLOUD WALL</a></li>
        <li><a href="#">CLOUD GENERATOR</a></li>
      </ul>
    </nav>


    <h1>HEAD IN THE CLOUDS</h1>

    <div class="write-comment">
      <h2>POST YOUR CLOUD</h2>

      <form action="anotherPage.php" method="post">

        <label>
          Email Address:
          <input type="email" name="email">
        </label>

        <label>
          Enter your Head In The Cloud Thoughts:
          <textarea name="comment"></textarea>
        </label>

        <button type="submit" name="button">POST CLOUD</button>

      </form>
    </div>

	<?php
	get_comments();
	?>

  </body>
</html>
