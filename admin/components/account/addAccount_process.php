<?php include '../database/db.php';
 $maTK = $_POST['txtmatk'];
 $tenTK = $_POST['txttentk'];
 $matKhau = $_POST['txtmatkhau'];
 $email = $_POST['txtemail'];
 $moTa = $_POST['txtmota'];
 $trangThai = 1;
 $loaiTK = $_POST['txtloaitk'];

 if(!$tenTK||!$email||!$maTK|!$loaiTK)
    {
        echo 'Vui lòng điền đầy thông tin tài khoản.';
        exit();
    }
    $result=$conenct->prepare("INSERT INTO taikhoan ( MATAIKHOAN, USERNAME, PASSWORD, EMAIL, MOTA_TK, TRANGTHAI_TK, LOAI_TK ) 
                                        VALUES ('".$maTK."','".$tenTK."','".$matKhau."','".$email."','".$moTa."',1,'".$loaiTK."')");
    
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
            window.alert("Thêm thành công");
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