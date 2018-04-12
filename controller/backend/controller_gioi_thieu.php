<?php 
	class controller_gioi_thieu extends controller{
		public function __construct(){
			parent::__construct();
			//------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])==true?$_GET["id"]:0;
					//thuc hien truy van xoa ban ghi
					$this->model->execute("delete from gioi_thieu where pk_id=$id");
					header("location:admin.php?controller=gioi_thieu");
				break;
			}
			//lay cac ban ghi de hien thi
			$arr = $this->model->fetch("select * from gioi_thieu");
			//load view
			include "view/backend/view_gioi_thieu.php";
			//------------
		}
	}
	new controller_gioi_thieu();
 ?>