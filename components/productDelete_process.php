<?php
     $level = "../";
     include 'database/db.php';

        $id=$_GET['id'];
        echo $id;
        $result=$conenct->prepare("DELETE FROM sanpham where MASP = '".$id."'");
        $result->execute();
?>
<html>
    <body>
        <a href="<?php echo $level.'components/productManage.php'?>">Trở lại</a>
    </body>
</html>