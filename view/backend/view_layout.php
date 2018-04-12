<!DOCTYPE html>
<html>
<head>
	<title>Du Lịch Việt Nam - Vui Lòng Khách Đến Vừa Lòng Khách Đi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/common.css">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/index.css">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="public/backend/css/base.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<script type="text/javascript" src="public/frontend/js/jquery-1.8.2.min.js"></script>
   	<script type="text/javascript" src="public/frontend/js/menu.js"></script>
    <!-- <script type="text/javascript" src="public/frontend/js/picture-fall.js"></script> -->
    <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body style="background-image:url(public/frontend/image/main_bg.png)">
	<div id="container">
		<!-- header -->
		<div id=header>
			<div class="logo ">
				<img src="public/frontend/image/logo.png">
			</div>
			<div class="menu">
				<nav class="clearfix">
				    <ul class="clearfix">
				        <li><a href="#">Trang chủ</a></li>
				        <li><a href="admin.php?controller=thong_tin_du_lich">Thông tin du lịch</a></li>
				        <li><a href="admin.php?controller=tin_tuc_du_lich">Tin tức du lịch</a>
			                <ul class="sub-menu">
				                <li><a href="admin.php?controller=lich_khoi_hanh">Lịch khởi hành</a></li>
				                <li><a href="admin.php?controller=danh_lam_thang_canh">Danh lam thắng cảnh</a></li>
				                <li><a href="admin.php?controller=thong_tin_am_thuc">Thông tin ẩm thực</a></li>
				                <li><a href="admin.php?controller=cam_nang_du_lich">Cẩm nang du lịch</a></li>
			              </ul>
            			</li>
				        <li><a href="admin.php?controller=dich_vu">Dịch vụ</a>
							<ul class="sub-menu">
								<li><a href="admin.php?controller=cho_thue_xe">Cho thuê xe</a></li>
								<li><a href="admin.php?controller=khach_san">Khách sạn</a></li>
							</ul>
				        </li>
				        <li><a href="admin.php?controller=user">User</a></li>
				        <li><a href="admin.php?controller=gioi_thieu">Giới thiệu</a></li>
				        <li><a href="admin.php?act=logout">Đăng xuất</a></li>
				    </ul>
	    		<a href="#" id="pull">Menu</a>
			</nav>
			</div>	
		</div>
		<!-- end header -->
		<div id="content">
		
        	<?php
          		if(file_exists($controller))
            		include $controller;
        	?>
      	</div>


		</div>
	</div>
</body>
</html>