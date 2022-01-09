<?php

$level = "../../";
include_once($level . "config.php");
include_once($level . "dbConnection.php");

$maSP = $_POST['txtmasanpham'];
$tenSP = $_POST['txttensanpham'];
$giaNhap = $_POST['txtgianhap'];
$giaBan = $_POST['txtgiaban'];
$soLuong = $_POST['txtsoluong'];
$trangThai = $_POST['txttrangthai'];
$maLoai = $_POST['txtmaloaisanpham'];
$maNCC = $_POST['txtmancc'];
$moTa = $_POST['txtmota'];



$SQL_str_CapNhatSP = " UPDATE sanpham
                        SET TENSP = :tenSP,
                        GIA_NHAP = :giaNhap,
                        GIA_BAN = :giaBan,
                        TONKHO = :tonKho,
                        TRANGTHAI_SP = :trangThai,
                        MALOAI = :maLoai,
                        MA_NCC = :maNCC,
                        MO_TA_SP = :moTa,
                        WHERE MASP = :masP ";
if ($result = $conenct->prepare(" UPDATE sanpham 
    SET TENSP = '" . $tenSP . "',GIA_NHAP = '" . $giaNhap . "',GIA_BAN = '" . $giaBan . "', TONKHO = '" . $soLuong . "',TRANGTHAI_SP = '" . $trangThai . "',MALOAI = '" . $maLoai . "', MA_NCC = '" . $maNCC . "',MO_TA_SP = '" . $moTa . "'
    WHERE MASP = '" . $maSP . "' ")) { ?>
    <script>
        window.alert("Thêm thành công");
        window.location = "../../pages/productList.php";
    </script>
<?php
} else {?>
    <script>
        window.alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
        window.location = "../../pages/productList.php";
    </script> <?php
};

$result->bindValue(':tenSP', $tenSP, PDO::PARAM_STR);
$result->bindValue(':giaNhap', $giaNhap, PDO::PARAM_INT);
$result->bindValue(':giaBan', $giaBan, PDO::PARAM_INT);
$result->bindValue(':soLuong', $soLuong, PDO::PARAM_INT);
$result->bindValue(':trangThai', $trangThai, PDO::PARAM_INT);
$result->bindValue(':maLoai', $maLoai, PDO::PARAM_STR);
$result->bindValue(':maNCC', $maNCC, PDO::PARAM_STR);
$result->bindValue(':moTa', $moTa, PDO::PARAM_STR);
$result->bindValue(':maSP', $maSP, PDO::PARAM_STR);
$result->execute();

if($_FILES['hinhanh']['name']=="")
        $anh = $_POST['txthinhanh'];
    else
        $anh = $_FILES['hinhanh']['name'];
    $result1 = $conenct ->prepare("UPDATE khohinh SET TENFILE = '$anh' WHERE MADOITUONG = '".$maSP."' AND GHICHU = 'Cover' ");
    $result1 ->bindValue(':anh',$anh,PDO::PARAM_STR);
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $level."upload_anh/" . $_FILES["hinhanh"]["name"]);
    $result1->execute();
?>