<?php
	class controller_lich_khoi_hanh_chi_tiet extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from lich_khoi_hanh where pk_id=$id");
			$arr_other = $this->model->fetch("select * from lich_khoi_hanh where pk_id !=$id");
			include "view/frontend/view_lich_khoi_hanh_chi_tiet.php";
		}
	}
	new controller_lich_khoi_hanh_chi_tiet();
?>