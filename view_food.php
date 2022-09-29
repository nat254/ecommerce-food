<?php
session_start();
require_once('connect.php');

 
$sql_select="SELECT * FROM menu";
$results=mysqli_query($conn,$sql_select);
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- CSS-->
    <style>
        body{
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
            font-family:fantasy;
        }
  
        td {
            background-color:goldenrod;
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
            font-weight:bold;
        }

        
        .nav{
            background-color:#404242;
            overflow: hidden;
            
            
        }


        .nav a{
          float: right;
          color: white;
          text-align: center;
          padding: 14px 20px;
          text-decoration: none;
          font-size: 18px;
        }

         .nav a:hover{
          background-color:goldenrod;
          color: black;
    
          }

         .nav a.active{
          color:peru;
         }

         .paginate{   
        display: inline-block; 
        margin: auto;
        width: 50%;
        padding: 10px;
        display: flex;
        justify-content: center;
        }   
        .paginate a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black; 
        background-color:darkolivegreen;  
        }   
        
    .paginate a:hover:not(.active) {   
        background-color:peru;   
    }  
    
    .edit_btn{
        background-color: darkolivegreen;
        color: black;
        padding: 2px 15px 5px 15px;
        text-decoration: none;
    }

    .del_btn{
        background-color: darkslategray;
        color: black;
        padding: 2px 15px 5px 15px;
        text-decoration: none;
    }


    </style>
</head>
  
<body>
<div class="nav">
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <a href="profile.php" class="user"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName']; ?></a> 
        <a href="view_order.php">Orders</a>
        <a href="view_food.php" class="active">Food</a>
        <a href="upload_image.php">Upload</a>
        <a href="displayUsers.php">Home</a>
        
    </div>
    <section>
        <h1>FOOD DETAILS</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Id</th>
                <th>Food name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
   

    <?php
        while($row = mysqli_fetch_array($results)){
 ?>         
        <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $row['food_id'];?></td>    
                <td><?php echo $row['food_name'];?></td>
                <td><img src="<?php echo $row['food_image']; ?>" width="100" height="100"></td>
                <td><?php echo $row['food_description'];?></td>
                <td><?php echo $row['food_price'];?></td>
                <td>
				<a href="editImage.php?food_id=<?php echo $row['food_id']; ?>" class="edit_btn" >Edit</a>
			    </td>
			    <td>
				<a href="deleteFood.php?food_id=<?php echo $row['food_id']; ?>" class="del_btn">Delete</a>
			    </td>
            </tr>
<?php
        }
mysqli_close($conn);

?>

        </table>
    </section>
</html>
    </body>