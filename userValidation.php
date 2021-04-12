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
  </head>
  <body>
    <h1> HEAD IN THE CLOUDS </h1>


    <main>
      <h1> USER VALIDATION </h1>
      <form method="post" action="userValidation.php">

        Name (optional):
		<input type="text" name="name" id="name">
              <?php //the_validation_message('name'); ?>

        Email:
          <input type="text" name="email" id="email">
            <?php the_validation_message('email'); ?>

        <label>
          Enter your Head In The Cloud Thoughts:
          <textarea name="content"></textarea>
        </label>
		<?php the_validation_message('content'); ?>

		<fieldset>
            <legend> How are you feeling?</legend>

              <input type="radio" name="mood" id="content" value="content">
                <label for="male">Content</label>

              <input type="radio" name="mood" id="upset" value="upset">
                <label for="female">Upset</label>

              <input type="radio" name="mood" id="disoriented" value="disoriented">
                <label for="other">Disoriented</label>

			  <input type="radio" name="mood" id="other" value="other">
                <label for="anon">Other</label>
              <?php
              the_validation_message('mood');
              ?>
        </fieldset>
        <button type="submit" name="button">POST CLOUD <a href= "validation.php"></a></button>

        <!-- <input class= "submitButton" type="submit" value="Submit"><a href= "validation.php"></a> -->

      </form>

      <?php the_results(); ?>
    </main>



  </body>
</html>
