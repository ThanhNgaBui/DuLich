<?php
	class controller_tin_tuc_noi_bat extends controller{
		public function __construct(){
			parent::__construct();
			$arr_cam_nang_du_lich = $this->model->fetch("select * from cam_nang_du_lich where hot=1");
			$arr_danh_lam_thang_canh = $this->model->fetch("select * from danh_lam_thang_canh where hot=1");
			$arr_khach_san = $this->model->fetch("select * from khach_san where hot=1");
			$arr_lich_khoi_hanh = $this->model->fetch("select * from lich_khoi_hanh where hot=1");
			$arr_thong_tin_am_thuc = $this->model->fetch("select * from thong_tin_am_thuc where hot=1");
			include "view/frontend/view_tin_tuc_noi_bat.php";
		}
	}
	new controller_tin_tuc_noi_bat();
?>