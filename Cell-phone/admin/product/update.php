<?php include '../../../config/db.php'; 
    //GET id => return array
    $id = $_GET['id'];
    $row_up = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `product-data` WHERE `ID` = $id")); 

    if(isset($_POST['sbm'])){
        $productname = $_POST['productname'];
        $image = $_FILES['image']['name'];
        $brand = $_POST['brand'];
        $quality = $_POST['quality'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $totalprice = $_POST['price']*$_POST['price'];

        //Update into Database
        $query = mysqli_query($conn, "UPDATE `product-data` SET `Product-Name` = '$productname',`Image` = '$image',`Brand` = '$brand',`Quantity` = '$quantity',`Quality` = '$quality',`Price` = '$price' WHERE `ID` = $id");
        header('location: product-admin.php');
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>PRODUCT UPDATE</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                        <label for="">Product-Name</label>
                        <input type="text" class="form-control" name = 'productname' required value="<?php echo $row_up['Product-Name']; ?>">
                    </div>   
                    <div class="form-group">
                        <label class="form-label" for="customFile">Image</label>
                        <input type="file" class="form-control" id="customFile" name = 'image' required value="<?php echo $row_up['Image']; ?>"/>
                    </div>       
                    <div class="form-group">
                        <label for="">Brand</label>
                        <input type="text" class="form-control" name = 'brand' required value="<?php echo $row_up['Brand']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="">Quality</label>
                        <input type="text" class="form-control" name = 'quality' required value="<?php echo $row_up['Quality']; ?>">
                    </div> 
                    <div class="form-group">
                        <label for="">Quantity (Piece)</label>
                        <input type="number" class="form-control" name = 'quantity' required value="<?php echo $row_up['Quantity']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="">Price (Dollars)</label>
                        <input type="number" class="form-control" name = 'price' required value="<?php echo $row_up['Price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Total-Price (Dollars)</label>
                        <input type="number" class="form-control" name = 'totalprice' required value="<?php echo $row_up['Price']*$row_up['Quantity']; ?>">
                    </div>
                    <div style="text-align: center;">
                        <a href="product-admin.php"><button style="text-align: center;" type="button" class="btn btn-danger" id="btn">BACK</button></a>
                        <button type="submit" name='sbm' class='btn btn-success'>UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>