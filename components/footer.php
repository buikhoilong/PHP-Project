<?php
	$offerfooter = array(
		array(
			"tieuDe1"=>"Miễn phí vận chuyển ",
			"tieuDe2"=>"Khi đặt hàng trên 2.000.000 'VND'",
		),
		array(
			"tieuDe1"=>"Chuyển phát nhanh",
			"tieuDe2"=>"Trên toàn quốc",
		),
		array(
			"tieuDe1"=>"Sự lựa chọn tối ưu",
			"tieuDe2"=>"Của những sản phẩm",
		)
	);

	$msm = array(
		array(
			"brand"=>"Ram Chơi Game",
		),
		array(
			"brand"=>"Ram Mới",
		),
		array(
			"brand"=>"Ram Hãng",
		),
		array(
			"brand"=>"Ram Xịn",
		),
		array(
			"brand"=>"Ram Đặc Biệt",
		)
	);

	$msm1 = array(
		array(
			"brand"=>"CPU Chơi Game",
		),
		array(
			"brand"=>"CPU Mới",
		),
		array(
			"brand"=>"CPU Hãng",
		),
		array(
			"brand"=>"CPU Xịn",
		),
		array(
			"brand"=>"CPU Đặc Biệt",
		)
	);
	$msm2 = array(
		array(
			"brand"=>"SSD 1TB",
		),
		array(
			"brand"=>"SSD 1GB",
		),
		array(
			"brand"=>"SSD 10TB",
		),
		array(
			"brand"=>"SSD 100TB",
		),
		array(
			"brand"=>"SSD 10GB",
		)
	);

	$msm3 = array(
		array(
			"brand"=>"Bàn Phím Chơi Game",
		),
		array(
			"brand"=>"Bàn Phím Mới",
		),
		array(
			"brand"=>"Bàn Phím Hãng",
		),
		array(
			"brand"=>"Bàn Phím Xịn",
		),
		array(
			"brand"=>"Bàn Phím Đặc Biệt",
		),
		array(
			"brand"=>"Bàn Phím Custom",
		),
		array(
			"brand"=>"Bàn Phím Custom Đặc Biệt",
		)
	);

	$msm4 = array(
		array(
			"brand"=>"Bo Mạch Chủ Chơi Game",
		),
		array(
			"brand"=>"Bo Mạch Chủ Mới",
		),
		array(
			"brand"=>"Bo Mạch Chủ Hãng",
		),
		array(
			"brand"=>"Bo Mạch Chủ Xịn",
		),
		array(
			"brand"=>"Bo Mạch Chủ Đặc Biệt",
		)
	);

	$msm5 = array(
		array(
			"brand"=>"Tai Nghe Chơi Game",
		),
		array(
			"brand"=>"Tai Nghe Mới",
		),
		array(
			"brand"=>"Tai Nghe Hãng",
		),
		array(
			"brand"=>"Tai Nghe Xịn",
		),
		array(
			"brand"=>"Tai Nghe Đặc Biệt",
		),
		array(
			"brand"=>"Tai Nghe Custom",
		),
		array(
			"brand"=>"Tai Nghe Custom Đặc Biệt",
		)
	);
	//var_dump($offerfooter);
?>

<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Thiết bị điện tử :</h2>
				<p class="footer-main mb-4">
				Nếu bạn đang cân nhắc một chiếc máy tính xách tay mới, đang tìm kiếm một dàn âm thanh nổi trên xe hơi mới mạnh mẽ hoặc mua một chiếc HDTV mới, chúng tôi sẽ giúp bạn dễ dàng
