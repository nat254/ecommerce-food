<?php
require_once("connect.php");

$id=$_GET['id'];

$sql_delete=mysqli_query($conn,"DELETE FROM uploadimage where id='$id'");

if($sql_delete)
{
    mysqli_close($conn);
    header("location:view_food.php");
    exit;
}
else
{
    echo "Error deleting record"; 
}

?>