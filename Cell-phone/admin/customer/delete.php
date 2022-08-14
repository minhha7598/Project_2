<?php
    include '../../../config/db.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn,"DELETE FROM `user-data` WHERE `ID`= $id");
    header('location:customer-admin.php');
?>