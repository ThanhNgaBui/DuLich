<div class="box">
	<div class="box-title">
        <div class="lb-name">Lịch khởi hành</div>
    </div>
    <div class="box-content">
    	<div class="news-small">
    		<?php
    			foreach($arr as $row)
    			{
    		?>
    		<div class="list-new">
    			<div class="img">
    				<a href="<?php echo 'index.php?controller=lich_khoi_hanh_chi_tiet&id='.$row["pk_id"];?>"><img src="public/frontend/upload/lich_khoi_hanh/<?php echo $row["anh"];?>"></a>
    			</div>
    			<div class="g-content">
    				<div class="g-row">
    					<a href="<?php echo 'index.php?controller=lich_khoi_hanh_chi_tiet&id='.$row["pk_id"];?>" class="g-title"><?php echo $row["ten"];?></a>
    					<span></span>
    				</div>
    				<div class="g-row last"><?php echo $row["noi_dung"];?></div>
    			</div>
    		</div>
    		<?php } ?>
    	</div>
    </div>
</div>