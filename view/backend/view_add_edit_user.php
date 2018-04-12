<script language="javascript">
	$(document).ready(function(){
		$("#username").blur(function(){
			var username=$("#username").val();
			if(username=="")
				$("#username").attr("style","border:1px solid red");
			else{
				//sử dụng ajax để kiểm tra xem user đã tồn tại chưa, nếu đã tồn tại thì hiển thị lên thông báo
				$.ajax({
					url:"http://localhost/WebsiteDuLich/check.php",
					type:"get",
					dataType:"text",
					data:{username:$("#username").val()},
					success:function(result){
						if(result=="user ton tai")
							$("#error").attr("style","display:block");
						else
							$("#username").removeAttr("style");
					}
				});
			}
		});
	});
</script>
<div class="row" style="width: 950px; margin: 0px 0 0 26px;">
	<div style="margin-top: 40px;">
	<?php
		if(isset($_GET["err"]))
		{
	?>
		<div class="alert alert-danger">Username đã tồn tại</div>
	<?php	}
	?>
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit user</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action; ?>">
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Username</div>
						<div class="col-md-10">
							<input type="text" value="<?php echo isset($arr["username"])?$arr["username"]:""; ?>" name="username" required <?php echo isset($arr["username"])?"disabled":""; ?> class="form-control" id="username">
						</div>
					</div>
					<!-- end row -->
					<!-- show error -->
					<div class="row" id="error" style="display:none;">
						<div class="col-md-2"></div>
						<div class="col-md-10" style="color:red;">Username đã tồn tại</div>
					</div>
					<!-- end show error -->
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-10">
							<input type="password" placeholder="<?php echo isset($arr["username"])?" Nhập password mới nếu muốn thay đổi password":""; ?>" name="password" <?php echo isset($arr["username"])?"":"required"; ?> class="form-control">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Fullname</div>
						<div class="col-md-10">
							<input type="text"  value="<?php echo isset($arr["fullname"])?$arr["fullname"]:""; ?>" name="fullname" required class="form-control">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" class="btn btn-primary" value="Process">
							<input type="reset" class="btn btn-danger" value="Reset">
						</div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
	</div>
</div>