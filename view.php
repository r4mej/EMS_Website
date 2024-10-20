<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>Employee Management System</title>

</head>
<body>
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

<main>
    <section class="content">
        <div class="container my-5">
            <table class="table">
                <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Salary</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $servername = "LocalHost";
                $username = "root";
                $password = "";
                $database = "employeemanagementsystem";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM employee";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                while ($row = $result->fetch_assoc()) {
                    $empid = isset($row['empid']) ? $row['empid'] : '';
                    $fname = isset($row['name']) ? $row['name'] : '';
                    $mname = isset($row['mname']) ? $row['mname'] : '';
                    $lname = isset($row['lname']) ? $row['lname'] : '';
                    $dob = isset($row['dob']) ? $row['dob'] : '';
                    $salary = isset($row['salary']) ? $row['salary'] : '';
                    $address = isset($row['address']) ? $row['address'] : '';

                    echo "
                  <tr>
                    <td>$empid</td>
                    <td>$fname</td>
                    <td>$mname</td>
                    <td>$lname</td>
                    <td>$dob</td>
                    <td>$salary</td>
                    <td>$address</td>
                  </tr>
                ";
                }

                $connection->close();
                ?>
                </tbody>
            </table>
            <button id="backButton" class="back-button" onclick="window.location.href='home.php'">Back</button>
        </div>
    </section>
</main>



</body>
</html>
