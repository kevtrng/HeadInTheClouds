<?php
// Global result of form validation
$valid = false;
// Global array of validation messages. For valid fields, message is ""
$val_messages = Array();


function the_results()
{
  global $valid;

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($valid == true){
        header('Location: anotherPage.php' );
        exit();
    }

  }
}






// Check each field to make sure submitted data is valid. If no boxes are checked, isset() will return false
function validate()
{
    global $valid;
    global $val_messages;

    // Initialize result
    $result = true;

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
      // Use these patterns to check email and date, or come up with your own.
      // email: '#^(.+)@([^\.].*)\.([a-z]{2,})$#'
      // date: '#^\d{4}/((0[1-9])|(1[0-2]))/((0[1-9])|([12][0-9])|(3[01]))$#'

      // Check if form in correct format
      if(isset($_POST["email"]))
      {

        // Loop through POST
        foreach($_POST as $type => $value)
        {

          if ($type=='email')
          {

              $submitted = $_POST["email"];
              $pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';

              $this_result = preg_match($pattern, $submitted);

              $result= $result && $this_result;

              //Update message
              if($this_result == true) {$val_messages[$type]="";}
              else {$val_messages[$type]="email is not correct format";}

          }


        }// end of loop through POST

      } // end of check for form format
      else
      {
        echo "<p>Something has gone wrong with the form!</p>";
      }

      /**
       * Write PHP code to validate the animals checkbox group here
       */

    if(isset($_POST["gender"])){
    // if(isset($_POST["gender"]) && count($_POST["gender"]) == 1){
      $this_result = true;
      } else {
        $this_result = false;
      }
    $result = $result && $this_result;

    if ($this_result == true) {
      $val_messages["gender"] = "";
    } else {
      $val_messages["gender"] = "please select your gender";
    }
    $valid = $result;
  }

    if(isset($_POST["name"]) == !empty($_POST["name"])){
        $this_result = true;
    } else {
      $this_result = false;
    }
    $result = $result && $this_result;

    if ($this_result == true) {
        $val_messages["name"] = "";
    } else {
        $val_messages["name"] = "Please enter name";
  }
  $valid = $result;





}

// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type) {

  global $val_messages;

  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    if($val_messages[$type] != ""){
      echo "<p class='failure-message'>${val_messages[$type]}</p>";
    }



    //inside the <p> tag display, display the message by accessing the array: ${val_messages[$type]}

  }
}
