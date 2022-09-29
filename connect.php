<?php

$conn=new mysqli("localhost","root","","chakura");

if($conn->connect_error)
{
    die("Not connected".$conn->connect_error);

}
?>