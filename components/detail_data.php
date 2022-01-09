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
    $MASP = $_GET['id'];
    $sanphamchitiet = $conenct->prepare('SELECT MASP, TENSP, GIA_BAN, TENFILE, MO_TA_SP FROM sanpham, khohinh where MASP=:MASP AND MASP = MADOITUONG AND GHICHU = "Cover"  limit 1');
    $sanphamchitiet->bindValue(':MASP',$MASP,PDO::PARAM_STR_CHAR);
    $sanphamchitiet->execute();
    $sanphamchitiet_rowdata = $sanphamchitiet->fetchAll();
?>

