<div class="box">
	<div class="box-title">
        <div class="lb-name">Thông tin ẩm thực</div>
    </div>
    <div class="box-content">
    	<div class="news-small">
    		<?php
    			foreach($arr as $row)
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
</div>