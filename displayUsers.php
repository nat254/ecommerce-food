<?php
session_start();
require_once('connect.php');


$sql_select = "SELECT * FROM Customer";
$results = mysqli_query($conn, $sql_select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Details</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- CSS-->
    <style>
        body {
            background-color: lightgoldenrodyellow;
            margin: 0;
        }

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: fantasy;
        }

        td {
            background-color: goldenrod;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: bold;
        }


        .nav {
            background-color: #404242;
            overflow: hidden;


        }


        .nav a {
            float: right;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
        }

        .nav a:hover {
            background-color: goldenrod;
            color: black;

        }

        .nav a.active {
            color: peru;
        }

        .paginate {
            display: inline-block;
            margin: auto;
            width: 50%;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .paginate a {
            font-weight: bold;
            font-size: 18px;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid black;
            background-color: darkolivegreen;
        }

        .paginate a:hover:not(.active) {
            background-color: peru;
        }

        .edit_btn {
            background-color: darkolivegreen;
            color: black;
            padding: 2px 15px 5px 15px;
            text-decoration: none;
        }

        .del_btn {
            background-color: darkslategray;
            color: black;
            padding: 2px 15px 5px 15px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown:hover .dropbtn {
            background-color: goldenrod;
            color:black;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: darkolivegreen;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="dropdown">
            <button class="dropbtn">Customer
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index1.php">Home</a>
                <a href="menu1.php">Menu</a>
                <a href="about.html">About</a>
                <a href="contact.php">Contacts</a>
               
            </div>
        </div>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <a href="profile.php" class="user"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName']; ?></a> 
        <a href="view_order.php">Orders</a>
        <a href="view_food.php">Food</a>
        <a href="upload_image.php">Upload</a>
        <a href="index1.html" class="active">Home</a>
        
        
        
       
        
        
        


    </div>
    <section>
        <h1>User Data</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Customer id</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>userType</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->


            <?php

            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }

            $records_per_page = 5;
            $offset = ($pageno - 1) * $records_per_page;

            $sql_total = "SELECT COUNT(*) FROM Customer";
            $result = mysqli_query($conn, $sql_total);

            $total_rows = mysqli_fetch_array($result)[0];

            $total_pages = ceil($total_rows / $records_per_page);

            $sql_result = "SELECT * FROM Customer LIMIT $offset, $records_per_page";
            $data = mysqli_query($conn, $sql_result);


            while ($row = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                    <td><?php echo $row['customer_id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['secondname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo $row['userPassword']; ?></td>
                    <td><?php echo $row['userType']; ?></td>
                    <td>
                        <a href="edit.php?customer_id=<?php echo $row['customer_id']; ?>" class="edit_btn">Edit</a>
                    </td>
                    <td>
                        <a href="delete.php?customer_id=<?php echo $row['customer_id']; ?>" class="del_btn">Delete</a>
                    </td>
                </tr>
            <?php
            }
            mysqli_close($conn);

            ?>

        </table>
    </section>

    <div class="paginate">
        <a href="<?php if ($pageno <= 1) {
                        echo 'disabled';
                    }
                    if ($pageno <= 1) {
                        echo '#';
                    } else {
                        echo "?pageno=" . ($pageno - 1);
                    } ?>">&laquo;</a>
        <a href="?pageno=1">1</a>
        <a href="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                    }
                    if ($pageno >= $total_pages) {
                        echo '#';
                    } else {
                        echo "?pageno=" . ($pageno + 1);
                    } ?> ">2</a>
        <a href="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                    }
                    if ($pageno >= $total_pages) {
                        echo '#';
                    } else {
                        echo "?pageno=" . ($pageno + 1);
                    } ?>">3</a>
        <a href="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                    }
                    if ($pageno >= $total_pages) {
                        echo '#';
                    } else {
                        echo "?pageno=" . ($pageno + 1);
                    } ?>">4</a>
        <a href="?pageno=<?php echo $total_pages; ?>">&raquo;</a>
    </div>
</body>

</html>