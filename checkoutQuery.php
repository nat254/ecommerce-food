<?php
require_once("connect.php");

$sql="CREATE DATABASE chakura";

$sql_table="CREATE TABLE CheckOut(order_id INT(6) AUTO_INCREMENT PRIMARY KEY, fullname VARCHAR(50) NOT NULL, phoneNumber INT(10) NOT NULL, food VARCHAR(255) NOT NULL, serving VARCHAR(50) NOT NULL, country VARCHAR(50) NOT NULL, paymentMethod VARCHAR(50) NOT NULL)";

$fullname=$_POST["name"];
$phoneNumber=$_POST["phone"];
$food=$_POST["food"];
$servings=$_POST["size"];
$country=$_POST["country"];
$paymentMethod=$_POST["payment"];

$sql_insert="INSERT INTO Contact(fullname,phoneNumber,food,serving,country,paymentMethod) VALUES('$fullname','$phoneNumber','$food','$servings','$country','$paymentMethod')";


if($conn->query($sql_table)==true)
{
    echo "Table created successfully";
}
else{
    echo "Error in creating table".$conn->error;
}

if($conn->query($sql_insert)==true)
{
    echo "Values inserted successfully";
}
else{
    echo "Error in inserting values".$conn->error;
}

?>