<?php
	class controller_cam_nang_du_lich_chi_tiet extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from cam_nang_du_lich where pk_id=$id");
			$arr_other = $this->model->fetch("select * from cam_nang_du_lich where pk_id !=$id");
			include "view/frontend/view_cam_nang_du_lich_chi_tiet.php";
		}
	}
	new controller_cam_nang_du_lich_chi_tiet();
?>