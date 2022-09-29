<?php
	session_start();
	//user needs to login to checkout
	require_once('connect.php');
	if(isset($_POST['checkout']))
	{
		$max=count($_SESSION["shopping_cart"]);
		for($i=0;$i<$max;$i++){
            $fid=$_SESSION["shopping_cart"][$i]['item_id'];
            $quantity=$_SESSION["shopping_cart"][$i]['item_quantity'];
            $price=$_SESSION["shopping_cart"][$i]['item_price'];
            $date=date('Y-m-d');
			$total=($price*$quantity);
            $user=$_SESSION['customerID'];
            $result=mysqli_query($conn,"INSERT INTO `orders`( `food_id`, `customer_id`, `price`, `quantity`,`date_of_purchase`) VALUES ('$fid','$user','$total','$quantity','$date')");
            if($result)
            {
                echo"Order was successful"; 
                unset($_SESSION['shopping_cart'][$i]);
                header('location:menu1.php');
            }  
            else{
                die("Query failed!" . mysqli_error($conn) . $result);
            }
        }
    }





















    
?>