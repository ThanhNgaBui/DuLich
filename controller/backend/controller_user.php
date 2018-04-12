<?php
	class controller_user extends controller{
		public function __construct(){
			parent::__construct();
			//-----------------
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id=isset($_GET["id"])&&is_numeric($_GET["id"])==true?$_GET["id"]:0;
					//thực hiện truy vấn xóa bản ghi
					$this->model->execute("delete from user where pk_user_id=$id");
					header("location:admin.php?controller=user");
					break;
			}
			//------------------
			$so_ban_ghi_tren_1_trang=3;
			$tong_so_ban_ghi=$this->model->num_rows("select * from user");
			$so_trang=ceil($tong_so_ban_ghi/$so_ban_ghi_tren_1_trang);
			$trang=isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;
			$tu_ban_ghi=($trang-1)*$so_ban_ghi_tren_1_trang;
			//Lây các bản ghi để hiển thị
			$arr = $this->model->fetch("select * from user order by pk_user_id desc limit $tu_ban_ghi,$so_ban_ghi_tren_1_trang");
			//load view
			include "view/backend/view_user.php";
			//-------------
		}
	}
	new controller_user();
?>