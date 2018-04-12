<?php
	class controller_du_lich_trong_nuoc extends controller{
		public function __construct(){
			parent::__construct();
			$so_ban_ghi_tren_1_trang = 9;
			$tong_so_ban_ghi = $this->model->num_rows("select * from thong_tin_du_lich where du_lich_trong_nuoc=1");
			$so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_tren_1_trang);
			$trang = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;
			$tu_ban_ghi = ($trang-1)*$so_ban_ghi_tren_1_trang;
			//lay cac ban ghi de hien thi
			$arr = $this->model->fetch("select * from thong_tin_du_lich  where du_lich_trong_nuoc=1 order by pk_id desc limit $tu_ban_ghi,$so_ban_ghi_tren_1_trang");
			include "view/frontend/view_thong_tin_du_lich.php";
		}
	} 
	new controller_du_lich_trong_nuoc();
?>