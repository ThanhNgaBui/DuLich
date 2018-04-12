<div class="col-md-8 col-xs-offset-2" style="margin-top: 40px;">
	<div style="margin-bottom: 5px;">
		<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">User</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Username</th>
					<th>Fullname</th>
					<th style="width: 100px;">Manager</th>
				</tr>
				<?php
					foreach($arr as $rows)
					{
				?>
				<tr>
					<td><?php echo $rows["username"]; ?></td>
					<td><?php echo $rows["fullname"]; ?></td>
					<td style="text-align: center;">
						<a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows["pk_user_id"]; ?>">Edit</a>&nbsp;&nbsp;
						<a href="admin.php?controller=user&act=delete&id=<?php echo $rows["pk_user_id"]; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php	}
				?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			<ul class="pagination pull-right">
				<li><a href="#">Trang</a></li>
				<?php
					for($i=1; $i<=$so_trang; $i++)
					{
				?>		
					<li <?php echo $trang==$i ? "class='active'":""; ?>><a href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>	
				<?php }?>
				
			</ul>
		</div>
	</div>
</div>