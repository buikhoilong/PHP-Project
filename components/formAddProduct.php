<!-- <?php
//trở về thư mục cha ở ngoài thôi
// <!-- top-header -->
// include ($level.comp_path.'topHeader.php');
//trở về thư mục cha và vào lại trang config
?> -->
<?php
    $level = "../";
    include 'database/db.php';
    include_once ($level."config.php");

     $result=$conenct->prepare('SELECT MALOAISP FROM loaisanpham');
     $result->execute();
     $row_loaisp = $result->fetchALL();

     $result=$conenct->prepare('SELECT MANCC FROM nhacungcap');
     $result->execute();
     $row_NCC = $result->fetchALL();

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

<html>
<body>
</br><h1 align="center">Thêm sản phẩm mới</h1></br>
    <div>
        <form action="<?php echo $level.comp_path.'addProduct_process.php'?> " method="POST" enctype="multipart/form-data">
        <h4 align="center">Mã sản phẩm <input type="text" name = "txtmasanpham"> </br> </br> 

        Tên sản phẩm <input type="text" name = "txttensanpham"> </br> </br>

        Giá nhập <input type="numner_format" name ="txtgianhap"> </br> </br>

        Giá bán <input type="numner_format" name ="txtgiaban"> </br> </br>

        Số lượng <input type="text" name = "txtsoluong"> </br> </br>

        Trạng thái <input type="text" name = "txttrangthai"> </br> </br>
            
            Mã loại sản phẩm
            <select name ="txtmaloaisanpham">
                <?php foreach ($row_loaisp as $loaisp)
                {
                ?>
                    <option value="<?php echo $loaisp['MALOAISP'];?> "> 
                    <?php echo $loaisp['MALOAISP'];?>                   
                    </option>
                <?php
                }
                ?>
            </select>
            </br> </br>
            Mã nhà cung cấp
            <select name ="txtmancc">
                <?php foreach ($row_NCC as $NCC)
                {
                ?>
                    <option value="<?php echo $NCC['MANCC'];?>">
                    <?php echo $NCC['MANCC'];?>
                    </option>
                <?php
                }
                ?>
            </select>

            </br> </br>
            <!-- Hình ảnh <input type="file" name="hinhanh"> </br> </br> -->
            Mô tả <input type="text" name = "txtmota"> </br> </br>
            <button type="submit"> Thêm </button></br> </br> </h4>
        </form>
    </div>
</body>

</html>

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