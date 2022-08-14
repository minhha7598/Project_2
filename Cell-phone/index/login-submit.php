<?php 
    include '../../config/db.php'; 
    session_start();
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        $error = array();
    
        if(!empty($username)&&!empty($password)){
            $_SESSION['username'] = $username;
            //Check DB - exist acc
            if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user-data` WHERE `username` = '$username' AND `password` = md5('$password')")) >0){
                //Check DB - admin
                if($username =='admin' && $password == '123'){
                    header('location:../admin/admin.php');
                }else{
                    // $value = mysqli_query($conn, "SELECT `username` FROM `user-data` WHERE `username` = '$username' "); 
                    header('location: index-login.php');
                }
            }else{
                header('location:index.php');
            }    
        }else{
            // $error['required'] = 'Required information';
            header('location:index.php');
        }   
        
    }
  
?>