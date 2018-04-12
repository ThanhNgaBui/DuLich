<?php
	class controller_lich_khoi_hanh extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from lich_khoi_hanh");
			include "view/frontend/view_lich_khoi_hanh.php";
		}
	}
	new controller_lich_khoi_hanh();
?>