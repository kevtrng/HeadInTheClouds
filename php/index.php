<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// global array of posts, to be fetched from database
$comments = [];


require_once 'database/database.php';
require_once 'utility.php';

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();
// submit comment to database
handle_form_submission();


// Get comments from database
get_comments(); 

// include the template to display the page
include '../anotherPage.php';