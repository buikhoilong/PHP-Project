<?php
	 $level = "../";
     include 'database/db.php';
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
     $sanphamchitiet=$conenct->prepare('SELECT * FROM sanpham where MASP = :maSP');
     $sanphamchitiet ->bindValue(':maSP',$maSP,PDO::PARAM_STR);
     $sanphamchitiet->execute();
     $sanphamchitiet_rowsdata = $sanphamchitiet->fetchALL();
    //  var_dump($sanphamchitiet_rowsdata);

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
    </br><h1 align="center">Cập nhật thông tin sản phẩm</h1></br>
    <div>
        <form action="<?php echo $level.comp_path?>productRepair_process.php" method="POST" enctype="multipart/form-data">

        <input type="text" name = "txtmasanpham" hidden="true" value = "<?php echo $sanphamchitiet_rowsdata[0]['MASP'];?>"> 
        <!-- <input type="file" name="hinhanh" hidden="true" value = "<?php echo $row_hinh[0]['TENFILE'];?>"> -->
        <h4 align="center">Tên sản phẩm <input type="text" name = "txttensanpham" value = "<?php echo $sanphamchitiet_rowsdata[0]['TENSP'];?>"> </br> </br>
        Giá nhập <input type="numner_format" name ="txtgianhap" value = "<?php echo $sanphamchitiet_rowsdata[0]['GIA_NHAP'];?>"> </br> </br>
        Giá bán <input type="numner_format" name ="txtgiaban" value = "<?php echo $sanphamchitiet_rowsdata[0]['GIA_BAN'];?>"> </br> </br>
        Số lượng <input type="text" name = "txtsoluong" value = "<?php echo $sanphamchitiet_rowsdata[0]['TONKHO'];?>"> </br> </br>
        Trạng thái <input type="text" name = "txttrangthai" value = "<?php echo $sanphamchitiet_rowsdata[0]['TRANGTHAI_SP'];?>"> </br> </br>
            
            Mã loại sản phẩm
            <select name ="txtmaloaisanpham">
                <?php foreach ($row_loaisp as $loaisp)
                {
                    echo ($loaisp['MALOAI']);
                ?>
                    <option value = "<?php echo $loaisp['MALOAISP'];?>"
                        <?php
                        if($loaisp['MALOAISP'] == $sanphamchitiet_rowsdata[0]['MALOAISP'])
                            echo "selected = 'selected'";?> >
                            <?php echo ($loaisp['MALOAISP']);?>    
                    </option>
                <?php
                }
                ?>
            </select>
            </br> </br>
            Nhà cung cấp
            <select name ="txtmancc">
            <?php foreach ($row_NCC as $NCC)
                {
                    echo ($NCC['MANCC']);
                ?>
                    <option value = "<?php echo $NCC['MANCC'];?>"
                        <?php
                        if($loaisp['MANCC'] == $$row_NCC[0]['MANCC'])
                            echo "selected = 'selected'";?> >
                            <?php echo ($NCC['MANCC']);?>    
                    </option>
                <?php
                }
                ?>
            </select>

            </br> </br>
            <!-- Hình ảnh
                    <img src="<?php echo $level.'img/'.$row_hinh[0]['TENFILE'];?>"></br> </br> -->

            Mô tả <input type="text" name = "txtmota" value = "<?php echo $sanphamchitiet_rowsdata[0]['MO_TA_SP'];?>"> </br> </br>
            <button type="submit"> Cập nhật </button> </h4>
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