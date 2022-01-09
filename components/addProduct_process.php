<?php
    // var_dump($_POST);
    $level = "../";
    include 'database/db.php';

    $maSP = $_POST['txtmasanpham'];
    $tenSP = $_POST['txttensanpham'];
    $giaNhap = $_POST['txtgianhap'];
    $giaBan = $_POST['txtgiaban'];
    $soLuong = $_POST['txtsoluong'];
    $trangThai = $_POST['txttrangthai'];
    $maLoai = $_POST['txtmaloaisanpham'];
    $maNCC = $_POST['txtmancc'];
    $moTa = $_POST['txtmota'];

    // $hinhAnh = $_FILES['hinhanh']['name'];

    $SQL_str_themSP = " INSERT INTO sanpham ( MASP, TENSP, GIA_NHAP, GIA_BAN, TONKHO, TRANGTHAI_SP, MALOAI, MA_NCC, MO_TA_SP)
                                    VALUES (:maSP, :tenSP, :giaNhap, :giaBan, :soLuong, :trangThai, :maLoai, :maNCC, :moTa) ";
    // $SQL_str_themAnh = " INSERT INTO khoihinh (MAHINH, MADOITUONG, TENFILE, GHICHU)
    //                                 VALUES (1, 2, :hinhAnh, 3) ";
    // $result = $conenct ->prepare($SQL_str_themAnh);

    // $result = $conenct ->prepare($SQL_str_themSP);
    if($result = $conenct ->prepare($SQL_str_themSP)){//Kiem tra
            echo 'Thêm thành công';
            
        }else{
            echo "Lỗi: " . $sql . "<br>" . $connect->error;
        };
    
    $result ->bindValue(':maSP' , $maSP,PDO::PARAM_STR);
    $result ->bindValue(':tenSP' , $tenSP,PDO::PARAM_STR);
    $result ->bindValue(':giaNhap' , $giaNhap,PDO::PARAM_INT);
    $result ->bindValue(':giaBan' , $giaBan,PDO::PARAM_INT);
    $result ->bindValue(':soLuong' , $soLuong,PDO::PARAM_INT);
    $result ->bindValue(':trangThai' , $trangThai,PDO::PARAM_INT);
    $result ->bindValue(':maLoai' , $maLoai,PDO::PARAM_STR);
    $result ->bindValue(':maNCC' , $maNCC,PDO::PARAM_STR);
    $result ->bindValue(':moTa' , $moTa,PDO::PARAM_STR);

    // $result ->bindValue(':hinhAnh',$hinhAnh,PDO::PARAM_STR);

    

    // var_dump($_FILES);

    // move_uploaded_file($_FILES["hinhanh"]["tmp_name"],
    //     $level."UPLOAD_ANH/" . $_FILES["hinhanh"]["name"]);
    $result->execute();

?>
<html>
<a href="<?php echo $level.'components/formAddProduct.php'?>">Trở lại</a>
</html>