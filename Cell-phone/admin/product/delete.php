<?php
    include '../../../config/db.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn,"DELETE FROM `product-data` WHERE `ID`= $id");
    header('location:product-admin.php');
?>