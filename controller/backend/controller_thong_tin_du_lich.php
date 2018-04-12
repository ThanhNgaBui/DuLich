<?php 
	class controller_thong_tin_du_lich extends controller{
		public function __construct(){
			parent::__construct();
			//------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])==true?$_GET["id"]:0;
					//------------------
					//xoa anh cu, chuan bi upload anh moi
					$arr_old_img = $this->model->fetch_one("select anh from thong_tin_du_lich where pk_id=$id");
					$old_img = isset($arr_old_img["anh"])?$arr_old_img["anh"]:"";
					if($old_img != "")
						unlink("public/frontend/upload/thong_tin_du_lich/$old_img");
					//------------------
					//thuc hien truy van xoa ban ghi
					$this->model->execute("delete from thong_tin_du_lich where pk_id=$id");
					header("location:admin.php?controller=thong_tin_du_lich");
				break;
			}
			//------------
			$so_ban_ghi_tren_1_trang = 10;
			$tong_so_ban_ghi = $this->model->num_rows("select * from thong_tin_du_lich");
			$so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_tren_1_trang);
			$trang = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;
			$tu_ban_ghi = ($trang-1)*$so_ban_ghi_tren_1_trang;
			//lay cac ban ghi de hien thi
			$arr = $this->model->fetch("select * from thong_tin_du_lich order by pk_id desc limit $tu_ban_ghi,$so_ban_ghi_tren_1_trang");
			//load view
			include "view/backend/view_thong_tin_du_lich.php";
			//------------
		}
	}
	new controller_thong_tin_du_lich();
 ?>