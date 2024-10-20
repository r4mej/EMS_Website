<?php
// Include the connection file
include 'conn.php';

$fname ="";
$mname ="";
$lname ="";
$address ="";
$dob ="";
$empid ="";
$email ="";
$salary ="";
$phone ="";
$highed ="";
$vid ="";
$id ="";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $empid = $_POST['empid'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $highed = $_POST['highed'];
    $vid = $_POST['vid'];
    $id = $_POST['id'];

    do {
        if ( empty($fname) || empty($mname) || empty($lname) || empty($address) || empty($dob) || empty($empid) || empty($email) || empty($salary) || empty($phone) || empty($highed) || empty($vid) || empty($id)) {
            $errorMessage = "All the Fields are Required";
            break;
        }

        $sql = "INSERT INTO clients (fname, mname, lname, address, dob, empid, email, salary, phone, highed, vid, id)
                VALUES ('$fname', '$mname', '$lname', '$address', '$dob', '$empid', '$email', '$salary', '$phone', '$highed', '$vid', '$id')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
        }

        $fname ="";
        $mname ="";
        $lname ="";
        $address ="";
        $dob ="";
        $empid ="";
        $email ="";
        $salary ="";
        $phone ="";
        $highed ="";
        $vid ="";
        $id ="";

        $successMessage = "Employee added Successfully";

        header("location: /EMPLOYEE WEBSITE/index.php");
        exit;

    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></link>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>    
<style>
/* Body styles for a clean and professional look */
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  color: #333;
}

/* Center the container horizontally */
.container {
  max-width: 700px;
  margin: 30px auto;
  text-align: center;
  padding: 30px;
  background-color: #f5f5f5;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Form title with clear styling and optional underline */
h2 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 1.2em;
  font-weight: bold;
  border-bottom: 1px solid #ddd;
  padding-bottom: 5px;
}

/* Alert messages with professional color scheme and rounded corners */
.alert {
  margin-bottom: 15px;
  border-radius: 4px;
  padding: 10px 15px;
}
.alert-warning {
  background-color: #ffc107;
  color: #333;
}
.alert-success {
  background-color: #4caf50;
  color: #fff;
}

/* Form layout with improved spacing and visual hierarchy */
.row {
  margin-bottom: 15px;
  display: flex;
  /* Added justify-content: center to center the input fields  */
  justify-content: center;
}

.col-sm-3 {
  flex: 0 0 20%;
  text-align: center;
  font-weight: bold;
}

.col-sm-6 {
  flex: 0 0 80%;
}

/* Input fields with clean styles and focus highlighting */
.form-control {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 8px 12px;
  font-size: 0.9em;
  transition: border-color 0.3s ease-in-out;
}

.form-control:focus {
  border-color: #4caf50;
}

/* Buttons with professional style and hover effect */
.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 0.9em;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.btn-primary {
  background-color: #4caf50;
}
.row {
  margin-bottom: 15px;
  display: flex;
  justify-content: center; /* This line centers the input fields horizontally  */
}
.rows input {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
}



</style>                                                                                                                                                                                                               
<body> 
    <div class="container my-S">
         <h2>Add Employee</h2>

         <?php
        if ( !empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }

         ?>
             <form method="post">
                 <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label"> First Name</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="fname" value="<?php echo $fname; ?> ">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Middle Name</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="mname" value="<?php echo $mname; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Last Name</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="lname" value="<?php echo $lname; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Address</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="address" value="<?php echo $address; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Date of Birth</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="dob" placeholder="DD-MM-YYYY" value="<?php echo $dob; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Employee ID</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="empid" value="<?php echo $empid; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Email Address</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="emailadd" value="<?php echo $email; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Salary</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="salary" value="<?php echo $salary; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Phone No.</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="phoneno" value="<?php echo $phone; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Highest Education</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="highed" value="<?php echo $highed; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Valid ID Type</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="valid_id_type" value="<?php echo $vid; ?>">
         </div>
    </div>
    <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label">Valid ID</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="valid_id" value="<?php echo $id; ?>">
         </div>
    </div>

    <?php 
    if ( !empty($successMessage)){
        echo"
<div class='row mb-3'
     <div class='offset-sm-3 col-sm-6'>
         <div class='alert alert-success alert-dismissible fade show' role='alert'>
             <strong>$successMessage</strong>
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
         </div>
     </div>
 </div>
        ";
    }

    ?>

    <div class="rows mb-3">
                   <div class="offset-sm-3 d-grid">
           <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                 <div class="col-sm-3 d-grid">
          <a class="btn btn-outline-primary"  href="/EMPLOYEE WEBSITE/home.php" role="button">Cancel</a>
         </div>
    </div>
 </form>
    </div>

</body>
</html>
