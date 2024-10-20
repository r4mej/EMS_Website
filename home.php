<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMS Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></link>
</head>
<style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #e0f2ff;
      }
      
      header {
        background-color: #0C359E;
        padding:2rem;
        display: flex;
        justify-content: space-between;
        
      }
      header a {
        color:white;
        font-size: 20px;
      }

      
      h1 {
        
        margin: 0;
        color:white;
      }
      h2{
        color:black;
        font-size: 50px;
      }
      
      nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      
      nav li {
        display: inline-block;
        margin-right: 1rem;
      }
      
      main {
        display: flex;
      }
      
      .sidebar {
        width: 20%;
        padding: 1rem;
        border-right: 1px solid #ddd;
        background-color:#4682A9;
      }
      .sidebar li {
        color:white;
      }
      .sidebar a{
        color: white;
      }
      
      .content {
        flex: 1;
        padding: 1rem;
      }
      
      h2 {
        margin-bottom: 1rem;
        text-align: center;
      }
      
      .content ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      
      .content li {
        margin-bottom: 0.5rem;
      }
      .contaner {
        color:white;
      }
      .content a{
        color: white;
      }
      
      .content li a {
        text-decoration: none;
        color: black;
      }
      
      .content li span {
        font-size: 0.8rem;
        color: #999;
      }
      
      .chart-container {
        height: 200px;
        /* Adjust height as needed for your chart library */
      }
      
</style>
<body>
  <header>
    <h1>Employee Dashboard</h1>
    <nav>
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="content">
        <div class="container my-S">
            <h2>List of Employee's</h2>
            <a href="/EMPLOYEE WEBSITE/create.php" role="button">Add Employee</button>
            <br></div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>DOB</th>
                        <th>Salary</th>
                        <th>Address</th>
                        <th>
                          
                        </th>
                        <th>Action</th>
                    </tr>
                        
                </thead>
                <tbody>
                <?php
                    $servername = "LocalHost";
                    $username = "root";
                    $password = "1wocamalS!";
                    $database = "employeemanagementsystem";
                   
                    $connection = new mysqli($servername, $username, $password, $database);
    
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
                    
                    $sql = "SELECT * FROM employee";
                    $result = $connection->query($sql);
    
                    if (!$result){
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
                        $action = isset($row['action']) ? $row['action'] : '';
                        
                        echo "
                            <tr>
                                <td>$empid</td>
                                <td>$fname</td>
                                <td>$mname</td>
                                <td>$lname</td>
                                <td>$dob</td>
                                <td>$salary</td>
                                <td>$address</td>
                                <td>$action</td>
                                <td>
                                <a class='btn btn-primary' href='/EMPLOYEE WEBSITE/update.php?action=$action'>Edit</a>
                                <a class='btn btn-danger' href='/EMPLOYEE WEBSITE/delete.php?action=$action'>Delete</a>
                                </td>
                            </tr>
                        "; 
                    }
                    
                    ?>
                   
                    </tbody>
            </table>
        </div>
        
      </div>
   </section>
                </tbody>
        </div>
    </section>
  </main>
</body>
</html>
