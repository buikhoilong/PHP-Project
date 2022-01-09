<!-- Làm sao cho nó nhẩy qua bên kia -->
<?php
	$joinAgile = array(
		array(
			"tieuDe1" => "Âm thanh to tròn và rõ",
			"tieuDe2" => "Tai nghe thương hiệu nổi tiếng",
			"tieuDe3" => "Giảm giá 25% tất cả tại mọi của hàng",
			"anh" => "off1.png",
		)
	);
	$joinAgile2 = array(
				array(
			"tieuDe1" => "Ram hiệu suất mạnh",
			"tieuDe2" => "RAM AORUS RGB Memory RAM 16GB DDR4",
			"tieuDe3" => "Miễn phí ship",
			"anh" => "sp-AORUS-RGB-04.jpg",
		)
				);
?>
<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<?php 
							foreach ($joinAgile as $agile){
						?>
							<div class="row">
								<div class="col-sm-7 offer-name">
									<h6><?php echo $agile["tieuDe1"]; ?></h6>
									<h4 class="mt-2 mb-3"><?php echo $agile["tieuDe2"]; ?></h4>
									<p><?php echo $agile["tieuDe3"]; ?></p>
								</div>
								<div class="col-sm-5 offerimg-w3l">
									<img src="<?php echo $level.img_path?><?php echo $agile["anh"]; ?>" alt="" class="img-fluid">
								</div>
							</div>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-lg-6">
				<?php
					foreach($joinAgile2 as $agile2)
					{
						?>
						<div class="join-agile text-left p-4">
							<div class="row ">
								<div class="col-sm-7 offer-name">
									<h6><?php echo $agile2["tieuDe1"]; ?></h6>
									<h4 class="mt-2 mb-3"><?php echo $agile2["tieuDe2"]; ?></h4>
									<p><?php echo $agile2["tieuDe3"]; ?></p>
								</div>
								<div class="col-sm-5 offerimg-w3l">
									<img style="top:100px" src="<?php echo $level.img_path?><?php echo $agile2["anh"]; ?>" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>