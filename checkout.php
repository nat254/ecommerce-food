<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
    <div class="nav">
        <a href="index1.php">Home</a>
        <a href="menu1.html" >Menu</a>
        <a href="contact.php" class="active">Contact</a>
        <a href="about.html">About</a>
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
         
        
        
    </div>

    <div class="wrapper">
         <h1>Checkout page</h1>
         <p>Thank you for choosing us<br>
        </p>

        <div class="contact_box">
            <div class="box1">

                <h3>Order</h3>
                <form action="" method="POST">
                    <div class="row_input">
                        <div class="input_group">
                            <label for="Name">User Name:</label>
                            <input type="text" name="name" placeholder="username">
                        </div>
                        <div class="input_group">
                            <label for="Phone">Phone:</label>
                            <input type="text" name="phone" placeholder="0712 356 789">
                        </div>
                    </div>
                    <div class="row_input">
                    <div class="input_group">
                        <label for="Food">Food of choice:</label>
                        <input type="text" name="food" placeholder="What have you chosen">
                    </div>
                    <div class="input_group">
                        <label for="Servings">Serving size:</label>
                        <input type="text" name="size" placeholder="small/medium/large">
                    </div>
                    </div>

                    <div class="row_input">
                        <div class="input_group">
                            <label for="Country">Country:</label>
                            <input type="text" name="country" placeholder="Country">
                        </div>
                        <div class="input_group">
                            <label for="Payment">Payment method of choice:</label>
                            <input type="text" name="payment" placeholder="Cash/Mpesa/Debit/Credit card">
                        </div>
                        </div>

                  

                    <button type="submit">SUBMIT</button>
                </form>
            </div>
            <div class="box2">

                <h3>Connect with us.</h3>

                <table>
                    <tr>
                        <td >Email:</td>
                        <td >chakura@yahoo.com</td>
                    </tr>
                    <tr>
                        <td >Phone:</td>
                        <td >020 356 120 912</td>
                    </tr>
                    <tr>
                        <td >Location:</td>
                        <td >Highway Plaza, ground floor <br>
                            near Ole Sangale Road.</td>
                    </tr>
                </table>

                <br>
                <br>
                <br>
                <h3>Payment is upon delivery.</h3>

                
            </div>
        </div>
    </div>
</body>
</html>