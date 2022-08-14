<?php
    // include '../../config/db.php';
    session_start();
   
    if(isset($_POST['add-to-cart'])){
        if(isset($_SESSION['cart'])){

        }else{
            $_SESSION['cart'][0] = array('Product-Name' =>  $_POST['add-to-cart'],
                                             
        );
        }
    }
?>