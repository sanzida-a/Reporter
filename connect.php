<?php
$server = "localhost";
$user = "id7917824_sanzi";
$password = "(Adiz db)";
$database = "id7917824_final";
// Create connection
$conn = new mysqli($server, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>