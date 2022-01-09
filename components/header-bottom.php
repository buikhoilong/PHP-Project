<style>
.logo_agile a{
	height: 110px; 
	display: block;  
	background-image: url("<?php echo $level.img_path?>logo03.png");
	background-size: cover;
	background-position: center;
}
</style>
<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="<?php echo $level?>index.php" class="font-weight-bold font-italic" style="">
							<!-- <img src="<?php echo $level.img_path?>logo03.png" alt=" " class="img-fluid" style = "aspect-ratio: 16/9">      -->
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="<?php echo $level.pages_path."searchProduct.php"?>" method="get" name="search">
								<input style="width:500px" name="search" class="form-control mr-sm-2" type="text" placeholder="Tìm Kiếm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit"  >Tìm Kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="<?php echo $level.pages_path."cart.php" ?>" method="post" class="last">
									
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>