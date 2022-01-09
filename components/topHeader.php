    <?php session_start(); ?>
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Ưu đãi và giảm giá hàng đầu của khu vực ưu đãi
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Chọn Địa Điểm</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" class="text-white">
								<i class="fas fa-truck mr-2"></i>Miễn phí vận chuyển</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> <a href="tel:0356 251 521" class="text-white">0356 251 521</a>
						</li>
						<li class="text-center border-right text-white">
						<?php if (isset($_SESSION['login'])) { ?>
							<a href="<?php echo $level.pages_path."account.php"; ?>" class="text-white">
								Chào <?php $tenkh =$_SESSION['login']['tenKhachHang']; echo $tenkh?>!
							</a>
								<?php } else{ ?>
									<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
										<i class="fas fa-sign-in-alt mr-2"></i> Đăng Nhập 
									</a>
								 <?php } ?>
						</li>
						<li class="text-center text-white">
						<?php if (isset($_SESSION['login'])) { ?>							
							<a href="<?php echo $level.pages_path.'logout.php' ?>" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i>
								Đăng xuất
							</a>
								<?php } else{ ?>
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng Ký </a>
								<?php } ?>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>