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
	$result=$conenct->prepare("SELECT Count(MAHD) from hoadon where LOAIHD = 'X'");
    $result->execute();
    $rowsdata = $result->fetchALL();
    session_start();
?>


<p>  <?php 
    $MAHD = $rowsdata[0][0] + 1;
?>
</p>

<?php

date_default_timezone_set("Asia/Ho_Chi_Minh");
$ngaylap=date("Y-m-d H:i:s");

$SQLinsertHD = " INSERT INTO `hoadon`(`MAHD`, `MA_KH`, `TONGTIEN`, `LOAIHD`, `TRANGTHAI_HD`, `MA_NCC`, `NGAYLAP_HD`) 
VALUES ('HD-X-".$MAHD."', '".$_SESSION['login']['ID_User']."' , ".$_SESSION['cart_total'].", 'X', 1,NULL, '".$ngaylap."')";


if( $resulthd = $conenct->prepare($SQLinsertHD)){
    $resulthd->execute();
    foreach($_SESSION['cart_item'] as $cartitem)
    {
        $SQLinsertCTHD = "INSERT INTO `chitiet_hoadon`(`MA_HD`, `MA_SP`, `TRANGTHAI_CTHD`, `SOLUONG`, `DONGIA`) 
        VALUES ('HD-X-".$MAHD."','".$cartitem['MASP']."',1,'".$cartitem['soluong']."','".$cartitem['GIA_BAN']."')";
        if($result = $conenct->prepare($SQLinsertCTHD))
        {
            $result->execute();
        }
    }
    ?>
    <script>
        window.alert("Tạo đơn hàng thành công!!");
        window.location = "../pages/delcart.php?id=0";
    </script>
<?php
}
?>



