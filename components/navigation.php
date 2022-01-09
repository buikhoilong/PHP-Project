<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo $level?>index.php">Trang Chủ 
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo $level.pages_path?>product.php">Tất Cả Sản Phẩm</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo $level.pages_path?>product2.php">Sản Phẩm Mới</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Loại Sản Phẩm
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Các Loại Sản Phẩm</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
												
													<a href="<?php echo $level.pages_path."searchProduct.php?search=Case"?>">Case</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path."searchProduct.php?search=CPU"?>">CPU</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path."searchProduct.php?search=GPU"?>">GPU</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path."searchProduct.php?search=SSD"?>">HDD</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path."searchProduct.php?search=RAM"?>">RAM</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path."searchProduct.php?search=SSD"?>">SSD</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="<?php echo $level.pages_path?>product.php">Tai Nghe</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path?>product.php">Bàn Phím</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path?>product.php">Bo Mạch Chủ</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path?>product.php">Chuột</a>
												</li>
												<li>
													<a href="<?php echo $level.pages_path?>product.php">Lót Chuột</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo $level.pages_path?>about.php">Về Chúng Tôi</a>
						</li>
						
							<!-- <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Các Trang
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?php echo $level.pages_path?>product.php">Sản Phẩm 1</a>
									<a class="dropdown-item" href="<?php echo $level.pages_path?>product2.php">Sản Phẩm 2</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo $level.pages_path?>checkout.php">Trang Giỏi Hàng</a>
									<a class="dropdown-item" href="<?php echo $level.pages_path?>payment.php">Trang Thanh Toán</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo $level.comp_path?>formAddProduct.php">Thêm sản phẩm</a>
									<a class="dropdown-item" href="<?php echo $level.comp_path?>productManage.php">Quản lý sản phẩm</a>
								</div>
							</li> -->
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $level.pages_path?>contact.php">Liên Hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>