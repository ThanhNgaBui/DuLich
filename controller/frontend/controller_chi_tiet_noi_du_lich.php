<?php
	class controller_chi_tiet_noi_du_lich extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from thong_tin_du_lich where pk_id=".$id."");
			include "view/frontend/view_chi_tiet_noi_du_lich.php";
		}
	}
	new controller_chi_tiet_noi_du_lich();
?>