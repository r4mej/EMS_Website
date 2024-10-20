<?php
// conn.php
$servername = "LocalHost";
$username = "root";
$password = "password";
$database = "employeemanagementsystem";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
