<?php
$level = "../";
include '../components/detail_data.php';
// <!-- top-header -->
// include ($level.comp_path.'topHeader.php');
include_once ($level."config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include ($level.comp_path.'headTitle.php')?>
</head>
<body>
<?php
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
session_start();
?>
<div class="page-head_agile_info_w3l">
</div>
<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">
				<div class="container">
					<ul class="w3_short">
						<?php
							foreach($sanphamchitiet_rowdata as $i){
							?>
								<li>
								<a href="<?php echo $level."/"?>index.php">Trang Chủ</a>
									<i>|</i>
								</li>
								<li><?php echo $i["TENSP"] ?></li>
							<?php
							}
							?>
					</ul>
				</div>
			</div>
</div>
		<div class="banner-bootom-w3-agileits py-5">
			<div class="container py-xl-4 py-lg-2">
				<!-- tittle heading -->
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
					<span>T</span>hông 
					<span>T</span>in
					<span>C</span>hi 
					<span>T</span>iết</h3>
				<!-- //tittle heading -->
				<div class="row">
					<div class="col-lg-5 col-md-8 single-right-left ">
						<div class="grid images_3_of_2">
							<div class="flexslider">
								<ul class="slides">
									<?php
										foreach($sanphamchitiet_rowdata as $i){
										?>
											<li data-thumb="images/CASE1.png">
												<div class="thumb-image">
													<img src="<?php echo $level.img_path?><?php echo $i["TENFILE"] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
											</li>
										<?php
										}
										?>
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					
					<?php
					
						foreach($sanphamchitiet_rowdata as $i){
						?>
							<?php $maspcomment  = $i["MASP"]  ;

                $_SESSION['idbl'] = $maspcomment;
							?>
							<div class="col-lg-7 single-right-left simpleCart_shelfItem">
								<h3 class="mb-3"><?php echo $i["TENSP"] ?></h3>
								
								<p class="mb-3">
									<span class="item_price"><?php echo number_format( $i["GIA_BAN"],2)."VNĐ" ?></span>
									<del><?php echo number_format( $i["GIA_BAN"]*1.1,2)."VNĐ" ?></del>
									<label>Giao hàng miễn phí</label>
								</p>
								<div class="single-infoagile">
									<ul>
										<li class="mb-3">
											Tiền mặt khi giao hàng đủ điều kiện.
										</li>
										<li class="mb-3">
											Tốc độ vận chuyển đến giao hàng.
										</li>
										<li class="mb-3">
											EMI từ $ 655 / tháng.
										</li>
										<li class="mb-3">
											Ưu đãi ngân hàng Giảm giá đặc biệt 5% * với Thẻ tín dụng Axis Bank BuzzT & C
										</li>
									</ul>
								</div>
								<div class="product-single-w3l">
									<p class="my-3">
										<i class="far fa-hand-point-right mr-2"></i>
										<label>1 năm </label>Bảo hành nhà sản xuất</p>
									<ul>
										<?php 
											echo $i["MO_TA_SP"];
										?>
									</ul>
									<p class="my-sm-4 my-3">
										<i class="fas fa-retweet mr-3"></i>
											Ngân hàng trực tuyến & Thẻ tín dụng / Ghi nợ / ATM
									</p>
								</div>
								<div class="occasion-cart">
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="<?php echo $i["TENSP"] ?>" />
												<input type="hidden" name="amount" value="<?php echo number_format( $i["GIA_BAN"],2)."VNĐ" ?>" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<?php
													echo "<p align = 'center'><a href='addcart.php?id=$i[MASP]'>Thêm vào giỏ hàng</a></p>";
												?>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						<?php
						}
							$_SESSION['MASPS'] = $maspcomment;
						?>
						
				</div>
			</div>
			

							
<?php
  //  <!-- thêm dòng dưới vào component "headTitle.php" -->
  //  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  //Begin component "comment.php"

  //Thế đoạn Begin-end:DataBase bên dưới = include(database.php)
  //Begin: DataBase
  $host_name = 'localhost';
  $db_name = 'qly_ban_hang_linh_kien';
  $user_name = 'root';
  $password = 'root';
  try {
    $conenct = new PDO("mysql:host=$host_name;dbname=$db_name", $user_name, $password);
    $conenct->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'thanh cong';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  //End: DataBase


  


  //Select lên thông tin khách hàng dựa theo SESSION['MATAIKHOAN']
  //Mặc định là mình đã lấy được cái SESSION['MASP'] do URL = "detail.php?id=MASP";
  ?>



  <style>

    .form-floating {
      margin-bottom: 40px;
    }

	#bodycomment{
		width: 70%;
      margin: auto;
      margin-top: 10%;
	}

    .form-controlll {
      display: block;
      width: 100%;
      height: 100px;
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .mt-2,
    .my-2 {
      margin-top: .5rem !important;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      color: #212529;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: transparent;
      border: 1px solid transparent;
      padding: .375rem .75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-primaryyy {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .mt-3,
    .my-3 {
      margin-top: 1rem !important;
    }
  </style>
  

  <script>
  /**
 * Accepts either a URL or querystring and returns an object associating 
 * each querystring parameter to its value. 
 *
 * Returns an empty object if no querystring parameters found.
 */
function getUrlParams(urlOrQueryString) {
  if ((i = urlOrQueryString.indexOf('?')) >= 0) {
    const queryString = urlOrQueryString.substring(i+1);
    if (queryString) {
      return _mapUrlParams(queryString);
    } 
  }

  return {};
}

/**
 * Helper function for `getUrlParams()`
 * Builds the querystring parameter to value object map.
 *
 * @param queryString {string} - The full querystring, without the leading '?'.
 */
function _mapUrlParams(queryString) {
  return queryString    
    .split('&') 
    .map(function(keyValueString) { return keyValueString.split('=') })
    .reduce(function(urlParams, [key, value]) {
      if (Number.isInteger(parseInt(value)) && parseInt(value) == value) {
        urlParams[key] = parseInt(value);
      } else {
        urlParams[key] = decodeURI(value);
      }
      return urlParams;
    }, {});
}


    $(document).ready(function() {      
      $(".btn-comment").click(function() {
        var noidung = $('#text').val();        
        let masp = getUrlParams(location.search)['id'];
		    console.log(masp);
        console.log(noidung);
        <?php
        //Lấy ngày giờ comment
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $ngaylap = date("Y-m-d H:i:s");
        ?>
        $.ajax({
          method: "POST",
          url: "comment_process.php",
          data: {
            noidung: noidung,
            //mataikhoan: mataikhoan,
             masp: masp,
          },
          cache: false,
          success: function(response) {
            console.log(response);
            //Hiển thị dữ liệu trước đó.
            var x = $(".listComment").html();

            // Chuẩn bị thêm nội dung comment vào phần bình luận
            var y =
              `<div class="infor">
         <a href="#" class="image">
           <div class="avatar"></div>
         </a>
         <div class="userInfor">
           <div class="author-name">
             <a href="#"> 
             <?php //lấy cái tên khách hàng ra ?>
               Đỗ Huy
             </a>
             <?php echo $ngaylap ?>
           </div>
           
           <div class="date-comment-view">
             <span id="noidung" class="date">
              <p>` + $("#text").val() + `</p>
             </span>
           </div>
         </div>
       </div>`;

            // Thực thi việc thêm bình luận 
            $('.listComment').html(x + y);
            // Xoá nội dung ở ô nhập bình luận
            $('#text').val("");
          }
        });
      });
    });
  </script>

<div id="bodycomment">

  <div class="form-floating">
    <form action="" method="post">
      <input name="noidung" class="form-controlll mt-2" placeholder="Leave a comment here" type="text" id="text" value="rose is red, violet is blue" style="height: 100px "></input>
      <button type="button" class="btn btn-primaryyy mt-3 btn-comment">Comment</button>
    </form>
  </div>

    
  <div class="listComment" id="result">
    <?php
    //Lấy dữ liệu comment cũ lên
    $sanphamcomment = $conenct->prepare("SELECT TENKH,MASP,THOIGIAN,NOIDUNG_BINHLUAN from binhluan bl,khachhang kh, sanpham sp where MATAIKHOAN = MAKH and MASANPHAM = MASP and MASP = '".$maspcomment."'");
    $sanphamcomment->execute();
    $rowdatacomment = $sanphamcomment->fetchAll();

    //Thêm vào trang
    foreach ($rowdatacomment as $comment) {
    ?>

		<?php $a = $comment['MASP']; ?>

      <div class="infor">
        <a href="#" class="image">
          <div class="avatar"></div>
        </a>
        <div class="userInfor">
          <div class="author-name">
            <a href="#">
              <?php echo $comment['TENKH'] ?>
            </a>
            <?php echo $comment['THOIGIAN'] ?>
          </div>
          <div class="date-comment-view">
            <span id="noidung" class="date">
              <p><?php echo $comment['NOIDUNG_BINHLUAN'] ?></p>
            </span>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  </div>

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