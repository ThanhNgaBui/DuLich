<?php 
	class controller_truy_cap extends controller{
		public function __construct(){
			parent::__construct();
			//----------------
			//dem so nguoi truy cap
			$truy_cap = 0;
			//if(isset($_SESSION["truy_cap"]) == false)
			{
				$_SESSION["truy_cap"] = true;
				//update so luong truy cap trong luot_truy_cap len 1
				$this->model->execute("update luot_truy_cap set truy_cap = truy_cap + 1");				
			}
			//lay so luong truy cap
			$arr_truy_cap = $this->model->fetch_one("select truy_cap from luot_truy_cap");
			$truy_cap = $arr_truy_cap["truy_cap"];
			//----------------
			//tinh so luong user online
			$thoi_gian = time();//thoi gian truy cap moi nhat cua user
			$thoi_gian_timeout = 900; //timeout = 15 phut = 900 giay
			$pk_id = session_id();
			//xoa nhung user co thoi gian truy cap vuot qua thoi_gian_timeout ke tu thoi diem cuoi cung nguoi do truy cap
			$this->model->execute("delete from nguoi_online where $thoi_gian - thoi_gian_online > $thoi_gian_timeout");
			//kiem tra xem user nay da ton tai trong csdl chua, neu chua (user moi truy cap) thi insert ban ghi vao csdl
			$check = $this->model->num_rows("select * from nguoi_online where pk_id='$pk_id'");
			if($check <= 0){
				//insert ban ghi vao nguoi_online
				$this->model->execute("insert into nguoi_online(pk_id,thoi_gian_online) values('$pk_id',$thoi_gian)");
			}else{
				//cap nhat lai thoi gian moi nhat ma nguoi dung truy cap
				$this->model->execute("update nguoi_online set thoi_gian_online='$thoi_gian' where pk_id='$pk_id'");
			}			
			//dem so luong ban ghi trong nguoi_online -> so luong user online
			$user_online = $this->model->num_rows("select * from nguoi_online");
			//----------------
			//load view
			include "view/frontend/view_truy_cap.php";
		}
	}
	new controller_truy_cap();
 ?>