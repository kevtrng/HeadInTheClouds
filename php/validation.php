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

// Check each field to make sure submitted data is valid. If no boxes are checked, isset() will return false
// function validate() {
//     global $valid;
//     global $val_messages;
//
//     // Initialize reslt
//     $result = true;
//
//     if($_SERVER['REQUEST_METHOD']== 'POST'){
// 		// some spicy regex patterns:
//      	// email: '#^(.+)@([^\.].*)\.([a-z]{2,})$#'
//      	// date: '#^\d{4}/((0[1-9])|(1[0-2]))/((0[1-9])|([12][0-9])|(3[01]))$#'
//
// 		// ---- check email -----/
// 		if(isset($_POST["email"])) {
// 			foreach($_POST as $type => $value) {
// 				if ($type=='email') {
// 					$submitted = $_POST["email"];
// 					$pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
// 					$this_result = preg_match($pattern, $submitted);
// 					$result= $result && $this_result;
// 					//Update message
// 					if($this_result) {
// 						$val_messages[$type]="";
// 					}
// 					else {
// 						$val_messages[$type]="email is not correct format";
// 					}
// 				}
// 			}
// 		}
// 		else {
// 			echo "<p>Something has gone wrong with the form!</p>";
// 		}
//
//
// 	    if(isset($_POST["mood"])){
// 	    // if(isset($_POST["gender"]) && count($_POST["gender"]) == 1){
// 	      	$this_result = true;
// 	    } else {
// 	        $this_result = false;
// 	    }
// 	    $result = $result && $this_result;
//
// 	    if ($this_result == true) {
// 	      $val_messages["mood"] = "";
// 	    } else {
// 	      $val_messages["mood"] = "You're not THAT dead inside. Select a mood.";
// 	    }
// 	    $valid = $result;
//
//
//
//
// 		if(isset($_POST["content"]) == !empty($_POST["content"])){
// 	    // if(!empty($_POST["content"]) && strlen($_POST["content"]) <= 10){
// 	    // if(isset($_POST["content"]) && strlen($_POST["content"]) <= 20){
// 	        $this_result = true;
// 	    } else {
// 	    	$this_result = false;
// 	    }
// 	    $result = $result && $this_result;
//
// 	    if ($this_result) {
// 	        $val_messages["content"] = "";
// 			return;
// 	    } else {
// 			// if this doesn't work, so be it
// 	        // $val_messages["content"] = "Your head isn't that empty. Enter something";
// 			if(empty($_POST["content"])) {
// 				$val_messages["content"] = "Empty.";
// 				return;
// 			}
// 			if(strlen($_POST["content"]) > 10) {
// 				$val_messages["content"] = "Too long.";
// 			}
// 		}
// 		$valid = $result;
// 	}
//
// }

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
