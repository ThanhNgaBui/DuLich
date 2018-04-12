<?php
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "application/model.php";
	//load file controller
	include "application/controller.php";
	//check logout
	$act = isset($_GET["act"])?$_GET["act"]:"";
	switch ($act) {
		case "logout":
			//hủy session $_SESSION["c_username"]
		unset($_SESSION["username"]);
		header("location:admin.php");
		break;
	}
	//Kiem tra xem user da dang nhap chua, neu chua dang nhap thi hien thi trang dang nhap, neu da dang nhap thi hien thi trang admin
	if(isset($_SESSION["username"]) == false){
		//load mvc login
		include "controller/backend/controller_login.php";
	}else{
		//------------
		//Lấy biến controller truyền trên url
		$c = isset($_GET["controller"])?$_GET["controller"]:"";
		if($c !="")
			$controller = "controller/backend/controller_$c.php";
		else
			$controller = "";
		//--------------
		//load view_layout
		include "view/backend/view_layout.php";
	}
?>