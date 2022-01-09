<?php
	$host_name='localhost';
	$db_name='qly_ban_hang_linh_kien';
	$user_name='root';
	$password='root';
	try{
		$conenct = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name,$password);
		$conenct->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'thanh cong';
	}
	catch(PDOException $e)  {
	    echo $e->getMessage();
	}
    $tsp = $_GET['txtMaLoai'];
    $result = $conenct->prepare("SELECT TENSP, GIA_BAN, TENFILE,MASP FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = 'Cover' AND MALOAI = '" .$tsp. "'");
    $result ->execute();
    $rowdata = $result->fetchAll();

?> 
<?php
$level= "../";
include_once ($level."config.php");
$isSearch = true;
include_once ($level."layout.php");
?>
