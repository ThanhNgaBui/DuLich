<?php
	class controller_thong_tin_am_thuc extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from thong_tin_am_thuc");
			include "view/frontend/view_thong_tin_am_thuc.php";
		}
	}
	new controller_thong_tin_am_thuc();
?>