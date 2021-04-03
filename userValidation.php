 <?php 
  // error reporting
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Import functions
  require_once('./php/validation.php');

  // Validate form submission
  validate();
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

        Name: <input type="text" name="name" id="name">
              <?php the_validation_message('name'); ?>



        Email: 
          <input type="text" name="email" id="email">
            <?php the_validation_message('email'); ?>


        <fieldset>
            <legend> Please select your gender:</legend>

              <input type="checkbox" name="gender[]" id="male" value="male">
                <label for="male">Male</label>

              <input type="checkbox" name="gender[]" id="female" value="female">
                <label for="female">Female</label>

              <input type="checkbox" name="gender[]" id="other" value="other">
                <label for="other">Other</label>

          <!-- Display validation message checkbox group -->
              <?php 
              the_validation_message('gender'); 
              ?>

        </fieldset>

        <input class= "submitButton" type="submit" value="Submit"><a href= "validation.php"></a>

      </form>

      <?php the_results(); ?>
    </main>



  </body>
</html>




