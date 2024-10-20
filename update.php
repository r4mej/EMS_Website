<?php
$servername = "LocalHost";
$username = "root";
$password = "password";
$database = "employeemanagementsystem";

$connection = new mysqli($servername, $username, $password, $database);



$empid = "";// yaw labti isabon lng cguro ang name was sd ko kabalo sa function katulgon nko 

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

if ( $_SERVER['REQUEST_METHOD'] == 'GET'){

    if( !isset($_GET["id"])){
        header("location: index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM employee WHERE id = $id";// ambot usa polos sa id usabon pni
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row){
        header("location: index.php");
        exit;
    }

    $fname = $row["fname"];
    $mname = $row["mname"];
    $lname = $row["lname"];
    $address = $row["address"];
    $dob = $row["dob"];
    $empid = $row["empid"];
    $email = $row["email"];
    $salary = $row["salary"];
    $phone = $row["phone"];
    $highed = $row["highed"];
    $vid = $row["vid"];
    $id = $row["id"];

}
else{

    $id = "";// yaw labti isabon lng cguro ang name was sd ko kabalo sa function katulgon nko 

    $fname = $row["fname"];
    $mname = $row["mname"];
    $lname = $row["lname"];
    $address = $row["address"];
    $dob = $row["dob"];
    $empid = $row["empid"];
    $email = $row["email"];
    $salary = $row["salary"];
    $phone = $row["phone"];
    $highed = $row["highed"];
    $vid = $row["vid"];
    $id = $row["id"];

    do{

        if (  empty($fname) || empty($fname) || empty($mname) || empty($mnamelname) || empty($address) || empty($dob) || empty($empid) || empty($email) || empty($salary) || empty($phone) || empty($highed) || empty($vid) || empty($id)){
            $errorMessage = "All the Feilds are Required";
            break;
        

        }

        $sql = "UPDATE clients" .
        "SET fname='$fname', mname='$mname', lname='$lname', address='$address', dob='$don', empid='$empid', email='$email', salary='$salary', phone='$phone', highed='$highed', vid='$vid', id='$id'" .
        "WHERE id = $id";// kni na id was ko kabalo unsa ni cya

        $result = $connection->query($sql);

        if (!$result){
            $errorMessage = "Invalid Query:" . $connection->error;
            break;
        }

        $successMessage = "Record Updated Successfully";

        header("Location: /TRY WEB/index.php");
        exit;

        }while(true);
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
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                 <div class="rows mb-3">
                   <label class="col-sm-3 col-form-label"> First Name</label>
                 <div class="col-sm-6">
           <input type="text" id class="form-control" name="fname" value="<?php echo $fname; ?>">
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
          <a class="btn btn-outline-primary" href="/TRY WEB/index.php" role="button">Cancel</a>
         </div>
    </div>
 </form>
    </div>

</body>
</html>
