<?php
// db.php
$host = 'db';
$db   = 'mydatabase';
$user = 'myuser';
$pass = 'mypassword';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
