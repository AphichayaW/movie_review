<?php
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

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
