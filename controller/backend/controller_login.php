<?php
	class controller_login extends controller{
		public function __construct(){
			//gọi hàm __construct từ class controller để khởi tạo biến model (là object của class model)
			parent::__construct();
			//------------
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$username = $_POST["username"];
				$password = $_POST["password"];
				//check username
				$check = $this->model->fetch_one("select username, password from user where username='$username'");
				if(isset($check["username"]) == true){
					//check password
					$password = md5($password);
					if($check["password"]==$password){
						//Xác thực đăng nhập thành công
						$_SESSION["username"] = $username;
						//quay lại trang admin.php
						header("location:admin.php");

					}	
				}
			}
			//load view
			include "view/backend/view_login.php";
			//-------------
		}
	}
	new controller_login();
?>