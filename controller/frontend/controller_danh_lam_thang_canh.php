<?php
	class controller_danh_lam_thang_canh extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from danh_lam_thang_canh");
			include "view/frontend/view_danh_lam_thang_canh.php";
		}
	}
	new controller_danh_lam_thang_canh();
?>