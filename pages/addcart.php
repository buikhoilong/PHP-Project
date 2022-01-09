<?php
    include '../db2.php';
    session_start();
    $id =$_GET['id'];
    $sp=DP::run_query('SELECT * FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = "Cover" and MASP=? ',[$id],2);
    $Tenfile = $sp[0]['TENFILE'];
    $Ten = $sp[0]['TENSP'];
    $Gia = $sp[0]['GIA_BAN'];
    $NCC = $sp[0]['MA_NCC'];
    $SoLuongTonKho = $sp[0]['TONKHO'];
    $MaSP = $sp[0]['MASP'];
    if(isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]['soluong'] = $_SESSION['cart'][$id]['soluong'] +1;
    }
    else{
        $_SESSION['cart'][$id] = array("MASP" => $id, "TENSP" => $Ten,"GIA_BAN" =>$Gia,"MA_NCC" =>$NCC,"soluong" =>1, "TENFILE" => $Tenfile, "TONKHO" => $SoLuongTonKho , "MASP" => $MaSP);
    }
    var_dump($_SESSION);
    header("location:cart.php");
?>