tìm chính xác những gì bạn cần với mức giá bạn có thể mua được. Chúng tôi cung cấp Giá thấp hàng ngày trên TV, máy tính xách tay, điện thoại di động, máy tính bảng
và iPad, trò chơi điện tử, máy tính để bàn, máy ảnh và máy quay phim, âm thanh, video và hơn thế nữa.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<?php
					foreach($offerfooter as $footer){
						?>
							<div class="col-md-4 offer-footer">
								<div class="row">
									<div class="col-4 icon-fot">
										<i class="fas fa-dolly"></i>
									</div>
									<div class="col-8 text-form-footer">
										<h3><?php echo $footer["tieuDe1"]; ?> </h3>
										<p><?php echo $footer["tieuDe2"]; ?></p>
									</div>
								</div>
							</div>
						<?php
					}
					?>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Thể loại</h3>
						<ul>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>product.php">RAM </a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>product.php">CPU</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>product.php">GPU</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>product2.php">SSD</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>product.php">MainBoard</a>
							</li>
							<li>
								<a href="<?php echo $level.pages_path?>product2.php">KeyBoard</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Truy cập nhanh</h3>
						<ul>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>about.php">Thông tin chúng tôi</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>contact.php">Kết nối với chúng tôi</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>help.php">Trợ giúp</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>faqs.php">Cây hỏi thường gặp</a>
							</li>
							<li class="mb-3">
								<a href="<?php echo $level.pages_path?>terms.php">Điều khoản sử dụng</a>
							</li>
							<li>
								<a href="<?php echo $level.pages_path?>privacy.php">Chính sách bảo mật</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Liên lạc</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 62/229 Lý Chính Thắng, P8, Q3, HCM.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 0355501613 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +84355501613</li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> hiukhoago@gmail.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> hieukhoa@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Bản tin</h3>
						<p class="mb-3">Giao hàng miễn phí cho đơn hàng đầu tiên của bạn! </p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email">
								<input type="submit" value="Đi">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Theo dõi chúng tôi :</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-2">Ram:</h5>
					<ul>
					<?php
						foreach($msm as $sm){
					?>
						<li class="m-sm-1">
							<a href="<?php echo $level.pages_path?>product.php" class="border-right pr-2"><?php echo $sm["brand"]; ?> </a>
						</li>	
					<?php
						}
					?>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">CPU:</h5>
					<ul>
					<?php
						foreach($msm as $sm){
					?>
						<li class="m-sm-1">
							<a href="<?php echo $level.pages_path?>product.php" class="border-right pr-2"><?php echo $sm["brand"]; ?> </a>
						</li>	
					<?php
						}
					?>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">SSD:</h5>
					<ul>
					<?php
						foreach($msm2 as $sm){
					?>
						<li class="m-sm-1">
							<a href="<?php echo $level.pages_path?>product.php" class="border-right pr-2"><?php echo $sm["brand"]; ?> </a>
						</li>	
					<?php
						}
					?>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Bàn Phím:</h5>
					<ul>
					<?php
						foreach($msm3 as $sm){
					?>
						<li class="m-sm-1">
							<a href="<?php echo $level.pages_path?>product.php" class="border-right pr-2"><?php echo $sm["brand"]; ?> </a>
						</li>	
					<?php
						}
					?>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Bo Mạch Chủ:</h5>
					<ul>
					<?php
						foreach($msm4 as $sm){
					?>
						<li class="m-sm-1">
							<a href="<?php echo $level.pages_path?>product.php" class="border-right pr-2"><?php echo $sm["brand"]; ?> </a>
						</li>	
					<?php
						}
					?>
						
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Tai Nghe: </h5>
					<ul>
					<?php
						foreach($msm5 as $sm){
					?>
						<li class="m-sm-1">
							<a href="<?php echo $level.pages_path?>product.php" class="border-right pr-2"><?php echo $sm["brand"]; ?> </a>
						</li>	
					<?php
						}
					?>
						
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Phương thức thanh toán</h5>
					<ul>
						<li>
							<img src="<?php echo $level.img_path?>pay2.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay5.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay1.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay4.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay6.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay3.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay7.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay8.png" alt="">
						</li>
						<li>
							<img src="<?php echo $level.img_path?>pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>