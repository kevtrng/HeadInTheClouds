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

	</head>
	<body>
		<form action="" method="">
			<input type="submit" value="Generate"/>
		</form>
		<?php generateRand()?>
	</body>
</html>
