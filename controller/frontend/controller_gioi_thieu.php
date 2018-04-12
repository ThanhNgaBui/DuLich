<?php 
	class controller_gioi_thieu extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from gioi_thieu");
			include "view/frontend/view_gioi_thieu.php";
		}
	}
	new controller_gioi_thieu();
?>