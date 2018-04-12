<?php
	class controller_add_edit_user extends controller{
		public function __construct(){
			parent::__construct();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$form_action="admin.php?controller=add_edit_user&act=do_edit&id=$id";
					//lấy thông tin của bản ghi có id truyền vào
					$arr=$this->model->fetch_one("select * from user where pk_user_id=$id");
					//load view
					include "view/backend/view_add_edit_user.php";
					break;
				case "do_edit":
					$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$password=$_POST["password"];
					$fullname=$_POST["fullname"];
					//update thông tin
					$this->model->execute("update user set fullname='$fullname' where pk_user_id=$id");
					//kiểm tra nếu password không rỗng thì update password
					if($password !=""){
						$password=md5($password);
						//update password
						$this->model->execute("update user set password='$password' where pk_user_id=$id");
					}
					//quay về trang user
					header("location:admin.php?controller=user");
					break;
				case "add":
					$form_action="admin.php?controller=add_edit_user&act=do_add";
					include "view/backend/view_add_edit_user.php";
					break;
				case "do_add":
					$username=$_POST["username"];
					$password=md5($_POST["password"]);
					$fullname=$_POST["fullname"];
					//kiểm tra xem username đã tồn ại trong csdl chưa, nếu chưa tồn tại thì mới cho insert, nếu đã tồn tại thì hiện thị thông báo
					$check=$this->model->num_rows("select username from user where username='$username'");
					//nếu có 1 bản ghi trở lên
					if($check>0){
						header("location:admin.php?controller=add_edit_user&act=add&err=1");
					}
					else{
						//insert vào csdl
						$this->model->execute("insert into user(username,password,fullname) values('$username','$password','$fullname')");
						//quay trở lại trang user
						header("location:admin.php?controller=user");
					}	
					break;
			}
		}
	}
	new controller_add_edit_user();
?>