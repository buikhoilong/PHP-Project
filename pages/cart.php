<?php
$level= "../";
include_once ($level."config.php");
$isIndex = false;
$isAbout = false;
$isAccount = false;
$isCheckout = true;
$isContact = false;
$isFaqs = false;
$isHelp= false;
$isPayment = false;
$isPrivacy = false;
$isProduct = false;
$isProduct2 = false;
$isSearch = false;
$isSingle = false;
$isSingle2 = false;
$isTerms = false;
include_once ($level."layout.php");
?>





<p>  <?php 
    $MAHD = $rowsdata[0][0] + 1;
?>
</p>

<?php

date_default_timezone_set("Asia/Ho_Chi_Minh");
$ngaylap=date("Y-m-d H:i:s");


$SQLinsertHD = " INSERT INTO `hoadon`(`MAHD`, `MA_KH`, `TONGTIEN`, `LOAIHD`, `TRANGTHAI_HD`, `MA_NCC`, `NGAYLAP_HD`) 
VALUES ('HD-X-".$MAHD."', 2, ".$total.", 'X', 1,'NULL', ".$ngaylap.")";
if($resulthd = $conenct->prepare($SQLinsertHD)){
    $resulthd->execute();
    foreach($_SESSION['cart'] as $cartitem)
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
