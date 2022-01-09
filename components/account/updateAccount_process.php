<?php
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

$maKH = $_POST['txtmakh'];
$tenkh = $_POST['txttenkhachhang'];
$sdt = $_POST['txtsodienthoai'];
$diachi = $_POST['txtdiachi'];
$email = $_POST['txtemail'];


if ($result = $conenct->prepare("UPDATE khachhang SET TENKH = '" . $tenkh . "', SDT_KH = '" . $sdt . "',DC_KH = '" . $diachi . "',EMAIL_KH ='" . $email . "' WHERE MAKH ='" . $maKH . "'")) { ?>
    <script>
        window.alert("Thay đổi thông tin thành công");
        window.location = "../../pages/account.php";
    </script>
<?php } else { ?>
    <script>
        alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
    </script>
<?php };

$result->execute();
echo  "Done!";
?>