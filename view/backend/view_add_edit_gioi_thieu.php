<div class="col-md-10 col-xs-offset-1" style="width: 1020px; margin-top: 40px; margin-left: -9px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh, sửa giới thiệu</div>
		<div class="panel-body">
			<form enctype="multipart/form-data" method="post" action="<?php echo $form_action; ?>">
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">Chi tiết</div>
					<div class="col-md-9">
						<textarea name="chi_tiet"><?php echo isset($arr["chi_tiet"])?$arr["chi_tiet"]:""; ?></textarea>
						<script type="text/javascript">CKEDITOR.replace("chi_tiet")</script>
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