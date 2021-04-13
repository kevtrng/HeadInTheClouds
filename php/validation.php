<?php
// Global result of form validation
$valid = false;
// Global array of validation messages. For valid fields, message is ""
$val_messages = Array();


function the_results() {
  global $valid;

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($valid == true){
        header('Location: anotherPage.php' );
        exit();
    }

  }
}


function validater() {
	global $valid;
	global $val_messages;

	if($_SERVER['REQUEST_METHOD']== 'POST') {
		// check email
		if(isset($_POST["email"])) {

			$submitted = $_POST["email"];
			$pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
			$email_res = preg_match($pattern, $submitted);
			//Update message
			if($email_res) {
				$val_messages["email"]="";
			}
			else {
				$val_messages["email"]="email is not correct format";
			}
		}

		if(
			isset($_POST["content"]) &&
			strlen($_POST["content"]) > 0 &&
			strlen($_POST["content"]) <= 50
		) {
			$content_res = true;
			$val_messages["content"] = "";
			echo strlen($_POST["content"]);
		} else {
			$val_messages["content"] = "Must enter 1-50 characters";
			$content_res = false;
		}

		if(isset($_POST["mood"])){
	    // if(isset($_POST["gender"]) && count($_POST["gender"]) == 1){
	      	$mood_res = true;
			$val_messages["mood"] = "";
	    } else {
	        $mood_res = false;
			$val_messages["mood"] = "You're not THAT dead inside. Select a mood.";
	    }

		$valid = $email_res && $content_res && $mood_res;
	}
}

// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type) {

	global $val_messages;

	if($_SERVER['REQUEST_METHOD']== 'POST') {
		if($val_messages[$type] != ""){
			echo "<p class='failure-message'>${val_messages[$type]}</p>";
		}
  }
}
