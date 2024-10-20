<?php
session_start();
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

   
    $username = $connection->real_escape_string($username);
    $password = $connection->real_escape_string($password);

   
    $query = "SELECT * FROM login WHERE username = '$username'";
    $result = $connection->query($query);


    $query1 = "SELECT * FROM employee WHERE email = '$username'";
    $result1 = $connection->query($query1);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['password'] == $password) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            header("Location: error.php?error=invalid_password");
            exit();
        }
    } else if ($result1->num_rows > 0) {
        $employee = $result1->fetch_assoc();
        if ($employee['empid'] == $password) {
            $_SESSION['username'] = $username;
            header("Location: employee_view.php?empid=$password");
            exit();
        } else {
            header("Location: error.php?error=invalid_empid");
            exit();
        }
    } else {
        header("Location: error.php?error=invalid_credentials");
        exit();
    }

    $connection->close();
} else {
    header("Location: index.php");
    exit();
}
?>
