<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="guest.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background:#334257;
            color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 20px;
        }

        .header h1 {
            margin: 0;
        }

        .user-menu {
            position: relative;
            display: inline-block;
        }

        .user-menu img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
        }

        .user-menu-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            min-width: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .user-menu-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .user-menu-content a:hover {
            background-color: #ddd;
        }

        .user-menu:hover .user-menu-content {
            display: block;
        }

        .container {
            padding: 20px;
        }

        .button-container {
            margin-top: 20px;
        }

        .button-container button {
            background-color: #548CA8; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: #022E57;
        }

        .footer {
            background: #334257;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>EMS</title>
</head>
<body>
<div class="header">
    <h1>Employee Management System</h1>
    <div class="user-menu">
        <a> Guest</a>
        <img src="user-logo.png" alt="User Logo">
        <div class="user-menu-content">
            <a href="index.php">Login</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="button-container">
        <button onclick="alert('LOG IN TO VIEW THIS PART')">Add</button>
        <button onclick="alert('LOG IN TO VIEW THIS PART')">Update</button>
        <button onclick="alert('LOG IN TO VIEW THIS PART')">View</button>
        <button onclick="alert('LOG IN TO VIEW THIS PART')">Delete</button>
    </div>
</div>

<div class="footer">
    <p>Employee Management System. All rights reserved.</p>
</div>
</body>
</html>
