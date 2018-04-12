<div class="box">
    <div class="box-title">
        <div class="lb-name"><i class="fa fa-map-marker"></i>Khách sạn giá tốt</div>
    </div>
    <!-- end box-title -->
    <div class="box-content">
        <div class="tour-small hotel-small">
            <div class="hotel-ticker">
                <ul>
                    <?php 
                        foreach($arr as $row)
                            {
                    ?>
                        <li>
                            <div class="image">
                                <a href="<?php echo 'index.php?controller=chi_tiet_khach_san&id='.$row['pk_id'];?>"><img src="public/frontend/upload/khach_san/<?php echo $row["anh"]; ?>" style="width: 100%;"></a>
                            </div>
                            <div class="content_hotel">
                                <div class="text_title">
                                    <a href="<?php echo 'index.php?controller=chi_tiet_khach_san&id='.$row['pk_id'];?>"><?php echo $row["ten"]; ?> </a>
                                </div>
                                <div class="star">
                                    
                                        <i class="fa fa-star"></i>
                                        
                                    
                                </div>
                                <div class="text"><a href=""><?php echo $row["noi_dung"]; ?></a></div>
                                <div class="price_hotel" style="margin-top: -10px;">
                                    Giá từ: <span><?php echo number_format($row["gia"]); ?> VNĐ</span>
                                </div>                        
                            </div>                         
                        </li>
                    <?php } ?>                                   
                </ul>                      
            </div>
        </div>
    </div>
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
                        <a href="index.php?controller=khachsan&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                <?php } ?>
        </ul>
    </div>
</div>


