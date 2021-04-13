 <?php
  // error reporting
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Import functions
  require_once('./php/validation.php');

  // Validate form submission
  validate();

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  // require "./php/utility.php";
  require "./database/database.php";
  $pdo = db_connect();
  // handle_form_submission();
  if($valid) {
	  handle_form_submission();
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Head In The Clouds</title>

    <link rel="stylesheet" href="./src/validation.css">
    <link rel="stylesheet" href="./src/footer.css">
  </head>
  <body>
    <h1> HEAD IN THE CLOUDS </h1>


    <main>
      <h2> CREATE A CLOUD </h2>
      <form method="post" action="userValidation.php">

        <label>
          Name (optional):
		     <input type="text" name="name" id="name">
              <?php //the_validation_message('name'); ?>
        </label>

        <label>
          Email:
          <input type="email" name="email" id="email">
            <?php the_validation_message('email'); ?>
        </label>

        <label>
          What's on your mind?
          <textarea name="content" id="content"></textarea>
            <?php the_validation_message('content'); ?>

        </label>

		<fieldset>
            <legend> How are you feeling?</legend>

	            <li><input type="radio" name="mood" id="happy" value="content">
	                <label for="happy">Content</label>
				</li>
	            <li><input type="radio" name="mood" id="upset" value="upset">
	                <label for="upset">Upset</label>
				</li>
	            <li><input type="radio" name="mood" id="disoriented" value="disoriented">
	                <label for="disoriented">Disoriented</label>
				</li>
				<li><input type="radio" name="mood" id="other" value="other">
	                <label for="other">Other</label>
				</li>
				<?php
					the_validation_message('mood');
				?>
        </fieldset>
        <button type="submit" name="button">POST CLOUD <a href= "validation.php"></a></button>

        <!-- <input class= "submitButton" type="submit" value="Submit"><a href= "validation.php"></a> -->

      </form>

      <?php the_results(); // send help ahhhh ?>
    </main>

		<footer class = "footerBar">
			<p>HEAD IN THE CLOUDS © </p>
				<ul>
				<li><a href="./static/documentation.html">Documentation</a></li>
				<li><a href="./static/credits.html">Credits</a></li>
				</ul>
		</footer>

  </body>
</html>
