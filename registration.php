
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div class="registration">
        <div class="reg">
        <h1>Registration</h1>
        <form action="process_registration.php" method="POST">
            <p>First Name:</p>
            <input type="text" name="firstname" placeholder="First name" required>
            <p>Second Name:</p>
            <input type="text" name="secondname" placeholder="Second name" required>
            <p>Email:</p>
            <input type="email" name="email" placeholder="Email" required>
            <p>UserName:</p>
            <input type="text" name="username" placeholder="userName" required>
            <p>Password:</p>
            <input type="password" name="password" placeholder="Password" required>
            <p>Confirm Password:</p>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required>

            <button type="submit" name="submit">Register</button>
            <p>Have an account? <a href="login.php" class="login">Login Here</a></p>

        </form>
        </div>
    </div>
</body>
</html>
<?php if(isset($_SESSION['message'])): ?>
     <div class="msg">
         <?php
             echo $_SESSION['message'];
             unset($_SESSION['message']);
          ?>
     </div>
<?php endif ?>
