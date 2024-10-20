<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1 class="Login-title">Login</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="loginUsername">Username:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
            </div>
            
            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
            </div>

            <div class="form-group">
                <button type="button1" >Login</button>
            </div>
            
            
        </form>
    </div>
</body>
</html>
