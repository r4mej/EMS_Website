<?php
session_start();
include('conn.php');

if (!isset($_GET['empid'])) {
    header("Location: index.html");
    exit();
}

$empid = $_GET['empid'];
$query = "SELECT * FROM employee WHERE empid = '$empid'";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    $employee = $result->fetch_assoc();
} else {
    echo "<script>alert('Employee not found.');</script>";
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="employeeview.css">
    <style>
        
    </style>
</head>
<body>
    <div class="header">
        <h1>Employee Management System</h1>
        <div class="user-menu">
            <img src="user-logo.png" alt="User Logo">
            <div class="user-menu-content">
                <a href="#"><?php echo $employee['empid']; ?></a>
                <a href="index.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Welcome <?php echo $employee['name']; ?></h1>
        <table class="employee-details">
            <tr>
                <th>First Name:</th>
                <td><?php echo $employee['name']; ?></td>
                <th>Employee ID:</th>
                <td><?php echo $employee['empid']; ?></td>
            </tr>
            <tr>
                <th>Middle Name:</th>
                <td><?php echo $employee['mname']; ?></td>
                <th>Email Address:</th>
                <td><?php echo $employee['email']; ?></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><?php echo $employee['lname']; ?></td>
                <th>Salary:</th>
                <td><?php echo $employee['salary']; ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $employee['address']; ?></td>
                <th>Phone #:</th>
                <td><?php echo $employee['phone']; ?></td>
            </tr>
            <tr>
                <th>Date of Birth:</th>
                <td><?php echo $employee['dob']; ?></td>
                <th>Highest Education:</th>
                <td><?php echo $employee['education']; ?></td>
            </tr>
            <tr>
                <th>Valid ID Type:</th>
                <td><?php echo $employee['id']; ?></td>
                <th>Valid ID #:</th>
                <td><?php echo $employee['vid']; ?></td>
            </tr>
        </table>
        <a href="index.php" class="back-button">Back to login</a>
    </div>
    <div class="footer">
        <p>Employee Management System. All rights reserved.</p>
    </div>
</body>
</html>
