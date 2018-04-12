<?php
	class controller_menu extends controller{
		public function __construct(){
			parent::__construct();
			$arr_trong_nuoc = $this->model->fetch("select DISTINCT fk_danh_muc, dat_nuoc_du_lich from thong_tin_du_lich WHERE du_lich_trong_nuoc=1 ORDER by fk_danh_muc ");
		    $arr_nuoc_ngoai = $this->model->fetch("select DISTINCT fk_danh_muc, dat_nuoc_du_lich from thong_tin_du_lich WHERE du_lich_ngoai_nuoc=1 ORDER by fk_danh_muc");
			include "view/frontend/view_menu.php";
		}
	}
	new controller_menu();
?>