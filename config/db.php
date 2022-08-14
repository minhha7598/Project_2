<?php
    $conn = new mysqli('localhost','root','','cellphone-project');
    echo (!$conn)?'Unsuccessfully connect database':false;
?>