<?php
    session_start();
    $idsp = $_GET ['id'];
    if($id == 0)
    {
        unset ($_SESSION['cart']);
    }
    else
    {
        unset($_SESSION['cart'][$idsp]);
    }
    header("location:../index.php");
    exit();
?>