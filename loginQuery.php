<?php
session_start();
require_once("connect.php");

if (isset($_POST['Login'])) {
	login();
}

function login(){
	global $conn, $username;
    $errors=[];


	$username = $_POST['userName'];
	$password = $_POST['password'];

	
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		

		$query = "SELECT * FROM Customer WHERE userName='$username' AND userPassword='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { 
			// check if user is admin or customer
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['userType'] == 'Admin') {
                session_start();
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['AdminLoggedIn']=true;
				$_SESSION['AdminID']=$logged_in_user['customer_id'];
				$_SESSION['success']  = "You are now logged in";
				$_SESSION['userName'] = $logged_in_user['userName'];
				$_SESSION['FirstName'] = $logged_in_user['firstname'];
				$_SESSION['SecondName'] = $logged_in_user['secondname'];
				$_SESSION['Email'] = $logged_in_user['email'];
				$_SESSION['Password'] = $logged_in_user['userPassword'];
				header("location:displayUsers.php");
				  
			}else{
				session_start();
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['clientLoggedIn']  = true;
				$_SESSION['customerID']=$logged_in_user['customer_id'];
				$_SESSION['success']  = "You are now logged in";
                $_SESSION['userName'] = $logged_in_user['userName'];
				$_SESSION['FirstName'] = $logged_in_user['firstname'];
				$_SESSION['SecondName'] = $logged_in_user['secondname'];
				$_SESSION['Email'] = $logged_in_user['email'];
				$_SESSION['Password'] = $logged_in_user['userPassword'];
				echo "Logged in as client";
				echo $_SESSION['userName'];
               
               header("location:menu1.php");
               exit();
                
            }
		}else {
		array_push($errors, "Wrong username/password combination");
		echo "Wrong username or password";
		}

        
	}
}
?>
