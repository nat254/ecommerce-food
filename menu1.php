<?php
session_start();
require_once('connect.php');

if (!isset($_SESSION['clientLoggedIn'])) {
	header('Location:login.php');
	exit;
}

if (!isset($_SESSION['shopping_cart'])) {
    $_SESSION['shopping_cart'] = array();
}

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["food_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["food_id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["food_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["food_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="menu1.php"</script>';
			}
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
    <title>Menu</title>

    <link rel="stylesheet" href="css/menu1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="nav">
       

        <a href="index1.php">Home</a>
        <a href="menu1.php" class="active">Menu</a>
        <a href="contact.php">Contact</a>
        <a href="about.html">About</a>
        <a href="profile.php"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName'];?></a>

        <a href="process_order.php">
                        
                        <i class="fas fa-shopping-cart"></i><span class="badge" id="comparison-count">><?php echo count($_SESSION['shopping_cart']);?></span>
                    </a>
        

    </div>

    <div class="wrapper">
        <div class="title">
            <h4><span>Freshness with every bite</span>our menu</h4>
        </div>

        

        <div class="category">
            <h4>Burger deals</h4>
        </div>



        <div class="menu1">

            <?php
            $query = "SELECT * FROM menu ORDER BY food_id ASC";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) > 0) {
                while ($rows = mysqli_fetch_array($results)) {
            ?>

                    <form method="POST" action="menu1.php?action=add&food_id=<?php echo $rows["food_id"]; ?> ">
                        <div class="item">
                            <img src="<?php echo $rows['food_image']; ?>" width="150" height="150">
                            <div class="menu-content">
                                <h4><?php echo $rows['food_name']; ?><span>Ksh.<?php echo $rows['food_price']; ?></span></h4>
                                <p><?php echo $rows['food_description'] ?></p>
                                <label for="quantity">Quantity:</label>
                                <input type="text" name="quantity" value="1" class="form-control" style="border: 2px solid #556b2f;
                                                                                                         border-radius: 4px; padding: 12px 20px;">

						        <input type="hidden" name="hidden_name" value="<?php echo $rows["food_name"]; ?>">

						        <input type="hidden" name="hidden_price" value="<?php echo $rows["food_price"]; ?>">
                                
                                
                                <button type="submit" class="button" name="add_to_cart"><span>Order Now</span></button>
                                
                            </div>
                        </div>
                    </form>
            <?php
                }
            }
            ?>


        </div>

</body>

</html>