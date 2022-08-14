<?php 
    include '../../../config/db.php';
    //Read
    $result = mysqli_query($conn,"SELECT * FROM `product-data`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/information.css">
    <title>PRODUCT INFORMATION</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>PRODUCT INFORMATION</h1>
                <h2>WELCOME ADMIN</h2>
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
                            <th>Quantity (Piece)</th>
                            <th>Price (Dollars)</th>
                            <th>Total-Price (Dollars)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                            while($row = mysqli_fetch_assoc($result)) {     ?>
                                <tr>
                                    <th><?php echo $i++; ?></th>
                                    <th><?php echo $row['Product-Name']; ?></th>
                                    <th>
                                        <img style='width:100px;' src="../../../img/<?php echo $row['Image']; ?>">
                                    </th>
                                    <th><?php echo $row['Brand']; ?></th>
                                    <th><?php echo $row['Quality']; ?></th>
                                    <th><?php echo $row['Quantity']; ?></th>
                                    <th><?php echo $row['Price']; ?></th>
                                    <th><?php echo $row['Price']*$row['Quantity']; ?></th>
                                    <th>
                                        <a href="update.php?id=<?php echo $row['ID'];?>">Update</a> | 
                                        <a href="delete.php?id=<?php echo $row['ID'];?>">Delete</a>
                                    </th>
                                </tr>
                            <?php   }   ?>
                    </tbody>
                </table>
                <a href="../admin.php"><button type="submit" class="btn btn-danger" id="btn">BACK</button></a>
                <a href="creat.php"><button id="btn" type="button" class="btn btn-success">CREAT</button></a>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>