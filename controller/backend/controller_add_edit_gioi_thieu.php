<?php 
	class controller_add_edit_gioi_thieu extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$form_action = "admin.php?controller=add_edit_gioi_thieu&act=do_edit&id=$id";
					//lay mot ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from gioi_thieu where pk_id=$id");
					//load view
					include "view/backend/view_add_edit_gioi_thieu.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$chi_tiet = $_POST["chi_tiet"];		
					//update
					$this->model->execute("update gioi_thieu set chi_tiet='$chi_tiet' where pk_id=$id");				
					header("location:admin.php?controller=gioi_thieu");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_gioi_thieu&act=do_add";
						include "view/backend/view_add_edit_gioi_thieu.php";
				break;
				case "do_add":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$chi_tiet = $_POST["chi_tiet"];
					$this->model->execute("insert into gioi_thieu(chi_tiet) values('$chi_tiet')");
					header("location:admin.php?controller=gioi_thieu");
				break;
			}
		}
	}
	new controller_add_edit_gioi_thieu();
 ?>