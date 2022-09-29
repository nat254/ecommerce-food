<?php
require_once("connect.php");
require_once("process_menu.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

     <!--Font awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

     <!--Style sheets-->
     <link rel="stylesheet" href="css/menu.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
 

<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/beefburger.jpeg" alt="beef burger" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Beef Burger</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Pickles, Tomatoes, Cheese, Onions.
                     </p>
                     <h5>
                         <small><s class="text-secondary">Ksh.900</s></small>
                         <span class="price">Ksh.500</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/mushroom burger.jpg" alt="mushroom burger" class="img-fluid card-img-top"style="width:185px; height:185px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Mushroom Burger</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Mushroom, Cheese, Tomatoes, Corriander.
                     </p>
                     <h5>
                         <span class="price">Ksh.800</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>   
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/ChickenBurgers.jpg" alt="chicken burger" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Chicken Burger</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Chicken, Tomatoes, Cheese, Lettuce.
                     </p>
                     <h5>
                         
                         <span class="price">Ksh.400</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>   
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/veggieburger.jpg" alt="veggie burger" class="img-fluid card-img-top" style="width:203px; height:203px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Veggie Burger</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Lettuce, Potatoes, pepper, carrots.
                     </p>
                     <h5>
                         <span class="price">Ksh.550</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/chickenNuggets.jpg" alt="chicken nuggets" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Chicken Nuggets</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Spices:breadcrumbs, herbs, salt.
                     </p>
                     <h5>
                         
                         <span class="price">Ksh.300</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/chickenmeatballs.jpg" alt="chickenmeatballs"  class="img-fluid card-img-top" style="width:250px; height:250px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Chicken Meatballs</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Spices:Barbeque sauce, salt, coriander.
                     </p>
                     <h5>
                         <span class="price">Ksh.400</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/Barbecue-Steak-Pizza.jpg" alt="bbq steak" class="img-fluid card-img-top" style="width:255px; height:255px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">BBQ Steak pizza</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Marinated bbq steak,Tomatoes.
                     </p>
                     <h5>
                         <small><s class="text-secondary">Ksh.900</s></small>
                         <span class="price">Ksh.700</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/mushroompizza.jpg" alt="mushroompizza" class="img-fluid card-img-top" style="width:285px; height:285px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Mushroom Pizza</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:bbq chicken,mushroom,creamy mayo.
                     </p>
                     <h5>
                       
                         <span class="price">Ksh.500</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/chicken-tikka-pizza.jpg" alt="chicken-tikka-pizza" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Chicken Tikka Pizza</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Marinated tikka chicken,onion.
                     </p>
                     <h5>
                         
                         <span class="price">Ksh.800</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>
        
        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/fries1.jpg" alt="fries" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Fries</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Crispy and fresh.
                     You can add extra cheese.
                     </p>
                     <h5>
                         
                         <span class="price">Ksh.100</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/coleslaw.jpeg" alt="coleslaw" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Coleslaw</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Prepared with fresh lettuce, carrots and mayonnaise.
                     </p>
                     <h5>
                         
                         <span class="price">Ksh.80</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/onionrings.jpg" alt="onion rings" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Onion Rings</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Ingredients: Fresh onions, salt, paprika, breadcrumbs.
                     </p>
                     <h5>
                         <span class="price">Ksh.100</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/soda.jpg" alt="soda" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Soda</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Pepsi, coca cola
                     </p>
                     <h5>
                         <small><s class="text-secondary">Ksh.900</s></small>
                         <span class="price">Ksh.500</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/milkshakes.jpg" alt="milkshakes" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Milkshakes</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Flavors:Vanilla, Oreo, Strawberry
                     </p>
                     <h5>
                    
                         <span class="price">Ksh.300</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/Hawaiian.jpg" alt="Hawaiian" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Hawaiian Pizza</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Toppings:Macon,pineapple.
                     </p>
                     <h5>
                         
                         <span class="price">Ksh.700</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/firecracker.jpg" alt="firecracker" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Firecracker Chicken</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Spices:brown sugar,buffalo hot sauce, salt.
                     </p>
                     <h5>
                         <span class="price">Ksh.900</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

</body>
</html>