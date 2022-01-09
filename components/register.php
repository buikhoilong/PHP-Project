<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng Ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo $level.comp_path.'register_process.php'?> " method="POST">
						<div class="form-group">
							<label class="col-form-label">Tên Tài Khoản</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Địa chỉ Email</label>
							<input type="email" class="form-control" placeholder=" " name="txtemail" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật Khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Nhập Lại Mật Khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Đăng Ký">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">Tôi chấp nhận các Điều khoản & Điều kiện</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>