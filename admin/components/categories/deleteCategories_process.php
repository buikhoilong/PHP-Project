<?php
     $level = "../";
     include 'database/db.php';

        $maLoaiSP=$_GET['id'];
        $result=$conenct->prepare("DELETE FROM loaisanpham where MALOAISP = '".$maLoaiSP."'");
        $result->execute();
        if($result==true){?>
            <script> alert("Xóa thành công");
            window.location = "../../pages/categoriesList.php" </script>
        <?php }else{?>
            <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
            window.location = "../../pages/categoriesList.php" </script> 
        <?php };
?>