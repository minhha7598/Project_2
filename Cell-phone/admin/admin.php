<?php 
    include '../../config/db.php';
    session_start();
    mysqli_query($conn,"SELECT * FROM `product-data`");
    if(!isset($_SESSION['username'])){
        header('location: ../index/index.php');
    }
    //Return array CUSTOMER
    $customers = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `fullname` FROM `user-data`")); 
    
    //Return array PRODUCT
    $products = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `Product-Name` FROM `product-data`")); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>WELCOME ADMIN</title>
</head>
<body>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>WELCOME ADMIN
                <a href="../index/logout.php">
                    <button type="submit" class="btn btn-danger">LOGOUT</button>
                </a>     
            </h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark" style="text-align: center;">
                    <tr>
                        <th>
                            <a href="./product/product-admin.php"><button type="button" class="btn btn-success">VIEW PRODUCT</button></a>
                        </th>
                        <th>
                            <a href="./customer/customer-admin.php"><button type="button" class="btn btn-success">VIEW CUSTOMER</button></a>
                        </th>
                    </tr>
                </thead>
                
                <tbody style="text-align: center;">
                    <tr>
                        <th>
                            Total number of products: <?php echo count($products);?> products
                        </th>
                        <th>
                            Total number of customers: <?php echo count($customers) - 1; ?> customers
                        </th>
                    </tr>
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

