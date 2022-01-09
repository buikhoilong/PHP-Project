<?php $level = "../../";
     include '../database/db.php';
     include_once ($level."config.php");

    //  $result=$conenct->prepare('SELECT * FROM khoihinh');
    //  $result->execute();
    //  $row_hinh = $result->fetchALL();

    $result3=$conenct->prepare('SELECT MANCC FROM nhacungcap');
     $result3->execute();
     $row_NCC = $result3->fetchALL();

     $result2=$conenct->prepare('SELECT * FROM loaisanpham');
     $result2->execute();
     $row_loaisp = $result2->fetchALL();
     $maSP=$_GET['id'];
        $resultTK=$conenct->prepare("SELECT MAKH,TENKH, SDT_KH, DC_KH,EMAIL_KH FROM khachhang WHERE MAKH = '".$maSP."' ");
     $resultTK->execute();
     $rowdataTK = $resultTK->fetchALL();

?>
<html lang="en">
<head>
<?php include ($level.comp_path.'headTitle.php')?>
</head>
<body>
<?php

// <!-- top-header -->
include ($level.comp_path.'topHeader.php');//trở về thư mục cha xong vào lại components rồi vào trang topheader.php.

// <!-- Button trigger modal(select-location) -->
 include ($level.comp_path.'selectLocation.php'); 
// <!-- //shop locator (popup) -->

// <!-- modals -->
// <!-- log in -->
 include ($level.comp_path.'login.php'); 
// <!-- register -->
 include ($level.comp_path.'register.php'); 
// <!-- //modal -->
// <!-- //top-header -->

// <!-- header-bottom-->
 include ($level.comp_path.'header-bottom.php'); 
// <!-- shop locator (popup) -->
// <!-- //header-bottom -->
// <!-- navigation -->
 include ($level.comp_path.'navigation.php'); 
// <!-- //navigation -->

?>


    </br><h1 align="center">Cập nhật thông tin khách hàng</h1></br>
    <div >
        <form action="<?php echo $level.comp_path.'account/updateAccount_process.php'?>" id="ma" method="POST" enctype="multipart/form-data">
        <input type="numner_format" name = "txtmakh" hidden="true" value = "<?php echo $rowdataTK[0]['MAKH'];?>"> 
        <h4 align="center">Tên Khách Hàng <input type="text" id="ten" name = "txttenkhachhang" value = "<?php echo $rowdataTK[0]['TENKH'];?>"> </br> </br>
        Số Điện Thoại <input type="text" id="sdt" name ="txtsodienthoai" value = "<?php echo $rowdataTK[0]['SDT_KH'];?>"> </br> </br>
        Địa Chỉ <input type="text" id="dc" name ="txtdiachi" value = "<?php echo $rowdataTK[0]['DC_KH'];?>"> </br> </br>
        Email <input type="text" id="email" name = "txtemail" value = "<?php echo $rowdataTK[0]['EMAIL_KH'];?>"> </br> </br>
            <button type="submit" class="capnhat"> Cập nhật </button> </h4>
        </form>
    </div>

<?php


// <!-- middle section -->
include ($level.comp_path.'middle-section.php');
// <!-- //middle section -->

// <!-- footer -->
 include ($level.comp_path.'footer.php');
// <!-- //footer -->
// <!-- copyright -->
 include ($level.comp_path.'copyright.php');
// <!-- //copyright -->

// <!-- js-files -->
 include ($level.comp_path.'js-files.php');
// <!-- //js-files -->

?>
</body>
</html>