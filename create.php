<?php
$servername = "LocalHost";
$username = "root";
$password = "";
$database = "employeemanagementsystem";


$connection = new mysqli($servername, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$employee_id = random_int(00000, 99999);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $employee_id = $_POST['employee_id'];
    $email_address = $_POST['email_address'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $highest_education = $_POST['highest_education'];
    $valid_id_type = $_POST['valid_id_type'];
    $valid_id_number = $_POST['valid_id_number'];

   
    $sql = "INSERT INTO employee (empid, name, mname, lname, address, dob, email, salary, phone, education, id, vid)
    VALUES ('$employee_id', '$first_name', '$middle_name', '$last_name', '$address', '$date_of_birth', '$email_address', '$salary', '$phone', '$highest_education', '$valid_id_type', '$valid_id_number')";

 
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}


$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="home.css">-->
    <link rel="stylesheet" href="create.css">
    <title>Add Employee</title>
</head>
<body>
<div class="header">
    <h1>Employee Management System</h1>
   <!-- <a href="home.php" class="back-button">
        <img src="home.png" alt="Back">-->
    </a> 
    <div class="user-menu">
        <img src="user-logo.png" alt="User Logo">
        <div class="user-menu-content">
            <a href="#">admin</a>
            <a href="index.php">Logout</a>
        </div>
    </div>
</div>

<div class="container">
    <h2>Add Employee Details</h2>
    <form method="post" action="">
        <div class="form-row">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form-row">
            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" required>
        </div>
        <div class="form-row">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-row">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-row">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
        </div>
        <div class="form-row">
            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" value="<?php echo $employee_id; ?>" readonly>
        </div>
        <div class="form-row">
            <label for="email_address">Email Address:</label>
            <input type="email" id="email_address" name="email_address" required>
        </div>
        <div class="form-row">
            <label for="salary">Salary:</label>
            <select id="salary" name="salary" required>
                <option value="Grade 1 (13K)">Grade 1 (13K)</option>
                <option value="Grade 2 (14K)">Grade 2 (14K)</option>
                <option value="Grade 3 (15K)">Grade 3 (15K)</option>
                <option value="Grade 4 (16K)">Grade 4 (16K)</option>
                <option value="Grade 5 (17K)">Grade 5 (17K)</option>
            </select>
        </div>
        <div class="form-row">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-row">
            <label for="highest_education">Highest Education:</label>
            <select id="highest_education" name="highest_education" required>
                <option value="Elem UnderGrad">Elem UnderGrad</option>
                <option value="Elem Grad">Elem Grad</option>
                <option value="HS UnderGrad">HS UnderGrad</option>
                <option value="HS Grad">HS Grad</option>
                <option value="SHS UnderGrad">SHS UnderGrad</option>
                <option value="SHS Grad">SHS Grad</option>
                <option value="College UnderGrad">College UnderGrad</option>
                <option value="College Grad">College Grad</option>
            </select>
        </div>
        <div class="form-row">
            <label for="valid_id_type">Valid ID Type:</label>
            <select id="valid_id_type" name="valid_id_type" required>
                <option value="PhilSys">PhilSys</option>
                <option value="Postal">Postal</option>
                <option value="UMID">UMID</option>
                <option value="Passport">Passport</option>
                <option value="SSS">SSS</option>
                <option value="ePhiIID">ePhiIID</option>
                <option value="PRC">PRC</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-row">
            <label for="valid_id_number">Valid ID Number:</label>
            <input type="text" id="valid_id_number" name="valid_id_number" required>
        </div>
        <div class="form-row">
            <input type="submit" value="Add Details">
        </div>
        <div class="form-row">
            <input type="submit" value="Back" onclick="window.location.href='home.php';">
        </div>
    </form>
</div>


</body>
</html>
