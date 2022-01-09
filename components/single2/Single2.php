<?php
$host_name = 'localhost';
$db_name = 'demo';
$user_name = 'root';
$passwork = 'root';
try
{
	$connect = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name,$passwork);
	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
$result = $connect ->prepare('SELECT * from sanpham where MALOAI like "GPU" limit 1');
$result->execute();
$rowdata = $result->fetchAll();
?>

<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ingle
				<span>P</span>age</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/sp-GTX-1660OC-01.jpg">
									<div class="thumb-image">
										<img src="<?php echo $level.img_path?>sp-GTX-1660OC-01.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="images/sp-GTX-1660OC-02.jpg">
									<div class="thumb-image">
										<img src="<?php echo $level.img_path?>sp-GTX-1660OC-02.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="images/sp-GTX-1660OC-03.jpg">
									<div class="thumb-image">
										<img src="<?php echo $level.img_path?>sp-GTX-1660OC-03.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<?php
					foreach($rowdata as $i){
						?>
						<div class="col-lg-7 single-right-left simpleCart_shelfItem">
								<h3 class="mb-3"><?php echo $i["TENSP"] ?></h3>
								<p class="mb-3">
								<span class="item_price"><?php echo number_format( $i["GIA_BAN"],2)."VNĐ" ?></span>
								<del class="mx-2 font-weight-light"><?php echo number_format( $i["GIA_BAN"],2)."VNĐ" ?></del>
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
									<li class="mb-1">
										Nhà sản xuất : Gigabyte. 
									</li>
									<li class="mb-1">
										Main máy tính TUF B460M-PLUS nhỏ gọn, chất lượng cao của ASUS giúp người dùng có thêm lựa chọn lắp ráp máy tính với các CPU Intel đời 10 dựa trên socket LGA 1200, đặc biệt là các game thủ tầm trung.
									</li>

									<li class="mb-1">
										Main máy tính ASUS TUF GAMING B460M-PLUS chắt lọc các yếu tố thiết yếu của nền tảng Intel® mới nhất và kết hợp chúng để tạo thành một sản phẩm hoàn hảo trong phân khúc tầm trung. Được thiết kế với các thành phần tốt nhất, chiếc bo mạch chủ cung cấp đầy đủ những kết nối cơ bản giúp cuộc sống của bạn dễ dàng hơn.
									</li>
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
												echo "<p align = 'center'><a href='../addcart.php?id=$i[MASP]'>Thêm vào giỏ hàng</a></p>";
											?>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					<?php
					}
					?>
			</div>
		</div>
	</div>