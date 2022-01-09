<?php
    // var_dump($_POST);
    $level = "../";
    include 'database/db.php';
    //include_once ($level."config.php");

    $maSP = $_POST['txtmasanpham'];
    $tenSP = $_POST['txttensanpham'];
    $giaNhap = $_POST['txtgianhap'];
    $giaBan = $_POST['txtgiaban'];
    $soLuong = $_POST['txtsoluong'];
    $trangThai = $_POST['txttrangthai'];
    $maLoai = $_POST['txtmaloaisanpham'];
    $maNCC = $_POST['txtmancc'];
    $moTa = $_POST['txtmota'];

    // if($_FILES['hinhanh']['name']=="")
    //     $anh = $_POST['hinhanh']['name'];
    // else
    // $anh = $_FILES['hinhanh']['name'];

    $SQL_str_CapNhatSP =" UPDATE sanpham
                        SET TENSP = :tenSP,
                        GIA_NHAP = :giaNhap,
                        GIA_BAN = :giaBan,
                        TONKHO = :tonKho,
                        TRANGTHAI_SP = :trangThai,
                        MALOAI = :maLoai,
                        MA_NCC = :maNCC,
                        MO_TA_SP = :moTa,
                        WHERE MASP = :maSP ";
    //$result = $conenct ->prepare($SQL_str_themAnh);
    if($result = $conenct ->prepare("UPDATE sanpham SET TENSP = '".$tenSP."', GIA_NHAP = '".$giaNhap."',GIA_BAN = '".$giaBan."',TONKHO ='".$soLuong."',TRANGTHAI_SP='".$trangThai."',MALOAI ='".$maLoai."',MA_NCC='".$maNCC."',MO_TA_SP='".$moTa."' WHERE MASP ='".$maSP."'")){?>
        <script> alert("Thành công"); </script>
    <?php }else{?>
        <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

    $result->bindValue(':tenSP',$tenSP,PDO::PARAM_STR);
    $result ->bindValue(':giaNhap' , $giaNhap,PDO::PARAM_INT);
    $result ->bindValue(':giaBan' , $giaBan,PDO::PARAM_INT);
    $result ->bindValue(':soLuong' , $soLuong,PDO::PARAM_INT);
    $result ->bindValue(':trangThai' , $trangThai,PDO::PARAM_INT);
    $result ->bindValue(':maLoai' , $maLoai,PDO::PARAM_STR);
    $result ->bindValue(':maNCC' , $maNCC,PDO::PARAM_STR);
    $result ->bindValue(':moTa' , $moTa,PDO::PARAM_STR);
    $result ->bindValue(':maSP' , $maSP,PDO::PARAM_STR);

    $result->execute();
    // $result ->bindValue(':anh',$anh,PDO::PARAM_STR);

    // var_dump($_FILES);
    // move_uploaded_file($_FILES["hinhanh"]["tmp_name"],
    //     $level."UPLOAD_ANH/" . $_FILES["hinhanh"]["name"]);
    
?>

<html>
<body>
<a href="<?php echo $level.'components/productManage.php'?>">Trở lại</a>
</body>
</html>