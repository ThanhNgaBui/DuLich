<div class="box">
        <div class="box-title">
            <div class="lb-name"><i class="fa fa-area-chart"></i>Cho thuê xe</div>
        </div>  
        <div class="tour-inside">
            <div class="list-tour">
            <?php
                foreach($arr as $row)
                {
            ?>      
                <div class="tour-item">                              
                    <div class="tour-link"><a href="<?php echo 'index.php?controller=chi_tiet_cho_thue_xe&id='.$row['pk_id'];?>"><?php echo $row["ten"]?></a></div>
                    <div class="tour-inner inner001">
                        <div class="thumb">
                            <a href="<?php echo 'index.php?controller=chi_tiet_cho_thue_xe&id='.$row['pk_id'];?>"><img src="public/frontend/upload/cho_thue_xe/<?php echo $row["anh"]?>" alt="<?php echo $row["ten"]?>" /></a>
                        </div>
                        <div class="row1">
                            <div class="row_content first" style="font-weight: normal;">
                                <?php echo $row["noi_dung"]?>
                            </div>
                           
                            <div class="row_content">Giá từ: <span style="color: red; font-weight:bold;"><?php echo number_format($row["gia"]);?> VNĐ</span></div>                          
                        </div>
                        <div class="row2">
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="50" behavior="alternate" scrolldelay="1300">
                                <a href="" class="tour-order">
                                    <i class="fa fa-hand-o-right"><span>Đặt xe</span></i>
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
                        <a href="index.php?controller=cho_thue_xe&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
    </div>
    <!-- end box -->
