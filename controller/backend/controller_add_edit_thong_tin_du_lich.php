<?php 
	class controller_add_edit_thong_tin_du_lich extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$form_action = "admin.php?controller=add_edit_thong_tin_du_lich&act=do_edit&id=$id";
					//lay mot ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from thong_tin_du_lich where pk_id=$id");
					//load view
					include "view/backend/view_add_edit_thong_tin_du_lich.php";
				break;
				case "do_edit":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$ten = $_POST["ten"];
					$dat_nuoc_du_lich = $_POST["dat_nuoc_du_lich"];
					$thoi_gian = $_POST["thoi_gian"];
					$khoi_hanh = $_POST["khoi_hanh"];
					$ngay_khoi_hanh = $_POST["ngay_khoi_hanh"];
					$gia_cu = $_POST["gia_cu"];
					$gia_moi = $_POST["gia_moi"];
					$giam_gia = $_POST["giam_gia"];
					$so_cho_ngoi = $_POST["so_cho_ngoi"];
					$mau_nen = $_POST["mau_nen"];
					$lich_trinh = $_POST["lich_trinh"];
					$tim_kiem_gia = $_POST["tim_kiem_gia"];
					$fk_danh_muc = $_POST["fk_danh_muc"];
					$hot = isset($_POST["hot"])?1:0;
					$du_lich_trong_nuoc = isset($_POST["du_lich_trong_nuoc"])?1:0;
					$du_lich_ngoai_nuoc = isset($_POST["du_lich_ngoai_nuoc"])?1:0;
					
					//update
					$this->model->execute("update thong_tin_du_lich set ten='$ten',dat_nuoc_du_lich='$dat_nuoc_du_lich',thoi_gian='$thoi_gian',khoi_hanh='$khoi_hanh',ngay_khoi_hanh='$ngay_khoi_hanh',gia_cu='$gia_cu',gia_moi='$gia_moi',tim_kiem_gia='$tim_kiem_gia',giam_gia='$giam_gia',so_cho_ngoi='$so_cho_ngoi',hot='$hot',mau_nen='$mau_nen', lich_trinh='$lich_trinh', du_lich_trong_nuoc='$du_lich_trong_nuoc', du_lich_ngoai_nuoc='$du_lich_ngoai_nuoc', fk_danh_muc='$fk_danh_muc' where pk_id=$id");
					//kiem tra, neu co browse anh thi thuc hien upload
					if($_FILES["anh"]["name"] != ""){
						//ham time() la ham doi thoi gian ra mot so nguyen
						$anh = time().$_FILES["anh"]["name"];
						//upload file
						move_uploaded_file($_FILES["anh"]["tmp_name"], "public/frontend/upload/thong_tin_du_lich/$anh");
						//------------------
						//xoa anh cu, chuan bi upload anh moi
						$arr_old_img = $this->model->fetch_one("select anh from du_lich_trong_nuoc where pk_id=$id");
						$old_img = isset($arr_old_img["anh"])?$arr_old_img["anh"]:"";
						if($old_img != "")
							unlink("public/frontend/upload/thong_tin_du_lich/$old_img");
						//------------------
						//update csdl
						$this->model->execute("update thong_tin_du_lich set anh='$anh' where pk_id=$id");
					}
					header("location:admin.php?controller=thong_tin_du_lich");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_thong_tin_du_lich&act=do_add";
						include "view/backend/view_add_edit_thong_tin_du_lich.php";
				break;
				case "do_add":
					$ten = $_POST["ten"];
					$dat_nuoc_du_lich = $_POST["dat_nuoc_du_lich"];
					$thoi_gian = $_POST["thoi_gian"];
					$khoi_hanh = $_POST["khoi_hanh"];
					$ngay_khoi_hanh = $_POST["ngay_khoi_hanh"];
					$gia_cu = $_POST["gia_cu"];
					$gia_moi = $_POST["gia_moi"];
					$giam_gia = $_POST["giam_gia"];
					$so_cho_ngoi = $_POST["so_cho_ngoi"];
					$mau_nen = $_POST["mau_nen"];
					$lich_trinh = $_POST["lich_trinh"];
					$tim_kiem_gia = $_POST["tim_kiem_gia"];
					$fk_danh_muc = $_POST["fk_danh_muc"];
					$hot = isset($_POST["hot"])?1:0;
					$du_lich_trong_nuoc = isset($_POST["du_lich_trong_nuoc"])?1:0;
					$du_lich_ngoai_nuoc = isset($_POST["du_lich_ngoai_nuoc"])?1:0;

					$anh = "";
					if($_FILES["anh"]["name"] != ""){
						$anh = time().$_FILES["anh"]["name"];
						move_uploaded_file($_FILES["anh"]["tmp_name"], "public/frontend/upload/thong_tin_du_lich/$anh");
					}
					$this->model->execute("insert into thong_tin_du_lich(hot,ten,dat_nuoc_du_lich,thoi_gian,khoi_hanh,ngay_khoi_hanh, gia_cu,gia_moi,tim_kiem_gia,giam_gia,so_cho_ngoi,anh, mau_nen, lich_trinh, du_lich_trong_nuoc, du_lich_ngoai_nuoc, fk_danh_muc) values('$hot', '$ten', '$dat_nuoc_du_lich' ,'$thoi_gian', '$khoi_hanh', '$ngay_khoi_hanh', '$gia_cu', '$gia_moi', '$tim_kiem_gia', '$giam_gia', '$so_cho_ngoi', '$anh', '$mau_nen', '$lich_trinh', '$du_lich_trong_nuoc', '$du_lich_ngoai_nuoc', '$fk_danh_muc')");
					header("location:admin.php?controller=thong_tin_du_lich");
				break;
			}
		}
	}
	new controller_add_edit_thong_tin_du_lich();
 ?>