<?php 
    $level = "../";
    include '../database/db.php';

    $maLoaiSP = $_POST['txtmaloaisanpham'];
    $tenLoaiSP = $_POST['txttenloaisanpham'];

    if(!$maLoaiSP||!$tenLoaiSP)
    {
        echo 'Vui lòng điền đầy đủ mã và tên loại sản phẩm.';
        exit();
    }
    $result=$conenct->prepare("INSERT INTO loaisanpham ( MALOAISP, TENLOAISP ) 
                                        VALUES ('".$maLoaiSP."','".$tenLoaiSP."')");
    
    $result->bindValue(':maLoaiSP',$maLoaiSP,PDO::PARAM_STR);
    $result->bindValue(':tenLoaiSP',$tenLoaiSP,PDO::PARAM_STR);
    $result->execute();
    $count=$result->rowCount();
    if($count)
    { ?>
        <script>
            window.alert("Thêm thành công");
            window.location = "../../pages/categoriesList.php";
        </script>
    <?php
    } else {?>
        <script>
            window.alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
            window.location = "../../pages/categoriesList.php";
        </script> <?php
    };
?>