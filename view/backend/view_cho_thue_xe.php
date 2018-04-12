<div class="col-md-10 col-xs-offset-1" style="width: 1020px; margin: 40px 0 0 -9px;">
	<div style="margin-bottom: 5px;">
		<a href="admin.php?controller=add_edit_cho_thue_xe&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Danh sách cho thuê xe
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width: 100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th>Nội dung</th>
					<th>Giá</th>
					<th style="width: 100px; text-align: center;"></th>
					<?php
						foreach($arr as $row)
						{
					?>
					<tr>
						<td style="text-align:center;">
							<img src="public/frontend/upload/cho_thue_xe/<?php echo $row["anh"];?>" style="width: 100px;">
						</td>
						<td><?php echo $row["ten"];?></td>
						<td style="margin-left: 5px;"><?php echo $row["noi_dung"];?></td>
						<td style="margin-left: 5px;"><?php echo $row["gia"];?></td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_cho_thue_xe&act=edit&id=<?php echo $row["pk_id"]; ?>"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
							<a href="admin.php?controller=cho_thue_xe&act=delete&id=<?php echo $row["pk_id"]; ?>" onclick="return window.confirm('Are you sure?');"><span class="glyphicon glyphicon-remove"></span></a>
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
					<li <?php echo $trang==$i ? "class='active'":""; ?> ><a href="admin.php?controller=cho_thue_xe&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>	
	</div>
</div>