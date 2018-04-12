<div class="col-md-10 col-xs-offset-1" style="width: 1020px; margin: 40px 0 0 -9px;">
	<div style="margin-bottom: 5px;">
		<a href="admin.php?controller=add_edit_gioi_thieu&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Giới thiệu
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Chi tiết</th>
					<th style="width: 100px; text-align: center;"></th>
					<?php
						foreach($arr as $row)
						{
					?>
					<tr>
						<td style="margin-left: 5px;"><?php echo $row["chi_tiet"];?></td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_gioi_thieu&act=edit&id=<?php echo $row["pk_id"]; ?>"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
							<a href="admin.php?controller=gioi_thieu&act=delete&id=<?php echo $row["pk_id"]; ?>" onclick="return window.confirm('Are you sure?');"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tr>
					<?php } ?>
				</tr>
			</table>
		</div>	
	</div>
</div>