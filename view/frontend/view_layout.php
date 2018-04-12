<!DOCTYPE html>
<html>
<head>
	<title>Du Lịch Việt Nam - Vui Lòng Khách Đến Vừa Lòng Khách Đi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/index.css">
	<link rel="stylesheet" type="text/css" href="public/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/common.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/chi_tiet_noi_du_lich.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/lich_khoi_hanh.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/css/khachsan.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   	<script type="text/javascript" src="public/frontend/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="public/frontend/js/tab.js"></script>
    <script type="text/javascript" src="public/frontend/js/menu.js"></script>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="public/frontend/js/picture-fall.js"></script>
    <script type="text/javascript" src="public/frontend/js/map.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>

</head>
<body style="background-image:url(public/frontend/image/main_bg.png)" onload="Captcha();">
	<div id="container">
		<!-- header -->
		<div id=header>
			<div class="logo ">
				<img src="public/frontend/image/logo.png">
			</div>
			<div class="menu">
				<?php 
					include "controller/frontend/controller_menu.php";
				?>
			</div>	
		</div>
		<!-- end header -->
		<div id="content">
			<!-- main -->
			<div class="main">
				<div class="contentt">

                    <?php 
                        include "controller/frontend/controller_slide_main.php";
                    ?>
					<!-- End slide_main -->
                    <?php 
                        if(file_exists($controller))
                            include $controller;
                    ?> 
				</div>
			</div>
			<!-- end main -->

			<!-- left -->
			<div class="left">
				    <!-- search tour -->
                     <?php
                        include "controller/frontend/controller_danh_muc_tim_kiem.php";
                    ?>
					<!-- End search-tour -->
					<!-- video -->
					<div class="box mobile-hidden">
					    <div class="box-title">
					        <div class="lb-name"></i>Video</div>
					    </div>
					    <!-- end box-title -->
    					<div class="box-content">
	    					<div class="box-video">
	        					<iframe width="100%" height="245" src="https://www.youtube.com/embed/1xxwFN_73hk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>       
	    					</div>
	    					<!--end box-video -->
    					</div>
    					<!-- end box-content -->
					</div>
					<!-- end video -->

					<!-- tin nổi bật -->
					<?php
                        include "controller/frontend/controller_tin_tuc_noi_bat.php";
                    ?>
					<!-- End tin nổi bật -->

					<!-- Thống kê -->
					<?php
                        include "controller/frontend/controller_truy_cap.php";
                    ?>
					<!-- End thống kê -->
			</div>
			<!-- end left -->
            <div class="main-qc">
                    <a href="tintuc.html"><img src="public/frontend/image/main-qc/anh1.jpg"></a>
                    <a href="danhmucdacbiet.html"><img src="public/frontend/image/main-qc/anh2.jpg"></a>
                    <a href="dulichnhatban.html"><img src="public/frontend/image/main-qc/anh3.png"></a>
            </div>
                
         

            </div>
            
            
            <!-- End main -->

            <div id="footer">
                <div class="footer-text">
                    <div class="wrap">
                        <div class="row">
                            <p class="f15">TỔNG CỤC DU LỊCH VIỆT NAM</p>
                            <p class="f15">CÔNG TY CỔ PHẦN DU LỊCH VIỆT NAM TRAVEL</p>
                            <p class="f15">GIẤY PHÉP LỮ HÀNH QUỐC TẾ SỐ: 01-729/2015/TCDL</p>
                        </div>
                        <div class="footer-col">
                            <div class="col1">
                                <p>VP HN: 165 Cầu Giấy, Dịch Vọng, Cầu Giấy, Hà Nội</p>
                                <p>Tel: 01626478975 - Fax: (024) 3312.0411</p>
                                <p>Hotline: 094579274</p>
                                <p>Email: Email: kent@gmail.com</p>
                            </div>
                            <div class="col2">
                                <p>VP ĐN:68 Nguyễn Thị Minh Khai, Q.Hải Châu - Đà Nẵng</p>
                                <p>Tel: 0916.555.004</p>
                                <p>Fax: (025) 1138.86559</p>
                                <p>Email: mid.vietnamtravel@gmail.com</p>
                            </div>
                            <div class="col3">
                                <p>VP HCM: 60 Nguyễn Đình Chiểu, Phường Đa Kao, Quận 1</p>
                                <p>Tel: (08) 8638.7540 - Fax: (028) 2220.2201</p>
                                <p>Hotline: 0913.780.633</p>
                                <p>Email: vietnamtourismhcm@yahoo.com.vn</p>
                            </div>
                            
                        </div>
                        <div class="row">
                                Website: <a href="">http://dulichvietnam.kent.com</a>
                            </div>
                    </div>
                </div>
                
            </div>
            <!-- End footer -->

		</div>
	</div>
</body>
<script type="text/javascript">
        var index = 1;
        function plusIndex(n){
            index=index+n;
            showImage(index);
        }
        showImage(1);
        function showImage(n){
            var i;
            var x = document.getElementsByClassName("slises");
            if(n > x.length){
                index = 1;
            }
            if(n < 1){
                index=x.length;
            }
            for(i=0; i<x.length; i++){
                x[i].style.display="none";
            }
            x[index-1].style.display="block";
        }
        autoSlide();
        function autoSlide(){
            var i;
            var x = document.getElementsByClassName("slises");
            for(i=0; i<x.length; i++){
                x[i].style.display="none";
            }
            if(index>x.length){
                index=1;
            }
            x[index-1].style.display="block";
            index++;
            setTimeout(autoSlide, 2000);
        }
    </script>
</html>