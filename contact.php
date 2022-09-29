<?php
session_start();

if (!isset($_SESSION['clientLoggedIn'])) {
	header('Location:login.php');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="nav">
        <a href="index1.php">Home</a>
        <a href="menu1.php" >Menu</a>
        <a href="contact.php" class="active">Contact</a>
        <a href="about.html">About</a>
        <a href="profile.php"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName'];?></a>
        
    </div>
    <div class="wrapper">
         <h1>Get in touch</h1>
         <p>Want to get in touch? Feel free to drop some feeback.<br>
            Here's how to reach us...<br></p>

        <div class="contact_box">
            <div class="box1">

                <h3>Leave some feedback.</h3>
                <form action="process_contact.php" method="POST">
                    <div class="row_input">
                        <div class="input_group">
                            <label for="Name">User Name</label>
                            <input type="text" name="name" placeholder="username">
                        </div>
                        <div class="input_group">
                            <label for="Phone">Phone</label>
                            <input type="text" name="phoneNo" placeholder="0712 356 789">
                        </div>
                    </div>
                    <div class="row_input">
                    <div class="input_group">
                        <label for="Email">Email</label>
                        <input type="text" name="email" placeholder="Jd@gmail.com">
                    </div>
                    <div class="input_group">
                        <label for="Subject">Subject</label>
                        <input type="text" name="subject" placeholder="Inquiry/Request/Feedback">
                    </div>
                    </div>

                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10" placeholder="Inquiry/Request/Feedback"></textarea>

                    <button type="submit">SUBMIT</button>
                </form>
            </div>
            <div class="box2">

                <h3>Connect with us.</h3>

                <table>
                    <tr>
                        <td >Email:</td>
                        <td >chakura@yahoo.com</td>
                    </tr>
                    <tr>
                        <td >Phone:</td>
                        <td >020 356 120 912</td>
                    </tr>
                    <tr>
                        <td >Location:</td>
                        <td >Highway Plaza, ground floor <br>
                            near Ole Sangale Road.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>






</html>