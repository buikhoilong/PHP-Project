

<?php 
session_start();

if (isset($_SESSION['login'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$level= "../";
include_once ($level."config.php");
include ($level.comp_path.'headTitle.php')?>
</head>
<body>
<?php

// <!-- top-header -->
include ($level.comp_path.'topHeader.php');

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

include ($level.comp_path.'checkout/banner-2.php'); 
include ($level.comp_path.'checkout/page.php'); 

?>

<style>
#diachi{
	width: 1200px;
	height: 600px;
	margin: 0 auto;
}

#tieude{
    text-align: center;
    width:100%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:100px; 
}
tr{
    text-align: center;
    width:100%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:100px; 
}

tr, th {
    text-align: center;

    width:16%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:100px; 
}
tr ,td{
    text-align: center;
    width:16%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:100px; 
}


</style>

<?php
    session_start();
    if(isset($_POST['submit']))
    {
        foreach($_POST as $idSP => $soluong)
        {
            if(($soluong == 0) and (is_numeric($soluong)))
            {
                unset($_SESSION['cart'][$idSP]);
            }
            elseif(($soluong>0) and (is_numeric($soluong)))
            {
                $_SESSION['cart'][$idSP]['soluong']= $soluong;
            }
        }
    }
?>

<?php

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

$resultKhachhang=$conenct->prepare("SELECT MAKH,TENKH, SDT_KH, DC_KH,EMAIL_KH FROM khachhang WHERE MAKH = '".$_SESSION['login']['ID_User']."' ");
$resultKhachhang->execute();
$rowsdataKH = $resultKhachhang->fetchALL();

?>




<?php
    $isCheckout = false;
    $total = 0;
    if(isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $k)
        {
            if(isset($k))
            {
                 $isCheckout=true;
             }
        }
    }
    
    if($isCheckout == true)
    {
        
        ?>
        <form action="Checkout.php" method="POST">
            <table id="tieude" > 
				<tr>
                    <th style="width:5%; border: 1px solid black; border-collapse: collapse; height:100px;">SST</th>
                    <!-- thêm vào mã sản phẩm -->
                    <th>Mã Sản Phẩm</th>
                    <th>Sản Phẩm</th>
                    <th>Nhà Cung Cấp</th>
                    <th>Số Lượng</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                </tr>
            </table>
                <?php
                    $_SESSION['cart_item'] = $_SESSION['cart'];
                foreach($_SESSION['cart'] as $cartitem)
                {
                ?>
                <table id="dssanpham">
                    <tr class="rem1">
                        <td style="width:5%; border: 1px solid black; border-collapse: collapse; height:100px;"></td>
                        <td> <p><?php echo $cartitem['MASP'];?></p> </td>
                        <td ><img style="width:60%; height:150px;  background-size: contain;" src=" <?php echo '../images/'?><?php echo $cartitem["TENFILE"] ?>" alt=""></td>
                        <td ><p><?php echo $cartitem['MA_NCC'];?></p></td>
                        <td >
                            <!-- <div class="quantity-select"> -->
                                <!-- <div align='left' class="entry value-minus">&nbsp;</div> -->
                                <p> 
                                <?php
                                    if( $cartitem['soluong'] > $cartitem['TONKHO'])
                                    {
                                        echo $cartitem['TONKHO'];  
                                    }
                                    else{
                                        echo $cartitem['soluong'];   
                                    }                                    
                                ?> </p>
                        </td> 
                        <td ><p><?php echo $cartitem['TENSP']?></p></td>
                        <td ><?php echo number_format ($cartitem['GIA_BAN'],3)."VNĐ";?></td>
                    </tr>
                </table>

            <?php
                    $total +=$cartitem['soluong'] * $cartitem['GIA_BAN'];
            }
                $_SESSION['cart_total'] = $total;
            ?>
            <div class="pro" align='right' style="padding-top: 20px;" >
                <a href="http://localhost:83/doanphp//pages/checkout.php" style="text-decoration: none ; padding-right: 100px; " >Quay Lại</a>
                <b>Tổng Tiền: 
                <font color='red'><?php echo number_format($total,3)."VNĐ" ?>
                </font></b>
            </div>
			<div id="diachi">
			<div  class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Thông Tin Đặt Hàng</h4>
					<form action="<?php echo $level.pages_path?>payment.php" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
                                    <?php
                                        foreach($rowsdataKH as $thongtinKH){
                                            ?>
                                                <div class="controls form-group">
                                                    <input class="billing-address-name form-control" type="text" name="name" value="<?php echo $thongtinKH['TENKH'] ?>" placeholder="Họ và Tên" required="">
                                                </div>
                                                <div class="w3_agileits_card_number_grids">
                                                    <div class="w3_agileits_card_number_grid_left form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="<?php echo $thongtinKH['SDT_KH'] ?>" placeholder="Số Điện Thoại" name="number" required="">
                                                        </div>
                                                    </div>
                                                    <div class="w3_agileits_card_number_grid_right form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="<?php echo $thongtinKH['DC_KH'] ?>"  placeholder="Địa Chỉ" name="landmark" required="">
                                                        </div>
                                                    </div>
                                                    <div class="w3_agileits_card_number_grid_right form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="<?php echo $thongtinKH['EMAIL_KH'] ?>" placeholder="Email" name="landmark" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php
                                        }
                                    ?>

								</div>
								<a style="margin: 0 auto; padding-left: 50%" href="addBill_process.php"> Đặt Hàng</a>
							</div>
						</div>
					</form>
			
				</div>
            </div>
			</div>

        <?php
        }
    else
    {
        echo "<div class='pro'>";
        echo "<p align ='center'>Hiện Tại Không Có Sản Phẩm Nào Trong Giỏ Hàng <br/><a href='../index.php'>Mua Sản Phẩm</a></p>";
        echo "</div>";
    }
?>
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

<?php } else { ?>
           <script> window.alert("Vui lòng đăng nhập!!")
            window.location = "../index.php";
            </script>
           
<?php } ?>
