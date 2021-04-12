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
      <h2> USER VALIDATION </h2>
      <form method="post" action="userValidation.php">

        <label>
          Name (optional): 
		     <input type="text" name="name" id="name">
              <?php //the_validation_message('name'); ?>
        </label>

        <label>
          Email:
          <input type="text" name="email" id="email">
            <?php the_validation_message('email'); ?>
        </label>

        <fieldset>
            <legend> Please select your gender:</legend>

              <input type="radio" name="gender[]" id="male" value="male">
                <label for="male">Male</label>

              <input type="radio" name="gender[]" id="female" value="female">
                <label for="female">Female</label>

              <input type="radio" name="gender[]" id="other" value="other">
                <label for="other">Other</label>

	            <input type="radio" name="gender[]" id="anon" value="anon">
                <label for="anon">Prefer not to say</label>
              <?php
              the_validation_message('gender');
              ?>

        </fieldset>

        <label>
          Enter your Head In The Cloud Thoughts:
          <textarea name="comment"></textarea>
        </label>

        <button type="submit" name="button">POST CLOUD <a href= "validation.php"></a></button>


        <!-- <input class= "submitButton" type="submit" value="Submit"><a href= "validation.php"></a> -->

      </form>

      <?php the_results(); ?>
    </main>



  </body>
</html>
