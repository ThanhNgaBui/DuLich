<?php
	class controller_thong_tin_am_thuc_chi_tiet extends controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$arr = $this->model->fetch("select * from thong_tin_am_thuc where pk_id=$id");
			$arr_other = $this->model->fetch("select * from thong_tin_am_thuc where pk_id !=$id");
			include "view/frontend/view_thong_tin_am_thuc_chi_tiet.php";
		}
	}
	new controller_thong_tin_am_thuc_chi_tiet();
?>