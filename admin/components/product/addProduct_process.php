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



$SQL_str_themSP = " INSERT INTO sanpham ( MASP, TENSP, GIA_NHAP, GIA_BAN, TONKHO, TRANGTHAI_SP, MALOAI, MA_NCC, MO_TA_SP)
                                    VALUES (:maSP, :tenSP, :giaNhap, :giaBan, :soLuong, :trangThai, :maLoai, :maNCC, :moTa) ";
if ($result = $conenct->prepare($SQL_str_themSP)) { ?>
    <script>
        window.alert("Thêm sản phẩm thành công");
        // window.location = "../pages/addProduct.php";
    </script>
<?php
} else {
    ?>
    <script>
        window.alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
        window.location = "../pages/addProduct.php";
    </script> <?php
    
};

$result->bindValue(':maSP', $maSP, PDO::PARAM_STR);
$result->bindValue(':tenSP', $tenSP, PDO::PARAM_STR);
$result->bindValue(':giaNhap', $giaNhap, PDO::PARAM_INT);
$result->bindValue(':giaBan', $giaBan, PDO::PARAM_INT);
$result->bindValue(':soLuong', $soLuong, PDO::PARAM_INT);
$result->bindValue(':trangThai', $trangThai, PDO::PARAM_INT);
$result->bindValue(':maLoai', $maLoai, PDO::PARAM_STR);
$result->bindValue(':maNCC', $maNCC, PDO::PARAM_STR);
$result->bindValue(':moTa', $moTa, PDO::PARAM_STR);
$result->execute();

$hinhAnh = $_FILES['hinhanh']['name'];
$result1 = $conenct->prepare("INSERT INTO khohinh (MADOITUONG, TENFILE, GHICHU) VALUES('".$maSP."','" . $hinhAnh . "', 'Cover')");
move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $level . "upload_anh/" . $_FILES["hinhanh"]["name"]);
$result1->execute();
$count = $result1->rowCount();
if ($count) {?>
    <script>
        window.alert("Thêm hình sản phẩm thành công");
        window.location = "../../pages/addProduct.php";
    </script>
<?php
} else {?>
    <script>
        window.alert("Lỗi");
        window.location = "../../pages/addProduct.php";
    </script>
<?php
};
?>