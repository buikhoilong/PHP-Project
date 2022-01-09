<?php include '../database/db.php';

$loaiHD = $_POST['txtloaihd'];
$maHD = $_POST['txtmahd'];
$trangThai = $_POST['txttrangthai'];
$sql = "";
if ($loaiHD == 'N') {
    $maNCC = $_POST['txtmancc'];
    $sql = "UPDATE hoadon SET TRANGTHAI_HD = " . $trangThai . ",MA_NCC = '" . $maNCC . "' WHERE MAHD = '" . $maHD . "'";
} else {
    $maKH = $_POST['txtmakh'];
    $sql = "UPDATE hoadon SET MA_KH = '" . $maKH . "',TRANGTHAI_HD = " . $trangThai . " WHERE MAHD = '" . $maHD . "'";
}

$result = $conenct->prepare($sql);
$result->execute();
$count = $result->rowCount();

if ($count) { ?>
    <script>
        window.alert("Cập nhật thành công");
        window.location = "../../pages/billList.php";
    </script>
<?php
} else { ?>
    <script>
        window.alert("<?php echo "Lỗi: " . $sql . "    " . $connect->error; ?>");
        window.location = "../../pages/billList.php";
    </script> <?php
            }; ?>