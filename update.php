<?php

$servername = "LocalHost";
$username = "root";
$password = "password";
$database = "employeemanagementsystem";


$connection = new mysqli($servername, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$sql = "SELECT * FROM employee";
$result = $connection->query($sql);

if (!$result) {
    die("Query failed: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<div class="header">
    <h1>Employee Management System</h1>
   <!-- <a href="home.php" class="back-button">
        <img src="home.png" alt="Back">
    </a>-->
    <div class="user-menu">
        <img src="user-logo.png" alt="User Logo">
        <div class="user-menu-content">
            <a href="#">admin</a>
            <a href="index.php">Logout</a>
        </div>
    </div>
</div>
    <table border="1">
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Education</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['empid'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['mname'] ?></td>
            <td><?= $row['lname'] ?></td>
            <td><?= $row['dob'] ?></td>
            <td><?= $row['salary'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['education'] ?></td>
            <td>
            <button class="button" onclick="location.href='updatedata.php?id=<?= $row['empid'] ?>'">Update</button>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="home.php" class="button">Back</a>
</body>
</html>

<?php
$connection->close();
?>
