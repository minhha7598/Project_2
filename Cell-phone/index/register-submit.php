<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/register-submit.css">
    <title>REGISTER</title>
</head>
<body>
<?php include '../../config/db.php'; 
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $username = $_POST['username'];  
    $password = $_POST['pwd']; 
    $repassword = $_POST['pwd'];
    // $error;  
    
    if(!empty($fullname) && !empty($phonenumber) && !empty($username) && !empty($password) && !empty($repassword)){    
        switch ($password) {
            case $repassword:
                //Check username exist
                if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user-data` WHERE fullname = '$fullname' or username ='$username'")) > 0){
                    header('location: register.php');
                }else{
                //Insert into database
                mysqli_query($conn,"INSERT INTO `user-data`(`fullname`,`phonenumber`,`address`,`username`,`password`) VALUES ('$fullname','$phonenumber', $address','$username',md5('$password'))");
                    echo 'SUCCESSFULLY REGISTER :>';
                };
                break;
            default:
                header('location: register.php');
        }
    }else{
        // $error = 'You must fill all information!';
        header('location: register.php');
    }    
}    
?><br>
    <a href="index.php">
        <button type="button" class="btn btn-danger">HOME PAGE</button>
    </a>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>