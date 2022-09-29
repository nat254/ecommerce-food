<?php
require_once("connect.php");

if (isset($_POST["submitImage"]))
{
    
    

    $foodname=$_POST['fooditem'];
    $foodprice=$_POST['price'];
    $fooddesription=$_POST['description'];

    $file_path="images/";
    $original_file_name=$_FILES['food-image']['name'];
    $file_tmp_location=$_FILES['food-image']['tmp_name'];

    if(move_uploaded_file($file_tmp_location,$file_path.$original_file_name))
    {
        $sql_insert="INSERT INTO menu (food_name,food_image,food_description,food_price) VALUES('$foodname','images/$original_file_name','$fooddesription','$foodprice')";
       
        if(mysqli_query($conn,$sql_insert))
        {
           header("location:upload_image.php");
        }
    }


}
?>