<?php 
    include '../../config/db.php'; 
    //Read product
    $result = mysqli_query($conn,"SELECT * FROM `product-data`");
?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOG IN</title>
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
                <form action="login-submit.php" method="POST">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Username</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter username" name="username">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend"><div class="input-group-text">@</div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Enter password" name="pwd">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                            </div>
                        </div>
                        <div class='button'>
                            <button type="submit" class="btn btn-success" name='submit'>LOGIN</button>
                            <a href="register.php"><button type="button" class="btn btn-primary">REGISTER</button></a> 
                        </div>
                    </div>
                </form>
                <?php echo (isset($error['required']))?$error['required']:false;?>
                <div>
                    <?php if(isset($_GET['value']) == "created"){ ?>
                        <label class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successfully!</strong> Your product added to Cart.
                        </label>
                    <?php } ?>
                    <label class='button' style="float: right;">
                        <a href="cart.php"><button type="button" class="btn btn-secondary btn-lg">CART</button></a>         
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
                                echo "<form action='insert-cart.php' method='POST'>";?>
                                <tr>
                                    <th>
                                        <?php echo $i++; ?>
                                    </th>
                                    <th>
                                        <input type="hidden" name="product-name" value="<?php echo $row['Product-Name']; ?>">
                                        <?php echo $row['Product-Name']; ?>
                                    </th>
                                    <th>
                                        <input type="image" name="image" style='width:100px;' src="../../img/<?php echo $row['Image']; ?>">
                                    </th>
                                    <th>
                                        <input type="hidden" name="brand" value="<?php echo $row['Brand']; ?>">
                                        <?php echo $row['Brand']; ?>
                                    </th>
                                    <th>
                                        <input type="hidden" name="quality" value="<?php echo $row['Quality']; ?>">
                                        <?php echo $row['Quality']; ?>
                                    </th>
                                    <th>
                                        <input type="number" name="quantity" required>
                                    </th>
                                    <th>
                                        <input type="hidden" name="price" value="<?php echo $row['Price']; ?>">
                                        <?php echo $row['Price']; ?>
                                    </th>
                                    <th>
                                        <input type="submit" name="sbm" value="ADD">
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
