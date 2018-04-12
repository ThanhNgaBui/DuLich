<?php
	class controller_trang_chu extends controller{
		public function __construct(){
			parent::__construct();
			//tour hot
			$arr_hot = $this->model->fetch("select * from thong_tin_du_lich where hot=1");
			//domestic tourism
			$arr_domestic = $this->model->fetch("select * from thong_tin_du_lich where du_lich_trong_nuoc=1");
			//tourism abroad
			$arr_abroad = $this->model->fetch("select * from thong_tin_du_lich where du_lich_ngoai_nuoc=1");
			include "view/frontend/view_trang_chu.php";
		}
	}
	new controller_trang_chu();
?>