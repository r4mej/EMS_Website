<?php

$servername = "LocalHost";
$username = "root";
$password = "1wocamalS!";
$database = "employeemanagementsystem";

$connection = new mysqli($servername, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
