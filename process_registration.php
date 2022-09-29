<?php
session_start();
require_once("connect.php");

$sql="CREATE DATABASE chakura";

$sql_table="CREATE TABLE Customer(customer_id INT(6) AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(10) NOT NULL, secondname VARCHAR(10) NOT NULL, email VARCHAR(40) NOT NULL, userName VARCHAR(255) NOT NULL, userPassword VARCHAR(6) NOT NULL)";



if(isset($_POST["submit"]))
{

    $firstname=$_POST["firstname"];
    $secondname=$_POST["secondname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password2=$_POST["confirmpassword"];
    $userName=$_POST["username"];

    $sql_insert="INSERT INTO Customer(firstname,secondname,email,userName,userPassword) VALUES('$firstname','$secondname','$email','$userName','$password')";
    $results=$conn->query($sql_insert);
    $_SESSION['message']="Record has been saved successfully.";
    header("location:login.php");
     
}

if ($password!== $password2) {
    die("Password and Confirm password should match!");   
}


$sql_check="SELECT * FROM Customer WHERE userName = '$userName' or email = '$email' LIMIT 1";

$results=$conn->query($sql_check);
$user=$results->fetch_assoc();

if($user){
    if($user['userName']==$userName)
    {
        die("Username already exists");
    }
    if($user['email']==$email)
    {
        die("Email already exists");
    }
}


if($conn->query($sql_insert)==true)
{
    echo "Data inserted successfully";
}
else{
    echo "Error in inserting data".$conn->error;
}







?>