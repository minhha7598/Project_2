<?php
    session_start();

    $name = $_POST['product-name'];
    $image = $_POST['image'];
    $brand = $_POST['brand'];
    $quality = $_POST['quality'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $product = array($name,$image,$brand,$quality,$quantity,$price);
    $_SESSION[$name] = $product;

    header("location:index.php?value=created");

?>