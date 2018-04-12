<?php
	class controller_chi_tiet_khach_san extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from khach_san where pk_id=".$id."");
			include "view/frontend/view_chi_tiet_khach_san.php";
		}
	}
	new controller_chi_tiet_khach_san();
?>