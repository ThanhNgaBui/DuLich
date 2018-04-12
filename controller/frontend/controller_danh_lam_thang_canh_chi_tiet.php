<?php
	class controller_danh_lam_thang_canh_chi_tiet extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from danh_lam_thang_canh where pk_id=$id");
			$arr_other = $this->model->fetch("select * from danh_lam_thang_canh where pk_id !=$id");
			include "view/frontend/view_danh_lam_thang_canh_chi_tiet.php";
		}
	}
	new controller_danh_lam_thang_canh_chi_tiet();
?>