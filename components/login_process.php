<?php
session_start();
$level = "../";
include 'database/db.php';

if (isset($_POST['Tendangnhap'])) {
    exit("Đăng nhập thất bại");
}
$tenDangNhap = $_POST['txttendangnhap'];
$matKhau = $_POST['txtmatkhau'];




$sql = "SELECT MATAIKHOAN,USERNAME,PASSWORD, TRANGTHAI_TK, LOAI_TK FROM taikhoan WHERE USERNAME = '$tenDangNhap' AND PASSWORD ='$matKhau' and TRANGTHAI_TK <>0";
$taikhoan = $conenct->prepare($sql);
$taikhoan->execute();
$dataTaiKhoan = $taikhoan->fetchAll();

$sql2 = "SELECT TENKH FROM khachhang WHERE MAKH = '" . $dataTaiKhoan[0]['MATAIKHOAN'] . "' ";
$khachhang = $conenct->prepare($sql2);
$khachhang->execute();
$tenkh = $khachhang->fetchAll()[0]['TENKH'];
$count = $taikhoan->rowCount();
var_dump($count);
if ($count) {
    $_SESSION['login']['tenKhachHang'] = $tenkh;
    $_SESSION['login']['ID_User'] = $dataTaiKhoan[0]['MATAIKHOAN'];
    if ($dataTaiKhoan[0]['LOAI_TK'] == "KH") {
        ?>
        <script>
            alert("Đăng nhập thành công!");
            history.back();
        </script><?php } 
    else header("location:" . $level . 'admin/');
            } else { ?><script>
        alert("Đăng nhập thất bại!");

        history.back();
    </script> <?php
            }
                ?>
