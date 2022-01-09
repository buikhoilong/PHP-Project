<?php
    $level = "../../";
    include '../database/db.php';

    $maLoaiSP = $_POST['txtmaloaisanpham'];
    $tenLoaiSP = $_POST['txttenloaisanpham'];

    if($result = $conenct ->prepare("UPDATE loaisanpham SET MALOAISP='".$maLoaiSP."', TENLOAISP='".$tenLoaiSP."' WHERE MALOAISP ='".$maLoaiSP."'")){?>
        <script>
            window.alert("Cập nhật thành công");
            window.location = "../../pages/categoriesList.php";
        </script>
    <?php
    } else {?>
        <script>
            window.alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
            window.location = "../../pages/categoriesList.php";
        </script> <?php
    };

    $result->bindValue(':tenLoaiSP',$tenloaiSP,PDO::PARAM_STR);
    $result ->bindValue(':maloaiSP' , $maloaiSP,PDO::PARAM_STR);

    $result->execute();
?>

<html>
<body>
<a href="<?php echo $level.'components/productTypeManage.php'?>">Trở lại</a>
</body>
</html>