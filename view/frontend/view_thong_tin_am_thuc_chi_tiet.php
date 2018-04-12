<div class="box">
	<div class="box-title">
        <div class="lb-name">Thông tin ẩm thực</div>
    </div>
    <div class="box-content">
        <?php 
            foreach ($arr as $row)
            {
        ?>
        <div class="content" style="color: #E93707; font-size: 15px;">
            <?php echo $row["chi_tiet"];?>
        </div>
        <?php } ?>
    </div>
</div>
<div style="font-weight: bold; font-size: 16px;">Tags</div>
<div class="box">
	<div class="box-title">
        <div class="lb-name">Các tin khác</div>
    </div>
    <div class="box-content" style="height: 310px; overflow: hidden; ">
    	<div class="news-small">
    		<?php
    			foreach($arr_other as $row)
    			{
    		?>
    		<div class="list-new">
    			<div class="img">
    				<a href="<?php echo 'index.php?controller=thong_tin_am_thuc_chi_tiet&id='.$row["pk_id"];?>"><img src="public/frontend/upload/thong_tin_am_thuc/<?php echo $row["anh"];?>"></a>
    			</div>
    			<div class="g-content">
    				<div class="g-row">
    					<a href="<?php echo 'index.php?controller=thong_tin_am_thuc_chi_tiet&id='.$row["pk_id"];?>" class="g-title"><?php echo $row["ten"];?></a>
    					<span></span>
    				</div>
    				<div class="g-row last"><?php echo $row["noi_dung"];?></div>
    			</div>
    		</div>
    		<?php } ?>
    	</div>
    </div>
    <a href="index.php?controller=thong_tin_am_thuc" style="float: right;font-size: 13px; margin: 10px 24px 0 0; font-weight: bold;">Xem thêm>></a>
</div>