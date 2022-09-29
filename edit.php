<?php

require_once("connect.php");

$customerid=$_GET['customer_id'];

$sql_select=mysqli_query($conn,"SELECT * FROM Customer where customer_id='$customerid'");

$rows=mysqli_fetch_array($sql_select);

if(isset($_POST['update'])) // when click on Update button
{
        $firstName = $_POST['firstName'];
        $secondName = $_POST['secondName'];
        $Email = $_POST['Email'];
        $Password = $_POST['UserPassword'];
        $username = $_POST['UserName'];
        $userType=$_POST['roles']; 
	
    $editValues = mysqli_query($conn,"UPDATE Customer SET firstname='$firstName', secondname='$secondName',email='$Email',userName='$username',userPassword='$Password',userType='$userType' WHERE customer_id='$customerid'");
	
    if($editValues)
    {
        mysqli_close($conn); // Close connection
        header("location:displayUsers.php"); // redirects to display users page
        exit;
    }
    else
    {
        echo $conn->error;
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit details</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>

<div class="registration">
    <div class="reg">
<h1>Edit Details</h1>

<form method="POST">
  <p>First Name:</p>
  <input type="text" name="firstName" value="<?php echo $rows['firstname'] ?>" placeholder="Enter First Name" Required>
  <p>Second Name:</p>
  <input type="text" name="secondName" value="<?php echo $rows['secondname'] ?>" placeholder="Enter Second Name" Required>
  <p>Email:</p>
  <input type="email" name="Email" value="<?php echo $rows['email'] ?>" placeholder="Enter Email" Required>
  <p>UserName:</p>
  <input type="text" name="UserName" value="<?php echo $rows['userName'] ?>" placeholder="Enter userName" Required>
  <p>Password:</p>
  <input type="password" name="UserPassword" value="<?php echo $rows['userPassword'] ?>" placeholder="Enter Password" Required>
  <p>Role</p>
  <div class="dropdown" style="width:200px;">
  <select name="roles" id="Role">
                <optgroup label="userRoles">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </optgroup>
            </select>
    </div>
  <button type="submit" name="update">Update</button>
</form>
    </div>
</div>
</body>
</html>