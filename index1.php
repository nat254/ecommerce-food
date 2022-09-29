<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chakura</title>

    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<?php
if (isset($_SESSION['clientLoggedIn']) == true) {
?>

    <body>
        <div class="homepage">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo2.png" alt="logo" width="200" height="200">
                </div>
                <div class="navbar_list">
                    <ul type="none">
                        <li><a href="index1.php" class="active">Home</a></li>
                        <li><a href="menu1.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.html">About</a></li>
                        <div class="dropdown">
                            <button class="dropbtn"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName']; ?></button>
                            <div class="dropdown-content">
                                <a href="profile.php">profile page</a>
                            </div>
                        </div>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>

            </div>

            <div class="banner_image">
                <div class="banner_content">
                    <h1 id="headline">WELCOME TO<br> <span>CHAKURA<span></h1>
                    <p id="sub-headline" style="color:black">ONLINE FAST FOOD STORE</p>
                    <p id="sub-headline" style="color:black">Authentic and fresh fast food dishes.</p>
                    <div class="btn"><a href="menu1.php"> Order Now</a></div>
                </div>
            </div>



            <div class="about" id="about">
                <h1 class="title">About us</h1>
                <p>Chakura offers a variety of meals that will satisfy all your fastfood needs.<br>
                    You can choose to eat healthy at our quick-service restaurant which runs 24/7.<br>
                    Our meals are very affordable and we have weekly offers...</p>
                <div class="btn"><a href="about.html"> Read More</a></div>
            </div>

            <div class="benefits" id="benefits">
                <h1 class="title">Benefits</h1>
                <p>Choose us. We can never disappoint.</p>
                <div class="services">
                    <div class="services_list">
                        <img src="images/fresh.png" alt="fresh_image" width="100" height="100">
                        <h3 class="sub_title">Fresh food</h3>
                        <p>Our food is cooked with fresh ingredients</p>
                    </div>
                    <div class="services_list">
                        <img src="images/delivery.png" alt="delivery_image" width="100" height="100">
                        <h3 class="sub_title">Fast Delivery</h3>
                        <p>We deliver on your door step.</p>
                    </div>
                    <div class="services_list">
                        <img src="images/payment.png" alt="payment_image" width="100" height="100">
                        <h3 class="sub_title">Variety of payment methods</h3>
                        <p>You can pay using Mpesa, cash and even credit card.</p>
                    </div>
                </div>
            </div>

            <div class="testimonials">
                <h1 class="title">Testimonials</h1>
                <div class="test">
                    <h1>Mary</h1>
                    <p>I enjoyed the food and service.<br>
                        My order was delivered on time.<br>
                        It was very affordable.<br>
                    </p>
                </div>

                <div class="test">
                    <h1>Tom</h1>
                    <p>The beef burger was the most amazing burger I have ever tried.<br>
                        My order was delivered right on my doorstep.<br>
                        I love the fact that they have a variety of payment methods.<br>
                    </p>
                </div>
            </div>

            <div class="features" id="features">
                <h1 class="title">Latest Recipes</h1>
                <div class="features_wrapper">
                    <div class="food">
                        <div class="food_item">
                            <img src="images/pizza.jpg" alt="pizza" class="food_img">
                            <div class="details">
                            <p class="feature_details">vegetarian pizza.</p>
                            </div>
                        </div>

                        <div class="food_item">
                            <img src="images/salad.jpg" alt="salad" class="food_img">
                            <div class="details">
                            <p class="feature_details">Healthy salad.<br></p>
                            </div>
                        </div>


                        <div class="food_item">
                            <img src="images/chicken.jpg" alt="chicken" class="food_img">
                            <div class="details">
                            <p class="feature_details">Amazing roasted chicken <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="additional">
                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Useful content</u></h4>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Recommendations</a></li>
                            <li><a href="">Map</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </div>


                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Others</u></h4>
                            <li><a href="">Newsletter signup</a></li>
                            <li><a href="">Coupons</a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <p>copyright @2021</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
<?php
}
?>

<?php
if (isset($_SESSION['clientLoggedIn']) == false) {
?>

    <body>
        <div class="homepage">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo2.png" alt="logo" width="200" height="200">
                </div>
                <div class="navbar_list">
                    <ul type="none">
                        <li><a href="index1.php" class="active">Home</a></li>
                        <li><a href="menu1.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registration.php">Registration</a></li>


                    </ul>
                </div>

            </div>

            <div class="banner_image">
                <div class="banner_content">
                    <h1 id="headline">WELCOME TO <br> <span>CHAKURA<span></h1>
                    <p id="sub-headline" style="color:black">ONLINE FAST FOOD STORE</p>
                    <p id="sub-headline" style="color:black">Authentic and fresh fast food dishes.</p>
                    <div class="btn"><a href="menu1.html"> Order Now</a></div>
                </div>
            </div>

            
            <div class="about" id="about">
                <h1 class="title">About us</h1>
                <p>Chakura offers a variety of meals that will satisfy all your fastfood needs.<br>
                    You can choose to eat healthy at our quick-service restaurant which runs 24/7.<br>
                    Our meals are very affordable and we have weekly offers...</p>
                <div class="btn"><a href="about.html"> Read More</a></div>
            </div>

            <div class="benefits" id="benefits">
                <h1 class="title">Benefits</h1>
                <p>Choose us. We can never disappoint.</p>
                <div class="services">
                    <div class="services_list">
                        <img src="images/fresh.png" alt="fresh_image" width="200" height="200">
                        <h3 class="sub_title">Fresh food</h3>
                        <p>Our food is cooked with fresh ingredients</p>
                    </div>
                    <div class="services_list">
                        <img src="images/delivery.png" alt="delivery_image" width="200" height="200">
                        <h3 class="sub_title">Fast Delivery</h3>
                        <p>We deliver on your door step.</p>
                    </div>
                    <div class="services_list">
                        <img src="images/payment.png" alt="payment_image" width="200" height="200">
                        <h3 class="sub_title">Variety of payment methods</h3>
                        <p>You can pay using Mpesa, cash and even credit card.</p>
                    </div>
                </div>
            </div>

            <div class="testimonials">
                <h1 class="title">Testimonials</h1>
                <div class="test">
                    <h1>Mary</h1>
                    <p>I enjoyed the food and service.<br>
                        My order was delivered on time.<br>
                        It was very affordable.<br>
                    </p>
                </div>

                <div class="test">
                    <h1>Tom</h1>
                    <p>The beef burger was the most amazing burger I have ever tried.<br>
                        My order was delivered right on my doorstep.<br>
                        I love the fact that they have a variety of payment methods.<br>
                    </p>
                </div>
            </div>

            <div class="features" id="features">
                <h1 class="title">Latest Recipes</h1>
                <div class="features_wrapper">
                    <div class="food">
                        <div class="food_item">
                            <img src="images/pizza.jpg" alt="pizza" class="food_img">
                            <p class="feature_details">vegetarian pizza.</p>
                        </div>

                        <div class="food_item">
                            <img src="images/salad.jpg" alt="salad" class="food_img">
                            <p class="feature_details">Healthy salad.<br></p>
                        </div>
                        <div class="food_item">
                            <img src="images/chicken.jpg" alt="chicken" class="food_img">
                            <p class="feature_details">Amazing roasted chicken <br></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="additional">
                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Useful content</u></h4>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Recommendations</a></li>
                            <li><a href="">Map</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </div>


                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Others</u></h4>
                            <li><a href="">Newsletter signup</a></li>
                            <li><a href="">Coupons</a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <p>copyright @2021</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
<?php
}
?>

</html>