<?php 
	class controller_add_edit_cam_nang_du_lich extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$form_action = "admin.php?controller=add_edit_cam_nang_du_lich&act=do_edit&id=$id";
					//lay mot ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from cam_nang_du_lich where pk_id=$id");
					//load view
					include "view/backend/view_add_edit_cam_nang_du_lich.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$ten = $_POST["ten"];
					$noi_dung = $_POST["noi_dung"];
					$chi_tiet = $_POST["chi_tiet"];
					$hot = isset($_POST["hot"])?1:0;
					//update
					$this->model->execute("update cam_nang_du_lich set ten='$ten', noi_dung='$noi_dung',chi_tiet='$chi_tiet',hot= '$hot' where pk_id=$id");
					//kiem tra, neu co browse anh thi thuc hien upload
					if($_FILES["anh"]["name"] != ""){
						//ham time() la ham doi thoi gian ra mot so nguyen
						$anh = time().$_FILES["anh"]["name"];
						//upload file
						move_uploaded_file($_FILES["anh"]["tmp_name"], "public/frontend/upload/cam_nang_du_lich/$anh");
						//------------------
						//xoa anh cu, chuan bi upload anh moi
						$arr_old_img = $this->model->fetch_one("select anh from cam_nang_du_lich where pk_id=$id");
						$old_img = isset($arr_old_img["anh"])?$arr_old_img["anh"]:"";
						if($old_img != "")
							unlink("public/frontend/upload/cam_nang_du_lich/$old_img");
						//------------------
						//update csdl
						$this->model->execute("update cam_nang_du_lich set anh='$anh' where pk_id=$id");
					}
					header("location:admin.php?controller=cam_nang_du_lich");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_cam_nang_du_lich&act=do_add";
						include "view/backend/view_add_edit_cam_nang_du_lich.php";
				break;
				case "do_add":
					$ten = $_POST["ten"];
					$noi_dung = $_POST["noi_dung"];
					$chi_tiet = $_POST["chi_tiet"];
					$hot = isset($_POST["hot"])?1:0;
					$c_time = $_POST["c_time"];
					$anh = "";
					if($_FILES["anh"]["name"] != ""){
						$anh = time().$_FILES["anh"]["name"];
						move_uploaded_file($_FILES["anh"]["tmp_name"], "public/frontend/upload/cam_nang_du_lich/$anh");
					}
					$this->model->execute("insert into cam_nang_du_lich(ten,noi_dung,chi_tiet,anh,hot) values('$ten','$noi_dung','$chi_tiet','$anh',$hot)");
					header("location:admin.php?controller=cam_nang_du_lich");
				break;
			}
		}
	}
	new controller_add_edit_cam_nang_du_lich();
 ?>