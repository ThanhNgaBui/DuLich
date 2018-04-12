<?php
	class controller_chi_tiet_cho_thue_xe extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from thue_xe where pk_id=".$id."");
			include "view/frontend/view_chi_tiet_cho_thue_xe.php";
		}
	}
	new controller_chi_tiet_cho_thue_xe();
?>