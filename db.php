<?php
define('DB_HOST', 'us-cdbr-east-05.cleardb.net');
define('DB_USER', 'b41182867703ab');
define('DB_PASS', 'a6cb9054');
define('DB_NAME', 'heroku_1c91224e7ae236b');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

//echo 'Connected successfully';

$sql1 = 'SELECT * FROM movies';
$result = mysqli_query($conn, $sql1);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
