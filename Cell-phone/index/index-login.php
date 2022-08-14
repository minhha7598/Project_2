<?php 
include '../../config/db.php'; 
session_start();
if(!isset($_SESSION['username'])){
    header('location: index.php');
}

//Read product
$result = mysqli_query($conn,"SELECT * FROM `product-data`");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WELCOME CUSTOMER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
    <div class="container-fluid">
        <div class="card" >
            <div class="card-header"><h1>HOME PAGE</h1>
                <div>
                    <label class='button' style="float: left;">
                        <a href="logout.php"><button type="button" class="btn btn-danger btn-lg">LOG-OUT</button></a>
                    </label>
                    <?php if(isset($_GET['value']) == "created"){ ?>
                        <label class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successfully!</strong> Your product added to Cart.
                        </label>
                    <?php } ?>
                    <label class='button' style="float: right;">
                        <a href="login-cart.php"><button type="button" class="btn btn-secondary btn-lg">CART</button></a>         
                    </label> 
                </div>                  
            </div>
  
        <div class="card-body" style="text-align: center;">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Product-Name</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Quality</th>
                            <th>Quantity</th>
                            <th>Price (Dollars)</th>
                            <th>Add to Cart</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)) {     
                                echo "<form action='insert-logincart.php' method='POST'>";?>
                                <tr>
                                    <th>
                                        <?php echo $i++; ?>
                                    </th>
                                    <th>
                                        <input type="hidden" name="Product-name" value="<?php echo $row['Product-Name']; ?>">
                                        <?php echo $row['Product-Name']; ?>
                                    </th>
                                    <th>
                                        <input type="image" name="Image" style='width:100px;' src="../../img/<?php echo $row['Image']; ?>">
                                    </th>
                                    <th>
                                        <input type="hidden" name="Brand" value="<?php echo $row['Brand']; ?>">
                                        <?php echo $row['Brand']; ?>
                                    </th>
                                    <th>
                                        <input type="hidden" name="Quality" value="<?php echo $row['Quality']; ?>">
                                        <?php echo $row['Quality']; ?>
                                    </th>
                                    <th>
                                        <input type="number" name="Quantity" required>
                                    </th>
                                    <th>
                                        <input type="hidden" name="Price" value="<?php echo $row['Price']; ?>">
                                        <?php echo $row['Price']; ?>
                                    </th>
                                    <th>
                                        <input type="submit" name="Sbm" value="ADD">
                                    </th>
                                </tr>
                        <?php     
                                echo "</form>";
                            } 
                        ?>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>