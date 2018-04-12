<div class="col-md-10 col-xs-offset-1" style="width: 1020px; margin: 40px 0 0 -9px;">
	<div style="margin-bottom: 5px;">
		<a href="admin.php?controller=add_edit_thong_tin_du_lich&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Danh sách du lịch trong nước
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width: 100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th>Đất nước du lịch</th>
					<th>Thời gian khởi hành</th>
					<th>Nơi khởi hành</th>
					<th>Ngày khởi hành</th>
					<th>Gía cũ</th>
					<th>Gía khuyến mại</th>
					<th>Giảm giá</th>
					<th>Số chỗ ngồi</th>
					<th>Màu nền</th>
					<th style="width: 100px; text-align: center;"></th>
					<?php
						foreach($arr as $row)
						{
					?>
					<tr>
						<td style="text-align:center;">
							<img src="public/frontend/upload/thong_tin_du_lich/<?php echo $row["anh"];?>" style="width: 100px;">
						</td>
						<td><?php echo $row["ten"];?></td>
						<td style="margin-left: 5px;"><?php echo $row["dat_nuoc_du_lich"];?></td>
						<td style="margin-left: 5px;"><?php echo $row["thoi_gian"];?></td>
						<td style="text-align:center;"><?php echo $row["khoi_hanh"];?></td>
						<td style="text-align:center;"><?php echo $row["ngay_khoi_hanh"];?></td>
						<td style="text-align:center;"><?php echo $row["gia_cu"];?></td>
						<td style="text-align:center;"><?php echo $row["gia_moi"];?></td>
						<td style="text-align:center;"><?php echo $row["giam_gia"];?></td>
						<td style="text-align:center;"><?php echo $row["so_cho_ngoi"];?></td>
						<td style="text-align: center;"><?php echo $row["mau_nen"];?></td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_thong_tin_du_lich&act=edit&id=<?php echo $row["pk_id"]; ?>"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
							<a href="admin.php?controller=thong_tin_du_lich&act=delete&id=<?php echo $row["pk_id"]; ?>" onclick="return window.confirm('Are you sure?');"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tr>
					<?php } ?>
				</tr>
			</table>
		<div>
			<style type="text/css">
					.pagination{padding: 0px; margin: 0px;}
				</style>
				<ul class="pagination pull-right">
					<li><a href="#">Trang</a></li>
					<?php 
						for($i = 1; $i <= $so_trang; $i++)
						{
					 ?>
					<li <?php echo $trang==$i ? "class='active'":""; ?> ><a href="admin.php?controller=thong_tin_du_lich&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>	
	</div>
</div>