<?php
include 'index_data.php';
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
//GPU
$result = $conenct->prepare('SELECT TENSP, GIA_BAN, TENFILE,MASP FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = "Cover" AND MALOAI = "GPU" limit 3');
$result->execute();
$rowsdata = $result->fetchALL();
//CPU
$result2 = $conenct->prepare('SELECT TENSP, GIA_BAN, TENFILE,MASP FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = "Cover" AND MALOAI = "CPU" limit 3');
$result2->execute();
$rowsdata2 = $result2->fetchALL();
//RAM
$result3 = $conenct->prepare('SELECT TENSP, GIA_BAN, TENFILE,MASP FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = "Cover" AND MALOAI = "RAM" limit 3');
$result3->execute();
$rowsdata3 = $result3->fetchALL();
//SSD
$result4 = $conenct->prepare('SELECT TENSP, GIA_BAN, TENFILE,MASP FROM sanpham, khohinh WHERE MASP = MADOITUONG AND GHICHU = "Cover" AND MALOAI = "SSD" limit 3');
$result4->execute();
$rowsdata4 = $result4->fetchALL();

$DStimkiem = array(
	array(
		"Ten" => "RAM"
	),
);
?>

<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>N</span>hững
			<span>S</span>ản
			<span>P</span>hẩm
			<span>M</span>ới
		</h3>
		<!-- //tittle heading -->
		<div class="row">
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
						<h3 class="heading-tittle text-center font-italic">GPU</h3>
						<div class="row">
							<?php
							foreach ($rowsdata as $i) {
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width:100%; height:100%;" src="<?php echo $level . img_path ?><?php echo $i["TENFILE"] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo $level . pages_path . 'detail.php?id=' . $i["MASP"] ?>" class="link-product-add-cart">Xem Sản Phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="<?php echo $level . pages_path ?>single.php"><?php echo $i["TENSP"] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($i["GIA_BAN"], 2) . "VNĐ" ?></span>
												<del><?php echo number_format($i["GIA_BAN"] * 1.1, 2) . "VNĐ" ?></del>
											</div>
											<span class="product-new-top">New</span>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="<?php echo $i["TENSP"] ?>" />
														<input type="hidden" name="amount" value="<?php echo number_format($i["GIA_BAN"], 2) . "VNĐ" ?>" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<?php
														echo "<p align = 'center'><a href='pages/addcart.php?id=$i[MASP]'>Thêm vào giỏ hàng</a></p>";
														?>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<!-- //first section -->
					<!-- second section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
						<h3 class="heading-tittle text-center font-italic">CPU</h3>
						<div class="row">
							<?php
							foreach ($rowsdata2 as $ii) {
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width:100%; height:100%;" src="<?php echo $level . img_path ?><?php echo $ii["TENFILE"] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo $level . pages_path . 'detail.php?id=' . $ii["MASP"] ?>" class="link-product-add-cart">Xem Sản Phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="<?php echo $level . pages_path ?>single.php"><?php echo $ii["TENSP"] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($ii["GIA_BAN"], 2) . "VNĐ" ?></span>
												<del><?php echo number_format($ii["GIA_BAN"] * 1.1, 2) . "VNĐ" ?></del>
											</div>
											<span class="product-new-top">New</span>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="<?php echo $ii["TENSP"] ?>" />
														<input type="hidden" name="amount" value="<?php echo number_format($ii["GIA_BAN"], 2) . "VNĐ" ?>" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<?php
														echo "<p align = 'center'><a href='pages/addcart.php?id=$ii[MASP]'>Thêm vào giỏ hàng</a></p>";
														?>

													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<!-- //second section -->
					<!-- third section -->
					<div class="product-sec1 product-sec2 px-sm-5 px-3">
						<div class="row">
							<h3 class="col-md-4 effect-bg">Mùa Hè Rực Rỡ</h3>
							<p style="z-index: 99; font-size:35px" class="w3l-nut-middle">Giảm đến 10%</p>
							<div class="col-md-8 bg-right-nut">
								<img style="margin-left: 50px ;width:450px; height:344px; z-index: 1 ;" src="<?php echo $level . img_path ?>qazzzxxxxxc.png" alt="">
							</div>
						</div>
					</div>
					<!-- //third section -->
					<!-- fourth section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
						<h3 class="heading-tittle text-center font-italic">RAM</h3>
						<div class="row">

							<?php
							foreach ($rowsdata3 as $iii) {
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width:100%; height:100%;" src="<?php echo $level . img_path ?><?php echo $iii["TENFILE"] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo $level . pages_path . 'detail.php?id=' . $iii["MASP"] ?>" class="link-product-add-cart">Xem Sản Phẩm</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">New</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="<?php echo $level . pages_path ?>single.php"><?php echo $iii["TENSP"] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($iii["GIA_BAN"], 2) . "VNĐ" ?></span>
												<del><?php echo number_format($iii["GIA_BAN"] * 1.1, 2) . "VNĐ" ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="<?php echo $iii["TENSP"] ?>" />
														<input type="hidden" name="amount" value="<?php echo number_format($iii["GIA_BAN"], 2) . "VNĐ" ?>" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<?php
														echo "<p align = 'center'><a href='pages/addcart.php?id=$iii[MASP]'>Thêm vào giỏ hàng</a></p>";
														?>

													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<!-- //fourth section -->
				</div>
			</div>
			<!-- //product left -->

			<!-- product right -->
			<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<div class="side-bar p-sm-4 p-3">
					<div class="search-hotel border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Tìm Kiếm Tại Đây..</h3>
						<form class="form-inline" action="searchProduct.php" method="get" name="search">
							<input style="width:129px" name="search" class="form-control mr-sm-2" type="text" placeholder="Tìm Kiếm" aria-label="Search" required>
							<button style="width:100px; color:#fff;; background:#F45C5D;" class="btn my-2 my-sm-0" type="submit">Tìm Kiếm</button>
						</form>
					</div>
					<!-- price -->
					<div class="range border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Giá</h3>
						<div class="w3l-range">
							<ul>
								<li>
									<a href="<?php echo $level . pages_path . "searchProduct.php?search=2000000" ?>">Dưới 2.000.000VNĐ</a>
								</li>
								<li class="my-1">
									<a href="<?php echo $level . pages_path . "searchProduct.php?search=5000000" ?>">2.000.000VNĐ-5.000.000VNĐ</a>
								</li>
								<li>
									<a href="<?php echo $level . pages_path . "searchProduct.php?search=10000000" ?>">5.000.000VNĐ-10.000.000VNĐ</a>
								</li>
								<li class="my-1">
									<a href="<?php echo $level . pages_path . "searchProduct.php?search=20000000" ?>">10.000.000VNĐ-20.000.000VNĐ</a>
								</li>
								<li>
									<a href="<?php echo $level . pages_path . "searchProduct.php?search=20000000" ?>">Trên 20.000.000VNĐ</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //price -->
					<!-- discounts -->
					<!-- //discounts -->
					<!-- electronics -->
					<div class="left-side border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Loại Sản Phẩm</h3>
						<ul>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=RAM" ?>">RAM</a>
							</li>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=CPU" ?>">CPU</a>
							</li>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=SSD" ?>">SSD</a>
							</li>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=SSD" ?>">HDD</a>
							</li>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=GPU" ?>">GPU</a>
							</li>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=MainBoard" ?>">MainBoard</a>
							</li>
							<li>
								<a href="<?php echo $level . pages_path . "searchProduct.php?search=Case" ?>">Case</a>
							</li>
						</ul>
					</div>
					<!-- //electronics -->
					<!-- best seller -->
					<div class="f-grid py-2">
						<h3 class="agileits-sear-head mb-3">Sản Phẩm Hot</h3>
						<div class="box-scroll">
							<div class="scroll">
								<?php
								foreach ($rowsdata4 as $iiii) {
								?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="<?php echo $level . img_path ?><?php echo $iiii["TENFILE"] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $iiii["TENSP"] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format($iiii["GIA_BAN"], 2) . "VNĐ" ?></a>
										</div>
									</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<!-- //best seller -->
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
</div>