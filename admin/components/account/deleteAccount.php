<?php
     include '../database/db.php';

    $id=$_GET['id'];
    $result=$conenct->prepare("UPDATE taikhoan SET TRANGTHAI_TK = 0 where MATAIKHOAN = '".$id."'");
    $result->execute();
    if($result==true){?>
        <script> alert("Khoá tài khoản thành công");
        window.location = "../../pages/accountList.php" </script>
    <?php }else{?>
        <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>");
        window.location = "../../pages/accountList.php" </script> 
    <?php }
?>