<?php
require 'config.php';

// Should return a PDO
function db_connect() {

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME ;
    $user = DBUSER; 
    $pass = DBPASS;

    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}

// Handle form submission
function handle_form_submission() {
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // TODO
    if(isset($_POST['email']) && isset($_POST['mood']) && isset($_POST['comment'])) {

      $sql = 'INSERT INTO comments (email, mood, date, commentText) VALUES(:email, :mood, :date, :comment) ';

      $statement = $pdo->prepare($sql); 


      $statement->bindValue(':email', $_POST["email"]);
      $statement->bindValue(':mood', $_POST["mood"]);
      $statement->bindValue(':comment', $_POST["comment"]);
      $statement->bindValue(':date', date('Y-m-d'));

      // Bind the remaining 3 attributes using the same method
      $statement->execute();

    }
    
  }
}

// Get all comments from database and store in $comments
function get_comments() {
  global $pdo;
  global $comments;

  //TODO

  $sql = 'SELECT * FROM comments ORDER BY ID DESC';

  $result = $pdo->query($sql);
  while($row = $result->fetch()){
    $comments[] = $row;
  }

}

// Get unique email addresses and store in $commenters
function get_commenters() {
  global $pdo;
  global $commenters;

  //TODO
    $query = "SELECT * FROM comments ORDER BY id DESC";
    // $statement = $pdo->prepare($query);
    $result = $pdo->query($query);

    while($row = $result->fetch()) {
        if(!(in_array($row["email"], $commenters))) {
            array_push($commenters, $row["email"]);
        }
    }
    // print_r( $comments);
}
