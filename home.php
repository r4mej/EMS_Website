<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'admin'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>EMS</title>
</head>
<body>
<div class="header">
    <h1>Employee Management System</h1>
    <div class="user-menu">
        <img src="user-logo.png" alt="User Logo">
        <div class="user-menu-content">
            <a href="#"><?php echo $username; ?></a>
            <a href="index.php">Logout</a>
        </div>
    </div>
</div>

<div class="container">
    <h2>Make a Difference in Each Day </h2>
    <h8>"Be the reason for your own success, excel with your skills, and break the limits."</h8>
    <div class="button-container">
        <button onclick="create()">Add</button>
        <button onclick="update()">Update</button>
        <button onclick="view()">View</button>
        <button onclick="remove()">Delete</button>
    </div>
</div>

<div class="footer">
    <p>Employee Management System. All rights reserved.</p>
</div>

<script src="home.js"></script>
</body>
</html>
