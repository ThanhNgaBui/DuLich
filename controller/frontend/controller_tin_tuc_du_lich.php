<?php
	class controller_tin_tuc_du_lich extends controller{
		public function __construct(){
			parent::__construct();
			$arr_lich_khoi_hanh = $this->model->fetch("select * from lich_khoi_hanh limit 0,4");
			$arr_danh_lam_thang_canh = $this->model->fetch("select * from danh_lam_thang_canh limit 0,4");
			$arr_thong_tin_am_thuc = $this->model->fetch("select * from thong_tin_am_thuc limit 0,4");
			$arr_cam_nang_du_lich = $this->model->fetch("select * from cam_nang_du_lich limit 0,4");
			include "view/frontend/view_tin_tuc_du_lich.php";
		}
	}
	new controller_tin_tuc_du_lich();
?>