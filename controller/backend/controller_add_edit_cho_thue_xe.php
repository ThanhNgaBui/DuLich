<?php 
	class controller_add_edit_cho_thue_xe extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$form_action = "admin.php?controller=add_edit_cho_thue_xe&act=do_edit&id=$id";
					//lay mot ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from thue_xe where pk_id=$id");
					//load view
					include "view/backend/view_add_edit_cho_thue_xe.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$ten = $_POST["ten"];
					$noi_dung = $_POST["noi_dung"];
					$gia = $_POST["gia"];
					$chi_tiet = $_POST["chi_tiet"];
					$bang_gia = $_POST["bang_gia"];
					
					//update
					$this->model->execute("update thue_xe set ten='$ten',noi_dung='$noi_dung',gia='$gia',chi_tiet='$chi_tiet',bang_gia='$bang_gia' where pk_id=$id");
					//kiem tra, neu co browse anh thi thuc hien upload
					if($_FILES["anh"]["name"] != ""){
						//ham time() la ham doi thoi gian ra mot so nguyen
						$anh = time().$_FILES["anh"]["name"];
						//upload file
						move_uploaded_file($_FILES["anh"]["tmp_name"], "public/frontend/upload/cho_thue_xe/$anh");
						//------------------
						//xoa anh cu, chuan bi upload anh moi
						$arr_old_img = $this->model->fetch_one("select anh from thue_xe where pk_id=$id");
						$old_img = isset($arr_old_img["anh"])?$arr_old_img["anh"]:"";
						if($old_img != "")
							unlink("public/frontend/upload/cho_thue_xe/$old_img");
						//------------------
						//update csdl
						$this->model->execute("update thue_xe set anh='$anh' where pk_id=$id");
					}
					header("location:admin.php?controller=cho_thue_xe");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_cho_thue_xe&act=do_add";
						include "view/backend/view_add_edit_cho_thue_xe.php";
				break;
				case "do_add":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$ten = $_POST["ten"];
					$noi_dung = $_POST["noi_dung"];
					$gia = $_POST["gia"];
					$chi_tiet = $_POST["chi_tiet"];
					$bang_gia = $_POST["bang_gia"];
					
					$anh = "";
					if($_FILES["anh"]["name"] != ""){
						$anh = time().$_FILES["anh"]["name"];
						move_uploaded_file($_FILES["anh"]["tmp_name"], "public/frontend/upload/cho_thue_xe/$anh");
					}
					$this->model->execute("insert into thue_xe(ten, noi_dung, gia, anh, chi_tiet, bang_gia) values('$ten', '$noi_dung', '$gia' ,'$anh', '$chi_tiet', '$bang_gia')");
					header("location:admin.php?controller=cho_thue_xe");
				break;
			}
		}
	}
	new controller_add_edit_cho_thue_xe();
 ?>