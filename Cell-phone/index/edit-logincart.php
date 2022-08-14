<?php
   session_start();

   if(isset($_POST['event'])){
       $name = $_POST['0'];
       $imgage = $_POST['1'];
       $brand = $_POST['2'];
       $quantity = $_POST['3'];
       $quantity = $_POST['4'];
       $price = $_POST['5'];

       $product = array($name,$image,$brand,$quality,$quantity,$price);
       $_SESSION[$name] = $product;

       if($_POST['event'] == "Update"){
           $_SESSION[$name] = $product;
           header('location:login-cart.php?value=updated');
       }
       if($_POST['event'] == "Delete"){
           unset($_SESSION[$name]);
           header('location:login-cart.php?value=deleted');
       }  
   }
?>