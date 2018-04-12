 <div class="box">
        <div class="box-title">          
            <div class="lb-name"><i class="fa fa-area-chart"></i><?php echo $arr[0]["dat_nuoc_du_lich"];?></div>           
        </div>  
        <div class="tour-inside">
            <div class="list-tour">
            <?php
                foreach($arr as $row)
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
                            <div class="row_content">Giá cũ: <span class="price_old"><?php echo number_format($row["gia_cu"]);?> VNĐ</span></div>
                            <?php } ?>
                            <div class="row_content last">Giá khuyến mại: <span><?php echo number_format($row["gia_moi"]);?> VNĐ</span></div>                          
                        </div>
                        <div class="row2">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="50" behavior="alternate" scrolldelay="1300">
                                <a href="<?php echo 'index.php?controller=chi_tiet_noi_du_lich&id='.$row['pk_id'];?>" class="tour-order">
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
           
        </div>
        <!-- end tour-inside-->
        <div>
        <style type="text/css">
            .pagination{padding: 0px; margin: 30px 20px 20px 0;}
        </style>
        <ul class="pagination pull-right">
            <li><a href="">Trang</a></li>
                <?php 
                    for($i=1; $i<=$so_trang;$i++)
                    {
                ?>
                    <li <?php echo $trang==$i?"class='active'":""; ?> >
                         <a href="index.php?controller=noi_du_lich_trong_nuoc&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                <?php } ?>
        </ul>
    </div>
    </div>
    <!-- end box -->
    
  