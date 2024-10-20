<?php

$servername = "LocalHost";
$username = "root";
$password = "";
$database = "employeemanagementsystem";


$connection = new mysqli($servername, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$employeeID = $_GET['id'];
$sql = "SELECT * FROM employee WHERE empid='$employeeID'";
$result = $connection->query($sql);

if (!$result) {
    die("Query failed: " . $connection->error);
}

$row = $result->fetch_assoc();

if (!$row) {
    die("Employee not found");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <link rel="stylesheet" href="upd.css">
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

<div class="container">
    <h2>Update Employee Details</h2>
    <form action="update_process.php" method="post">
        <input type="hidden" name="empid" value="<?= $row['empid'] ?>">

        <div class="form-row">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="name" value="<?= $row['name'] ?>">
        </div>

        <div class="form-row">
            <label for="middleName">Middle Name:</label>
            <input type="text" id="middleName" name="mname" value="<?= $row['mname'] ?>">
        </div>

        <div class="form-row">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lname" value="<?= $row['lname'] ?>">
        </div>

        <div class="form-row">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?= $row['dob'] ?>">
        </div>

        <div class="form-row">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?= $row['address'] ?>">
        </div>

        <div class="form-row">
            <label for="empID">Employee ID:</label>
            <input type="text" id="empID" name="empid" value="<?= $row['empid'] ?>" readonly>
        </div>

        <div class="form-row">
            <label for="salary">Salary:</label>
            <select id="salary" name="salary">
                <option value="Grade 1 (13K)" <?= $row['salary'] == "Grade 1 (13K)" ? "selected" : "" ?>>Grade 1 (13K)</option>
                <option value="Grade 2 (14K)" <?= $row['salary'] == "Grade 2 (14K)" ? "selected" : "" ?>>Grade 2 (14K)</option>
                <option value="Grade 3 (15K)" <?= $row['salary'] == "Grade 3 (15K)" ? "selected" : "" ?>>Grade 3 (15K)</option>
                <option value="Grade 4 (16K)" <?= $row['salary'] == "Grade 4 (16K)" ? "selected" : "" ?>>Grade 4 (16K)</option>
                <option value="Grade 5 (17K)" <?= $row['salary'] == "Grade 5 (17K)" ? "selected" : "" ?>>Grade 5 (17K)</option>
            </select>
        </div>

        <div class="form-row">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?= $row['phone'] ?>">
        </div>

        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $row['email'] ?>">
        </div>

        <div class="form-row">
            <label for="education">Highest Education:</label>
            <select id="education" name="education">
                <option value="Elem UnderGrad" <?= $row['education'] == "Elem UnderGrad" ? "selected" : "" ?>>Elem UnderGrad</option>
                <option value="Elem Grad" <?= $row['education'] == "Elem Grad" ? "selected" : "" ?>>Elem Grad</option>
                <option value="HS UnderGrad" <?= $row['education'] == "HS UnderGrad" ? "selected" : "" ?>>HS UnderGrad</option>
                <option value="HS Grad" <?= $row['education'] == "HS Grad" ? "selected" : "" ?>>HS Grad</option>
                <option value="SHS UnderGrad" <?= $row['education'] == "SHS UnderGrad" ? "selected" : "" ?>>SHS UnderGrad</option>
                <option value="SHS Grad" <?= $row['education'] == "SHS Grad" ? "selected" : "" ?>>SHS Grad</option>
                <option value="College UnderGrad" <?= $row['education'] == "College UnderGrad" ? "selected" : "" ?>>College UnderGrad</option>
                <option value="College Grad" <?= $row['education'] == "College Grad" ? "selected" : "" ?>>College Grad</option>
            </select>
        </div>

        <div class="form-row">
            <label for="validIDType">Valid ID Type:</label>
            <select id="validIDType" name="valid_id_type">
                <option value="Postal" <?= $row['id'] == "Postal" ? "selected" : "" ?>>Postal</option>
                <option value="PhilSys" <?= $row['id'] == "PhilSys" ? "selected" : "" ?>>PhilSys</option>
                <option value="Passport" <?= $row['id'] == "Passport" ? "selected" : "" ?>>Passport</option>
                <option value="Driver's License" <?= $row['id'] == "Driver's License" ? "selected" : "" ?>>Driver's License</option>
            </select>
        </div>

        <div class="form-row">
            <label for="validIDNumber">Valid ID Number:</label>
            <input type="text" id="validIDNumber" name="valid_id_number" value="<?= $row['vid'] ?>">
        </div>
        <div class="form-row">
            <input type="submit" value="Update">
        </div>
        <div class="form-row">
            <input type="submit" value="Back" onclick="window.location.href='home.php';">
        </div>

     


</body>
</html>

<?php
$connection->close();
?>

