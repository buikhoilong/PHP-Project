<?php include '../database/db.php';
$maTK = $_POST['txtmatk'];
$tenTK = $_POST['txttentk'];
$matKhau = $_POST['txtmatkhau'];
$email = $_POST['txtemail'];
$moTa = $_POST['txtmota'];
$trangThai = $_POST['txttrangthai'];
$loaiTK = $_POST['txtloaitk'];


$result=$conenct->prepare("UPDATE taikhoan SET USERNAME = '".$tenTK."', PASSWORD = '".$matKhau."', EMAIL = '".$email."', MOTA_TK = '".$moTa."', TRANGTHAI_TK = ".$trangThai.", LOAI_TK = '".$loaiTK."'WHERE MATAIKHOAN = '".$maTK."'"); 

$result->bindValue(':maTK', $maTK, PDO::PARAM_STR);
$result->bindValue(':tenTK', $tenTK, PDO::PARAM_STR);
$result->bindValue(':matKhau', $matKhau, PDO::PARAM_STR);
$result->bindValue(':email', $email, PDO::PARAM_STR);
$result->bindValue(':moTa', $moTa, PDO::PARAM_STR);
$result->bindValue(':trangThai', $trangThai, PDO::PARAM_INT);
$result->bindValue(':loaiTK', $loaiTK, PDO::PARAM_STR);
$result->execute();
$count=$result->rowCount();
if($count)
{?>
    <script>
        window.alert("Cập nhật thành công");
        window.location = "../../pages/accountList.php";
    </script>
<?php
} else {?>
    <script>
        window.alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
        window.location = "../../pages/accountList.php";
    </script> <?php
};
?>