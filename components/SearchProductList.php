<?php
	  $level = "../";
      include 'database/db.php';
      include_once ($level."config.php");
	$host_name='localhost';
	$db_name='qly_ban_hang_linh_kien';
	$user_name='root';
	$password='root';
	try{
		$conenct = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name,$password);
		$conenct->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'thanh cong';
	}
	catch(PDOException $e)  {
	    echo $e->getMessage();
	}
    $tsp = $_GET['txtMaLoai'];

	
    $result = $conenct->prepare("SELECT * FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = 'Cover' 
    AND (MALOAI = '" .$tsp. "' or MASP = '" .$tsp. "' or MA_NCC = '" .$tsp. "')");
    $result ->execute();
    $rowdata = $result->fetchAll();


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

<html lang="en">
<body>
</br><h1 align="center">Chức năng quản lý sản phẩm</h1> </br>
                            <form class="form-inline" action="SearchProductList.php" method="get" name="txtMaLoai">
								<input style="width:90%" name="txtMaLoai" class="form-control mr-sm-2" type="text" placeholder="Tìm Kiếm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit"  >Tìm Kiếm</button>
							</form>
    <table cellspacing='0' border='1' id = 'dsSanPham'>
        <tr align="center">
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá nhập</th>
            <th>Giá bán</th>
            <th>Số lượng</th>
            <th width=20px>Trạng thái</th>
            <th>Mã loại</th>
            <th>Mã nhà cung cấp</th>
            <th>Mô tả </th>
        </tr>
        <?php 
        foreach ($rowdata as $sp)
            {
        ?>
                <tr align="center">
                    <td><?php echo $sp['MASP'];?></td>
                    <td><?php echo $sp['TENSP'];?></td>
                    <td><?php echo $sp['GIA_NHAP'];?></td>
                    <td><?php echo $sp['GIA_BAN'];?></td>
                    <td><?php echo $sp['TONKHO'];?></td>
                    <td><?php echo $sp['TRANGTHAI_SP'];?></td>
                    <td><?php echo $sp['MALOAI'];?></td>
                    <td><?php echo $sp['MA_NCC'];?></td>
                    <td><?php echo $sp['MO_TA_SP'];?></td>
                    <td><a href="<?php echo $level.'components/productRepair.php?id='.$sp['MASP'];?>">Sửa</a></td>
                    <td><a href="<?php echo $level. 'components/productDelete_process.php?id='.$sp['MASP'];?>">Xóa</a></td>
                </tr>
        <?php
            }
        ?>
    </table>
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