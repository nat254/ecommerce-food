<?php
require_once("connect.php");

$sql="CREATE DATABASE chakura";

$sql_table="CREATE TABLE Contact(contact_id INT(6) AUTO_INCREMENT PRIMARY KEY, fullname VARCHAR(50) NOT NULL, phoneNumber INT(10) NOT NULL, email VARCHAR(40) NOT NULL, userSubject VARCHAR(50) NOT NULL, userMessage VARCHAR(200) NOT NULL)";

$fullname=$_POST["name"];
$phoneNumber=$_POST["phoneNo"];
$email=$_POST["email"];
$userSubject=$_POST["subject"];
$userMessage=$_POST["message"];

$sql_insert="INSERT INTO Contact(fullname,phoneNumber,email,userSubject,userMessage) VALUES('$fullname','$phoneNumber','$email','$userSubject','$userMessage')";


if($conn->query($sql_insert)==true)
{
    echo "Data inserted successfully";
}
else{
    echo "Error in inserting data".$conn->error;
}

?>