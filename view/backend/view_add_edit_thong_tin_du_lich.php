<div class="col-md-10 col-xs-offset-1" style="width: 1020px; margin-top: 40px; margin-left: -9px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh, sửa du lịch trong nước</div>
		<div class="panel-body">
			<form enctype="multipart/form-data" method="post" action="<?php echo $form_action; ?>">
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Tiêu đề</div>
					<div class="col-md-9"><input type="text" name="ten" value="<?php echo isset($arr["ten"])?$arr["ten"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
					<input type="checkbox" name="du_lich_trong_nuoc" <?php echo isset($arr["du_lich_trong_nuoc"])&&$arr["du_lich_trong_nuoc"]==1?"checked":""; ?> id="du_lich_trong_nuoc"><label for="du_lich_trong_nuoc">&nbsp;Du lịch trong nước</label>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
					<input type="checkbox" name="du_lich_ngoai_nuoc" <?php echo isset($arr["du_lich_ngoai_nuoc"])&&$arr["du_lich_ngoai_nuoc"]==1?"checked":""; ?> id="du_lich_ngoai_nuoc"><label for="du_lich_ngoai_nuoc">&nbsp;Du lịch ngoài nước</label>
					</div>
				</div>
				<!-- end row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Đất nước du lịch</div>
					<div class="col-md-9"><input type="text" name="dat_nuoc_du_lich" value="<?php echo isset($arr["dat_nuoc_du_lich"])?$arr["dat_nuoc_du_lich"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- end row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Đất nước du lịch(1)</div>
					<div class="col-md-9"><input type="text" name="fk_danh_muc" value="<?php echo isset($arr["fk_danh_muc"])?$arr["fk_danh_muc"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Thời gian khởi hành</div>
					<div class="col-md-9"><input type="text" name="thoi_gian" value="<?php echo isset($arr["thoi_gian"])?$arr["thoi_gian"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Nơi khởi hành</div>
					<div class="col-md-9"><input type="text" name="khoi_hanh" value="<?php echo isset($arr["khoi_hanh"])?$arr["khoi_hanh"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Ngày khởi hành</div>
					<div class="col-md-9"><input type="text" name="ngay_khoi_hanh" value="<?php echo isset($arr["ngay_khoi_hanh"])?$arr["ngay_khoi_hanh"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Giá cũ</div>
					<div class="col-md-9"><input type="text" name="gia_cu" value="<?php echo isset($arr["gia_cu"])?$arr["gia_cu"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Giá khuyến mãi</div>
					<div class="col-md-9"><input type="text" name="gia_moi" value="<?php echo isset($arr["gia_moi"])?$arr["gia_moi"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Tìm kiếm giá</div>
					<div class="col-md-9"><input type="text" name="tim_kiem_gia" value="<?php echo isset($arr["tim_kiem_gia"])?$arr["tim_kiem_gia"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Giảm giá</div>
					<div class="col-md-9"><input type="text" name="giam_gia" value="<?php echo isset($arr["giam_gia"])?$arr["giam_gia"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Số chỗ ngồi</div>
					<div class="col-md-9"><input type="text" name="so_cho_ngoi" value="<?php echo isset($arr["so_cho_ngoi"])?$arr["so_cho_ngoi"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row --> 
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Màu nền</div>
					<div class="col-md-9"><input type="text" name="mau_nen" value="<?php echo isset($arr["mau_nen"])?$arr["mau_nen"]:""; ?>" required class="form-control"></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Lịch trình</div>
					<div class="col-md-9">
						<textarea name="lich_trinh"><?php echo isset($arr["lich_trinh"])?$arr["lich_trinh"]:""; ?></textarea>
						<script type="text/javascript">CKEDITOR.replace("lich_trinh")</script>
					</div>
				</div>
				<!-- row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Ảnh</div>
					<div class="col-md-9">
						<input type="file" name="anh">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<?php
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$anh = $this->model->fetch("select anh from thong_tin_du_lich where pk_id='$id'");
				?>
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Ảnh đã chọn</div>
					<div class="col-md-9">
						<img src="public/frontend/upload/thong_tin_du_lich/<?php echo $anh[0]["anh"];?>" style="width: 100px;">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
					<input type="checkbox" name="hot" <?php echo isset($arr["hot"])&&$arr["hot"]==1?"checked":""; ?> id="hot"><label for="hot">&nbsp;Tin nổi bật</label>
					</div>
					
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>