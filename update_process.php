<?php

$servername = "LocalHost";
$username = "root";
$password = "1wocamalS!";
$database = "employeemanagementsystem";


$connection = new mysqli($servername, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empid = $_POST['empid'];
    $name = $_POST['name'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $education = $_POST['education'];
   

    $sql = "UPDATE employee SET name='$name', mname='$mname', lname='$lname', dob='$dob', salary='$salary', address='$address', phone='$phone', email='$email', education='$education' WHERE empid='$empid'";

    if ($connection->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $connection->error;
    }

    $connection->close();

    header("Location: update.php");
    exit();
}
?>
