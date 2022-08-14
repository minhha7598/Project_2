<?php 
    include '../../../config/db.php';
    //GET id => return array
    $id = $_GET['id'];
    $row_up = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `user-data` WHERE `ID` = $id")); 

    //Update and confirm Error
    if(isset($_POST['sbm'])){
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check username exist vs !== username DB
        if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user-data` WHERE username ='$username'")) > 0){
            if($username !== $row_up['username']){
                $err = 'Username exist';
            }else{  
                 //Update into Database
                $query = mysqli_query($conn, "UPDATE `user-data` SET `fullname` = '$fullname',`phonenumber` = '$phonenumber',`username` = '$username',`password` = '$password' WHERE `ID` = $id");
                header('location: customer-admin.php');
            }
        }else{
            //Update into Database
            $query = mysqli_query($conn, "UPDATE `user-data` SET `fullname` = '$fullname',`phonenumber` = '$phonenumber',`username` = '$username',`password` = '$password' WHERE `ID` = $id");
            header('location: customer-admin.php');
        }  
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
                <h2>UPDATE CUSTOMER</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="">Fullname</label>
                        <input type="text" class="form-control" name = 'fullname' required value="<?php echo $row_up['fullname']; ?>">
                    </div>   
                    <div class="form-group">
                        <label for="">Phonenumber</label>
                        <input type="text" class="form-control" name = 'phonenumber' required value="<?php echo $row_up['phonenumber']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name = 'username' required value="<?php echo $row_up['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name = 'password' required value="<?php echo $row_up['password']; ?>">
                    </div> 
 
                    <div style="text-align: center;">
                        <a href="customer-admin.php"><button style="text-align: center;" type="button" class="btn btn-danger" id="btn">BACK</button></a>
                        <button type="submit" name='sbm' class='btn btn-success'>UPDATE</button><br>
                        <?php echo(isset($_POST['sbm']))?$err:false; ?>
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