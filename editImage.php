<?php
session_start();
require_once("connect.php");

$foodid = $_GET['food_id'];

$sql_select = mysqli_query($conn, "SELECT * FROM menu WHERE food_id='$foodid'");

$rows = mysqli_fetch_array($sql_select);



if (isset($_POST['update'])) // when click on Update button
{
    $foodName = $_POST['fooditem'];
    $foodImage = $_POST['food-image'];
    $fooddescription = $_POST['description'];
    $Price = $_POST['price'];

    $file_path = "images/";
    $original_file_name = $_FILES['food-image']['name'];
    $file_tmp_location = $_FILES['food-image']['tmp_name'];


    if (move_uploaded_file($file_tmp_location, $file_path . $original_file_name)) {
        $editValues = mysqli_query($conn, "UPDATE menu SET food_name='$foodName', food_image='images/$original_file_name',food_description='$fooddescription',food_price='$Price' WHERE food_id='$foodid'");


        if ($editValues) {
            mysqli_close($conn); // Close connection
            header("location:view_food.php"); // redirects to view food page
            exit;
        } else {
            echo $conn->error;
        }
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

            <form method="POST" enctype="multipart/form-data">
                <p>Food Name:</p>
                <input type="text" name="fooditem" value="<?php echo $rows['food_name'] ?>" placeholder="Enter food name" Required>
                <p>Image:</p>
                <input type="file" name="food-image" id="foodimage" value="images/<?php echo $rows['food_image'] ?>">
                <p>Description:</p>
                <textarea name="description" id="descr" rows="10" placeholder="Description" required="true"><?php echo $rows['food_description'] ?></textarea>
                <p>Price:</p>
                <input type="number" name="price" value="<?php echo $rows['food_price'] ?>" placeholder="Enter price" Required>

                <button type="submit" name="update">Update</button>
            </form>
        </div>
    </div>
</body>

</html>