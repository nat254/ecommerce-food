<?php
require_once("connect.php");

$status="";
if (isset($_POST['food_id']) && $_POST['food_id']!=""){
$foodid = $_POST['food_id'];
$result = mysqli_query(
$conn,
"SELECT * FROM `menu` WHERE `food_id`='$foodid'"
);

$row=mysqli_fetch_assoc($result);
$foodid=$row['food_id'];
$foodname=$row['food_name'];
$foodprice=$row['food_price'];
$foodimage=$row['food_image'];
$fooddescription=$row['food_description'];

$cartArray = array(
	$foodid=>array(
	'food_name'=>$foodname,
	'food_id'=>$foodid,
	'food_price'=>$foodprice,
	'quantity'=>1,
	'food_image'=>$foodimage,
    'food_description'=>$fooddescription)
);

if(empty($_SESSION["shopping_cart"]))
{
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}   


?>