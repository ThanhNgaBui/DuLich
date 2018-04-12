<?php
	class controller_slide_main extends controller{
		public function __construct(){
			parent::__construct();
			$arr = $this->model->fetch("select * from slide_main");
			include "view/frontend/view_slide_main.php";
		}
	}
	new controller_slide_main();
?>