<?php
    session_start();
    // session_destroy();

    $name = $_POST['Product-name'];
    $image = $_POST['Image'];
    $brand = $_POST['Brand'];
    $quality = $_POST['Quality'];
    $quantity = $_POST['Quantity'];
    $price = $_POST['Price'];

    $product = array($name,$image,$brand,$quality,$quantity,$price);
    $_SESSION[$name] = $product;

    header("location:index-login.php?value=created");

?>