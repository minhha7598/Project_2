<?php 
    include '../../config/db.php'; 
    session_start();
    // session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/information.css">
    <title>LOGIN CART</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header"><h2>YOUR CART</h2>
            <a href="index.php"><button type="button" class="btn btn-secondary">BACK</button></a>
        </div>
        <!-- <form action="#" method="POST"> -->
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
                                foreach($_SESSION as $product){
                                    echo "<form action='edit-logincart.php' method='POST'>";
                                        echo "<tr>";
                                            echo "<td>".$i++."</td>";               //#
                                            foreach($product as $key => $value){
                                                switch($key){
                                                    case '0':
                                                        echo "<td>".$value."</td>";     //Name
                                                        echo "<input type='hidden' name='$key' value='".$value."'>"; 
                                                        break;
                                                    case '1':
                                                        echo "<td>".$value."</td>";     //Image
                                                        echo "<input type='hidden' name='$key' value='".$value."'>";
                                                        break;
                                                        case '2':
                                                        echo "<td>".$value."</td>";     //Brand
                                                        echo "<input type='hidden' name='$key' value='".$value."'>"; 
                                                        break;
                                                    case '3':
                                                        echo "<td>".$value."</td>";     //Quality
                                                        echo "<input type='hidden' name='$key' value='".$value."'>"; 
                                                        break;
                                                    case '4':
                                                        $quantity = $value;            //Quantity
                                                        echo "<td><input type='number' name='$key' value='".$value."'></td>";
                                                        break;     
                                                    case '5':
                                                        $price  = $value;
                                                        echo "<td>".$value."</td>";     //Price
                                                        echo "<input type='hidden' name='$key' value='".$value."'>";    
                                                        break;
                                                }
                                            }   
                                            $total = $price * $quantity;
                                            echo "<td>".$total."</td>";             //Total
                                            echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'> 
                                                    <input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";      //Update - Delete
                                        echo "</tr>";
                                    echo "</form>";               
                                }                      
                            ?>   
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>TOTAL (DOLLARS)</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>
                                    <?php
                                        foreach($_SESSION as $product){
                                            foreach($product as $key => $value){
                                                switch($key){
                                                    case '4':
                                                        $quantity  = $value;            
                                                        break;     
                                                    case '5':  
                                                        $price  = $value; 
                                                        break;
                                                } 
                                            }
                                            $tt = 0;
                                            $total = $price * $quantity;    
                                            $tt += $total;
                                            echo $tt;
                                        }
                                    ?> 
                                </th>
                                <th>
                                    <input type='submit' name='BUY' value='ORDER' class='btn btn-success btn-lg'>
                                    <input type='submit' name='CLEAR' value='CLEAR' class="btn btn-primary btn-lg">
                                </th>
                            </tr>                
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- </form> -->
        
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



