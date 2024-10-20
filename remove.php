<?php
$servername = "LocalHost";
$username = "root";
$password = "1wocamalS!";
$database = "employeemanagementsystem";


$connection = new mysqli($servername, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$employee = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['search'])) {
        $employee_id = $_POST['employee_id'];

        
        $sql = "SELECT * FROM employee WHERE empid = '$employee_id'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $employee = $result->fetch_assoc();
        } else {
            echo "No record found for Employee ID: $employee_id";
        }
    } elseif (isset($_POST['delete'])) {
        $employee_id = $_POST['employee_id'];

       
        $sql = "DELETE FROM employee WHERE empid = '$employee_id'";

        if ($connection->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}


$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="delete.css">
    <title>Remove Employee</title>
    <div class="header">
    <h1>Employee Management System</h1>
    <div class="user-menu">
        <img src="user-logo.png" alt="User Logo">
        <div class="user-menu-content">
            <a href="#">admin</a>
            <a href="index.php">Logout</a> 
        </div>
    </div>
</div>
</head>
<body>

<div class="container">
    <h2>Search and Remove Employee</h2>
    <form method="post" action="">
        <label for="employee_id">Search by Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" value="<?php echo isset($employee['empid']) ? $employee['empid'] : ''; ?>"><br><br>
        <input type="submit" name="search" value="Search">
        <button type="button" onclick="window.location.href='peek.php'">View</button> 
        <button type="button" onclick="window.location.href='home.php'">Back</button>
    </form>
    <?php if ($employee): ?>
        <form method="post" action="">
            <input type="hidden" name="employee_id" value="<?php echo $employee['empid']; ?>">
            <p>Employee ID: <?php echo $employee['empid']; ?></p>
            <p>Name: <?php echo $employee['name']; ?></p>
            <p>Middle Name: <?php echo $employee['mname']; ?></p>
            <p>Last Name: <?php echo $employee['lname']; ?></p>
            <p>Address: <?php echo $employee['address']; ?></p>
            <p>Contact #: <?php echo $employee['phone']; ?></p>
            <p>Date of Birth: <?php echo $employee['dob']; ?></p>
            <p>Salary: <?php echo $employee['salary']; ?></p>
            <input type="submit" name="delete" value="Delete">
            <button type="button" onclick="window.location.href='index.php'">Back</button>
        </form>
    <?php endif; ?>
</div>



</body>
</html>
