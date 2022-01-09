<?php
//Thế đoạn Begin-end:DataBase bên dưới = include(database.php)
  //Begin: DataBase
  $host_name = 'localhost';
  $db_name = 'qly_ban_hang_linh_kien';
  $user_name = 'root';
  $password = 'root';
  try {
    $conenct = new PDO("mysql:host=$host_name;dbname=$db_name", $user_name, $password);
    $conenct->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
 //End: DataBase

//Lấy dữ liệu từ AJAX
$noidung = $_POST["noidung"];
$id = $_POST["masp"];

date_default_timezone_set("Asia/Ho_Chi_Minh");
$ngaylap = date("Y-m-d H:i:s");
$SQLThemBL = "INSERT INTO `binhluan`(`MATAIKHOAN`, `MASANPHAM`, `NOIDUNG_BINHLUAN`, `THOIGIAN`, `TRANGTHAI_BINHLUAN`) 
    VALUES (2,'".$id."','".$noidung."','" . $ngaylap . "',1)";
$resultcomment = $conenct->prepare($SQLThemBL);
$resultcomment->execute();


echo $noidung . "   " . $SQLThemBL. "         ". $id;
    
	
