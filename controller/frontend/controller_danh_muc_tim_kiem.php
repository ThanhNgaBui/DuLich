<?php
	class controller_danh_muc_tim_kiem extends controller{
		public function __construct(){
			parent::__construct();
			$arr_departure = $this->model->fetch("select tim_kiem_ten_khoi_hanh from tim_kiem_khoi_hanh");
			$arr_time = $this ->model->fetch("select * from tim_kiem_thoi_gian");
			$arr_price = $this ->model->fetch("select * from tim_kiem_gia");
			include "view/frontend/view_danh_muc_tim_kiem.php";
		}
	}
	new controller_danh_muc_tim_kiem();
?>