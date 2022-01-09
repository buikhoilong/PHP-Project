<?php
    session_start();
    $idsp = $_GET ['id'];
    if($id != "null")
    {
        unset($_SESSION['cart'][$idsp]);
    }
    else
    {
        unset ($_SESSION['cart']);
    }
    header("location:Checkout.php");
    exit();
?>