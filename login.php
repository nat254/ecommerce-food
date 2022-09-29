<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login-form">
        <div class="login_section">
        <h1>Log In</h1>
        <form action="loginQuery.php" method="POST">
            <p>User Name</p>
            <input type="text" name="userName" placeholder="username" required>

            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
            
            <p><a href="" class="forgot">Forgot password?</a></p>

            <button type="submit" name="Login">Log in</button>

            <p>Don't have an account? <a href="registration.php" class="register">Register Here</a></p>
            
        </form>
        </div>
    </div>
</body>
</html>