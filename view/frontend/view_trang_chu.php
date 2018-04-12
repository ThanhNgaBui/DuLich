<!-- tour hot -->
<div class="box">
    <div class="box-title">
        <div class="lb-name"><i class="fa fa-fire"></i>Tour du lịch hot nhất</div>
    </div>  
            <marquee behavior="scroll" direction="right" onMouseOver="this.setAttribute('scrollamount', 0, 0);this.stop();" OnMouseOut="this.setAttribute('scrollamount', 2, 0);this.start();" height="307px" scrollamount="2"> 
                <div class="tour-hot"> 

                    <div id="hot_slider">
                             
                            <?php 
                                foreach($arr_hot as $row)
                                {
                             ?>
                             
                                <div class="tour-item">
                                    <div class="tour-link"><a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>"><?php echo $row["ten"];?></a></div>
                                    <div class="tour-inner <?php echo $row["mau_nen"];?>">
                                        <span class="new"></span>
                                            <?php
                                                if($row["giam_gia"] !='0')
                                                {
                                            ?>
                                                <div class="tour-sale"><span><?php echo $row["giam_gia"];?></span></div>
                                                <?php } ?>
                                                <div class="thumb">
                                                  <a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>"><img src="public/frontend/upload/thong_tin_du_lich/<?php echo $row["anh"];?>" alt="<?php echo $row["ten"];?>" /></a>
                                                </div>
                                                <div class="row1">
                                                    <div class="count-number">Số chỗ còn nhận<span><?php echo $row["so_cho_ngoi"];?></span></div>
                                                    <a class="tour-view" href="">Xem</a>
                                                </div>
                                                <!-- end row1 -->
                                                <div class="row2">
                                                    <div class="row2-left">
                                                        Thời gian<br>
                                                        <b><?php echo $row["thoi_gian"];?>
                                                    </div>
                                                    <div class="row2-right">
                                                        Giá<br><span class="tour-price"><?php echo number_format($row["gia_moi"]);?></span>
                                                    </div>
                                                </div>
                                              <!-- end row2 -->
                                            </div>
                                            <!-- end tour-inner inner01-->  
                                        </div>
                                       
                                        <!-- end tour-item -->
                                        <?php } ?>
                                     
                                </div>
                                
                                <!-- end hot-slider -->
                            </div>
                            <!-- end tour-hot -->
                        </marquee>
                        </div>
                        <!-- end box -->
                        
<!-- domestic tourism -->
    <div class="box">
        <div class="box-title">
            <div class="lb-name"><i class="fa fa-area-chart"></i>Tour du lịch trong nước</div>
        </div>  
        <div class="tour-inside">
            <div class="list-tour" style="height: 690px;">
            <?php
                foreach($arr_domestic as $row)
                {
            ?>      
                <div class="tour-item">                              
                    <div class="tour-link"><a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>"><?php echo $row["ten"]?></a></div>
                    <div class="tour-inner inner001">
                        <span class="new"></span>
                        <?php 
                            if($row['giam_gia'] != '0')
                            {
                        ?>
                        <div class="tour-sale"><span><?php echo($row["giam_gia"]); ?></span>
                        </div>
                        <?php } ?>
                        <div class="thumb">
                            <a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>"><img src="public/frontend/upload/thong_tin_du_lich/<?php echo $row["anh"]?>" alt="<?php echo $row["ten"]?>" /></a>
                        </div>
                        <div class="row1">
                            <div class="row_content first">
                                Thời gian: <span><?php echo $row["thoi_gian"]?></span>
                            </div>
                            <div class="row_content">Khởi hành từ: <span><?php echo $row["khoi_hanh"];?></span></div>
                            <div class="row_content">Ngày khởi hành: <span><?php echo $row["ngay_khoi_hanh"];?></span></div>
                            <?php 
                                if($row["gia_cu"] == $row["gia_moi"])
                                {
                            ?>
                            <div class="row_content">Giá cũ: <span class="gia_cu"><?php echo number_format($row["gia_cu"]);?> VNĐ</span></div>
                            <?php } ?>
                            <div class="row_content last">Giá khuyến mại: <span><?php echo number_format($row["gia_moi"]);?>VNĐ</span></div>                          
                        </div>
                        <div class="row2">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="50" behavior="alternate" scrolldelay="1300">
                                <a href="" class="tour-order">
                                    <i class="fa fa-hand-o-right"><span>Xem chi tiết</span></i>
                                </a>
                            </marquee>
                        </div>
                    </div>                        
                </div>
                <?php } ?>
                <!-- end tour-item -->                               
            </div>
            <!-- end list-tour -->
            <a href="index.php?controller=du_lich_trong_nuoc" class="btn_Xem"><button>Xem thêm</button></a>
        </div>
        <!-- end tour-inside-->

    </div>
    <!-- end box -->

<!-- tourism abroad -->
    <div class="box">
        <div class="box-title">
            <div class="lb-name"><i class="fa fa-area-chart"></i>Tour du lịch ngoài nước</div>
        </div>  
        <div class="tour-inside">
            <div class="list-tour" style="height: 690px;">
            <?php
                foreach($arr_abroad as $row)
                {
            ?>      
                <div class="tour-item">                              
                    <div class="tour-link"><a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>"><?php echo $row["ten"]?></a></div>
                    <div class="tour-inner inner001">
                        <span class="new"></span>
                        <?php 
                            if($row['giam_gia'] != '0')
                            {
                        ?>
                        <div class="tour-sale"><span><?php echo($row["giam_gia"]); ?></span>
                        </div>
                        <?php } ?>
                        <div class="thumb">
                            <a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>"><img src="public/frontend/upload/thong_tin_du_lich/<?php echo $row["anh"]?>" alt="<?php echo $row["ten"]?>" /></a>
                        </div>
                        <div class="row1">
                            <div class="row_content first">
                                Thời gian: <span><?php echo $row["thoi_gian"]?></span>
                            </div>
                            <div class="row_content">Khởi hành từ: <span><?php echo $row["khoi_hanh"];?></span></div>
                            <div class="row_content">Ngày khởi hành: <span><?php echo $row["ngay_khoi_hanh"];?></span></div>
                            <?php 
                                if($row["gia_cu"]==$row["gia_moi"])
                                {
                            ?>
                            <div class="row_content">Giá cũ: <span class="gia_cu"><?php echo number_format($row["gia_cu"]);?> VNĐ</span></div>
                            <?php } ?>
                            <div class="row_content last">Giá khuyến mại: <span><?php echo number_format($row["gia_moi"]);?>VNĐ</span></div>                          
                        </div>
                        <div class="row2">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="50" behavior="alternate" scrolldelay="1300">
                                <a href="" class="tour-order">
                                    <i class="fa fa-hand-o-right"><span>Xem chi tiết</span></i>
                                </a>
                            </marquee>
                        </div>
                    </div>                        
                </div>
                <?php } ?>
                <!-- end tour-item -->                               
            </div>
            <!-- end list-tour -->
           <a href="index.php?controller=du_lich_ngoai_nuoc" class="btn_Xem"><button>Xem thêm</button></a>
        </div>
        <!-- end tour-inside-->
		
    </div>
    <!-- end box -->

