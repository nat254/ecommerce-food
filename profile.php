<?php

session_start();
require_once('connect.php');

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <style>
         body{
          margin:0;
          padding:0;
          background-color: lightgoldenrodyellow;
         }
         .navtop {
	       background-color:#404242;
	       height: 60px;
	       width: 100%;
	       border: 0;
        }
        .navtop div {
	      display: flex;
	      margin: 0 auto;
	      width: 1000px;
	      height: 100%;
        }
        .navtop div h1, .navtop div a {
	    display: inline-flex;
	    align-items: center;
        }
        .navtop div h1 {
	    flex: 1;
	    font-size: 24px;
	    padding: 0;
	    margin: 0;
	    color: goldenrod;
	    font-weight: normal;
        }
        .navtop div a {
	    padding: 0 20px;
	    text-decoration: none;
	    color: wheat;
	    font-weight: bold;
        }
        .navtop div a i {
	    padding: 2px 8px 0 0;
        }
        .navtop div a:hover {
	     color: palegoldenrod;
        }
        body.loggedin {
	    background-color: #f3f4f7;
        }
        .content {
	     width: 1000px;
	     margin: 0 auto;
        }
        .content h2 {
	    margin: 0;
	    padding: 25px 0;
	    font-size: 22px;
	    border-bottom: 1px solid goldenrod;
	    color: darkolivegreen;
        }
        .content > p, .content > div {
	    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	    margin: 25px 0;
	    padding: 25px;
	    background-color: lightgoldenrodyellow;
        }
        .content > p table td, .content > div table td {
	    padding: 5px;
        }
        .content > p table td:first-child, .content > div table td:first-child {
	    font-weight: bold;
	    color: peru;
	    padding-right: 15px;
        }
        .content > div p {
	     padding: 5px;
	     margin: 0 0 10px 0;
        }
        </style>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>CHAKURA</h1>
				<a href="index1.php">Home</a>
                <a href="menu1.php" >Menu</a>
                <a href="contact.php">Contact</a>
                <a href="about.html">About</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			    <a href="profile.php"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName'];?></a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile </h2>
			<div>
				<p>ACOUNT DETAILS:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['userName']?></td>
					</tr>
                    <tr>
						<td>First name:</td>
						<td><?=$_SESSION['FirstName']?></td>
					</tr>
                    <tr>
						<td>Second name:</td>
						<td><?=$_SESSION['SecondName']?></td>
					</tr>
                    <tr>
						<td>Email:</td>
						<td><?=$_SESSION['Email']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['Password']?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>