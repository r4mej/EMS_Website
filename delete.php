<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $servername = "LocalHost";
        $username = "root";
        $password = "password";
        $database = "employeemanagementsystem";
       
        $connection = new mysqli($servername, $username, $password, $database);
       
        $sql = "DELETE FROM employee WHERE id = $id";
        $connection->query($sql);
    }

    header("location: /TRY WEB/index.php");
    exit;
?>
