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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="public/frontend/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="public/frontend/js/tab.js"></script>
    <!-- <script type="text/javascript" src="public/frontend/js/picture-fall.js"></script> -->
</head>
<body style="background-image:url(public/frontend/image/main_bg.png)">
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
                   <div>
                        <?php 
                            $keyword=$_GET["keyword"];
                            $time=$_GET["time"];
                            $price=$_GET["price"];
                            $result= mysqli_query($link,"select * FROM thong_tin_du_lich inner join tim_kiem_khoi_hanh on pk_search_id = fk_tim_kiem_khoi_hanh where tim_kiem_ten_khoi_hanh like '".$keyword."' or thoi_gian like '".$time."' or tim_kiem_gia like '".$price."' ");
                            $result1= mysqli_query($link,"select * FROM thong_tin_du_lich inner join tim_kiem_khoi_hanh on pk_search_id = fk_tim_kiem_khoi_hanh where tim_kiem_ten_khoi_hanh like '".$keyword."' or thoi_gian like '".$time."' or tim_kiem_gia like '".$price."' ");
                            if(mysqli_num_rows($result)==0 && mysqli_num_rows($result1)==0)
                            {
                                echo "Không tìm thấy kết quả tìm kiếm nào";
                            }
                            else
                            {

                                $number = mysqli_num_rows($result);
                                $number1 = mysqli_num_rows($result1);
                                $sobanghi = $number + $number1;
                                if($keyword !='')
                                   echo "<p>Tìm thấy $sobanghi kết quả '$keyword'</p> ";
                                else 
                                    {
                                        if($time !='')
                                            echo "<p>Tìm thấy $sobanghi kết quả '$time'</p>";
                                        else
                                        {
                                            if($price !='')
                                                    echo "<p>Tìm thấy $sobanghi kết quả '$price'</p>";
                                        }
                                }
                                while($data=mysqli_fetch_assoc($result))
                                {
                                ?>
                                    <div class="tour-item">                              
                                        <div class="tour-link"><a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich_ngoai_nuoc&id='.$data['pk_id'];?>"><?php echo $data["ten"];?></a></div>

                                        <div class="tour-inner inner001">
                                            <span class="new"></span>
                                            <?php 
                                                if($data['giam_gia'] != '0')
                                                {
                                            ?>
                                            <div class="tour-sale"><span><?php echo($data["giam_gia"]); ?></span>
                                            </div>
                                            <?php } ?>
                                            <div class="thumb">
                                                <a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich_ngoai_nuoc&id='.$data['pk_id'];?>"><img src="public/frontend/upload/thong_tin_du_lich/<?php echo $data["anh"]?>" alt="<?php echo $data["ten"]?>" /></a>
                                            </div>
                                            <div class="row1" style="border-bottom: none;">
                                                <div class="row_content first">
                                                    Thời gian: <span><?php echo $data["thoi_gian"]?></span>
                                                </div>
                                                <div class="row_content">Khởi hành từ: <span><?php echo $data["khoi_hanh"];?></span></div>
                                                <div class="row_content">Ngày khởi hành: <span><?php echo $data["ngay_khoi_hanh"];?></span></div>
                                                <?php 
                                                    if($data["gia_cu"]!=0)
                                                    {
                                                ?>
                                                <div class="row_content">Giá cũ: <span class="gia_cu"><?php echo number_format($data["gia_cu"]);?> VNĐ</span></div>
                                                <?php } ?>
                                                <div class="row_content last">Giá khuyến mại: <span><?php echo number_format($data["gia_moi"]);?> VNĐ</span></div>                          
                                            </div>
                                            <div class="row2">
                                                <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="50" behavior="alternate" scrolldelay="1300" style="margin-top: 56px;">
                                                    <a href="" class="tour-order">
                                                        <i class="fa fa-hand-o-right" ><span>Xem chi tiết</span></i>
                                                    </a>
                                                </marquee>
                                            </div>
                                    </div>                        
                                </div>
                                 <?php } 
                                while($data=mysqli_fetch_assoc($result1))
                                { 
                                ?>
                                <div class="tour-item">                              
                                        <div class="tour-link"><a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich_trong_nuoc&id='.$data['pk_id'];?>"><?php echo $data["ten"];?></a></div>
                                        <div class="tour-inner inner001">
                                        <span class="new"></span>
                                        <?php 
                                            if($data['giam_gia'] != '0')
                                            {
                                        ?>
                                        <div class="tour-sale"><span><?php echo($data["giam_gia"]); ?></span>
                                        </div>
                                        <?php } ?>
                                        <div class="thumb">
                                            <a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich_trong_nuoc&id='.$data['pk_id'];?>"><img src="public/frontend/upload/thong_tin_du_lich/<?php echo $data["anh"]?>" alt="<?php echo $data["ten"]?>" /></a>
                                        </div>
                                        <div class="row1" style="border-bottom: none;">
                                            <div class="row_content first">
                                                Thời gian: <span><?php echo $data["thoi_gian"]?></span>
                                            </div>
                                            <div class="row_content">Khởi hành từ: <span><?php echo $data["khoi_hanh"];?></span></div>
                                            <div class="row_content">Ngày khởi hành: <span><?php echo $data["ngay_khoi_hanh"];?></span></div>
                                            <?php 
                                                if($data["gia_cu"]!=0)
                                                {
                                            ?>
                                            <div class="row_content">Giá cũ: <span class="gia_cu"><?php echo number_format($data["gia_cu"]);?> VNĐ</span></div>
                                            <?php } ?>
                                            <div class="row_content last">Giá khuyến mại: <span><?php echo number_format($data["gia_moi"]);?> VNĐ</span></div>                          
                                        </div>
                                        <div class="row2">
                                            <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="50" behavior="alternate" scrolldelay="1300" style="margin-top: 56px;">
                                                <a href="" class="tour-order">
                                                    <i class="fa fa-hand-o-right" ><span>Xem chi tiết</span></i>
                                                </a>
                                            </marquee>
                                        </div>
                                    </div>                        
                                </div>
                               <?php } 
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <!-- end main -->

            <!-- left -->
            <div class="left">
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
                    <div class="box mobile-hidden">
                        <div class="box-title">
                            <div class="lb-name"><i class="fa fa-file-text"></i>Tin nổi bật</div>
                        </div>
                        <div class="box-content">
                            <div class="news-featured">
                                <div class="content-news">
                                    <marquee direction="up" scrollamount="2" scrolldelay="2" onmouseover="this.stop()" onmouseout="this.start()">
                                        <ul>
                                            <li>
                                                <a href="" class="img"><img src="image/new_content1.jpg"></a>
                                                <div class="text">Những điểm tham quan hấp dẫn khi đi du lịch Singapore</div>
                                            </li>
                                            <li>
                                                <a href="" class="img"><img src="image/new_content2.jpg"></a>
                                                <div class="text">Những Điểm tham quan thu hút khách du lịch ở Pattaya - Thái Lan</div>
                                            </li>
                                            
                                        </ul>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End tin nổi bật -->

                    <!-- Thống kê -->
                    <div class="box mobile-hidden">
                        <div class="box-title">
                            <div class="lb-name"><i class="fa fa-bar-chart"></i>Thống kê</div>
                        </div><!--box-title-->
                        <div class="box-content">
                            <div class="char-outer">
                                <div class="row"><label><i class="fa fa-user"></i>Số người đang online:</label><span>3</span></div>
                                <div class="row"><label><i class="fa fa-users"></i>Tổng số truy cập:</label><span>10354306</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- End thống kê -->
            </div>
            <!-- end left -->
             <div class="main-qc">
                    <a href="tintuc.html"><img src="public/frontend/image/main-qc/anh1.jpg"></a>
                    <a href="danhmucdacbiet.html"><img src="public/frontend/image/main-qc/anh2.jpg"></a>
                    <a href="dulichnhatban.html"><img src="public/frontend/image/main-qc/anh3.png"></a>
                </div>
                <div class="two-col">
                    <div class="col1">
                        <div class="box">
                            <div class="box-title">
                                <div class="lb-name"><i class="fa fa-map-marker"></i>Khách sạn giá tốt</div>
                            </div>
                            <!-- end box-title -->
                            <div class="box-content">
                                <div class="tour-small hotel-small">
                                    <div class="hotel-ticker">
                                       <marquee direction="up" scrollamount="2" scrolldelay="2" onmouseover="this.stop()" onmouseout="this.start()">
                                        <ul>
                                            <li>
                                                <a href="" class="img"><img src="public/frontend/image/KhachSan/Novotel-Danang-Premier-Han-River.jpg"></a>
                                                <div class="content_hotel">
                                                    <div class="text_title">
                                                    Khách sạn Novotel Danang Premier Han River
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="text"><a href="">Khách sạn Novotel Danang Premier Han River là nơi lý tưởng cho doanh nhân và khách du lịch nghỉ dưỡng. Cách sân bay Đà Nẵng khoảng 4 km. Khách sạn cách Hội An khoảng 30 km.</a></div>
                                                    <div class="price_hotel">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt phòng</div>
                                                </div>
                                                
                                            </li>
                                            <li>
                                                <a href="" class="img"><img src="public/frontend/image/KhachSan/Novotel-Danang-Premier-Han-River.jpg"></a>
                                                <div class="content_hotel">
                                                    <div class="text_title">
                                                    Khách sạn Novotel Danang Premier Han River
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="text"><a href="">Khách sạn Novotel Danang Premier Han River là nơi lý tưởng cho doanh nhân và khách du lịch nghỉ dưỡng. Cách sân bay Đà Nẵng khoảng 4 km. Khách sạn cách Hội An khoảng 30 km.</a></div>
                                                    <div class="price_hotel">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt phòng</div>
                                                </div>
                                                
                                            </li>    
                                            <li>
                                                <a href="" class="img"><img src="public/frontend/image/KhachSan/Novotel-Danang-Premier-Han-River.jpg"></a>
                                                <div class="content_hotel">
                                                    <div class="text_title">
                                                    Khách sạn Novotel Danang Premier Han River
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="text"><a href="">Khách sạn Novotel Danang Premier Han River là nơi lý tưởng cho doanh nhân và khách du lịch nghỉ dưỡng. Cách sân bay Đà Nẵng khoảng 4 km. Khách sạn cách Hội An khoảng 30 km.</a></div>
                                                    <div class="price_hotel">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt phòng</div>
                                                </div>
                                                
                                            </li>
                                            <li>
                                                <a href="" class="img"><img src="public/frontend/image/KhachSan/Novotel-Danang-Premier-Han-River.jpg"></a>
                                                <div class="content_hotel">
                                                    <div class="text_title">
                                                    Khách sạn Novotel Danang Premier Han River
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="text"><a href="">Khách sạn Novotel Danang Premier Han River là nơi lý tưởng cho doanh nhân và khách du lịch nghỉ dưỡng. Cách sân bay Đà Nẵng khoảng 4 km. Khách sạn cách Hội An khoảng 30 km.</a></div>
                                                    <div class="price_hotel">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt phòng</div>
                                                </div>
                                                
                                            </li>
                                            <li>
                                                <a href="" class="img"><img src="public/frontend/image/KhachSan/Novotel-Danang-Premier-Han-River.jpg"></a>
                                                <div class="content_hotel">
                                                    <div class="text_title">
                                                    Khách sạn Novotel Danang Premier Han River
                                                    </div>
                                                    <div class="star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="text"><a href="">Khách sạn Novotel Danang Premier Han River là nơi lý tưởng cho doanh nhân và khách du lịch nghỉ dưỡng. Cách sân bay Đà Nẵng khoảng 4 km. Khách sạn cách Hội An khoảng 30 km.</a></div>
                                                    <div class="price_hotel">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt phòng</div>
                                                </div>
                                                
                                            </li>
                                           
                                        </ul>
                                    </marquee> 
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="" class="btn"><button>Xem thêm</button></a>
                    </div>
                    <!-- end col1 -->
                    <div class="col2">
                        <div class="box">
                            <div class="box-title">
                                <div class="lb-name"><i class="fa fa-car"></i>Xe du lịch cho thuê giá rẻ</div>
                            </div>
                            <!-- end box-title -->
                            <div class="box-content">
                                <div class="car-small car-small">
                                    <div class="car-ticker">
                                     <marquee direction="up" scrollamount="2" scrolldelay="2" onmouseover="this.stop()" onmouseout="this.start()">
                                        <ul>
                                            <li>
                                                <a href="" class="img"><img src="public/frontend/image/XeDuLich/Xe7Cho.jpg"></a>
                                                <div class="content_car">
                                                    <div class="text_title">
                                                    Cho thuê xe ô tô 7 chỗ
                                                    </div>
                                                    <div class="text"><a href="">Hiện nay công ty chúng tôi có những loại xe 7 chỗ nhãn hiệu: Toyota Innova, Toyota Zace, Chevrolet. Quý khách vui lòng gọi điện tới văn phòng để được tư vấn và báo giá chính xác nhất .</a></div>
                                                    <div class="price_car">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt xe</div>
                                                </div> 
                                            </li>
                                             <li>
                                                <a href="" class="img"><img src="public/frontend/image/XeDuLich/Xe7Cho.jpg"></a>
                                                <div class="content_car">
                                                    <div class="text_title">
                                                    Cho thuê xe ô tô 7 chỗ
                                                    </div>
                                                    <div class="text"><a href="">Hiện nay công ty chúng tôi có những loại xe 7 chỗ nhãn hiệu: Toyota Innova, Toyota Zace, Chevrolet. Quý khách vui lòng gọi điện tới văn phòng để được tư vấn và báo giá chính xác nhất .</a></div>
                                                    <div class="price_car">
                                                        Giá từ: <span>1.892.000 VNĐ</span>
                                                    </div>
                                                    <div class="tour-oder">Đặt xe</div>
                                                </div> 
                                            </li>
                                            
                                           
                                        </ul>
                                        </marquee>
                                        
                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn"><button>Xem thêm</button></a>
                    </div>
                    <!-- end col2 -->

                </div>
                <!-- end two-col -->
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
