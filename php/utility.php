<?php
// require "../database/database.php";
function get_comments() {
  global $pdo;
  global $comments;

  //TODO

  $sql = "SELECT * FROM comments ORDER BY ID DESC";

  $result = $pdo->query($sql);
  while($row = $result->fetch()){
    $comments[] = $row;
  }

}
function showComments() {
	global $comments;
	get_comments();
	foreach($comments as $comment) {
		// echo $comment["commentText"];
		echo "fuck";
	}
}
?>