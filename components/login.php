<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng Nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo $level.comp_path.'login_process.php'?>" method="post">
						<div class="form-group">
							<label class="col-form-label">Tên Tài Khoản</label>
							<input type="text" class="form-control" placeholder=" " name="txttendangnhap" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật Khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="txtmatkhau" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Đăng Nhập">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Nhớ Mật Khẩu?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Bạn Không Có Tài Khoản?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Đăng Ký Ngay</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>