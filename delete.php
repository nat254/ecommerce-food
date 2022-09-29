<?php
require_once("connect.php");

$customerid=$_GET['customer_id'];

$sql_delete=mysqli_query($conn,"DELETE FROM Customer where customer_id='$customerid'");

if($sql_delete)
{
    mysqli_close($conn);
    header("location:displayUsers.php");
    exit;
}
else
{
    echo "Error deleting record"; 
}

?>