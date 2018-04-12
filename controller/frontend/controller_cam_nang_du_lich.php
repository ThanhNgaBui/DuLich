<?php
	class controller_cam_nang_du_lich extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from cam_nang_du_lich");
			include "view/frontend/view_cam_nang_du_lich.php";
		}
	}
	new controller_cam_nang_du_lich();
?>