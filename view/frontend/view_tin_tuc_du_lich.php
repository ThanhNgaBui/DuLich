<div class="box" style="overflow: hidden;">
	<div class="box-title">
        <div class="lb-name">Lịch khởi hành</div>
    </div>
    <div class="box-content">
    	<div class="news-small">
    		<?php
    			foreach($arr_lich_khoi_hanh as $row)
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
    <a href="index.php?controller=lich_khoi_hanh" style="float: right; margin-right: 10px; font-weight: bold;"> Xem thêm >></a>
</div>
<!-- end lịch khởi hành -->
<div class="box" style="overflow: hidden; ">
    <div class="box-title">
        <div class="lb-name">Danh lam thắng cảnh</div>
    </div>
    <div class="box-content">
        <div class="news-small">
            <?php
                foreach($arr_danh_lam_thang_canh as $row)
                {
            ?>
            <div class="list-new">
                <div class="img">
                    <a href="<?php echo 'index.php?controller=danh_lam_thang_canh_chi_tiet&id='.$row["pk_id"];?>"><img src="public/frontend/upload/danh_lam_thang_canh/<?php echo $row["anh"];?>"></a>
                </div>
                <div class="g-content">
                    <div class="g-row">
                        <a href="<?php echo 'index.php?controller=danh_lam_thang_canh_chi_tiet&id='.$row["pk_id"];?>" class="g-title"><?php echo $row["ten"];?></a>
                        <span></span>
                    </div>
                    <div class="g-row last"><?php echo $row["noi_dung"];?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <a href="index.php?controller=danh_lam_thang_canh" style="float: right; margin-right: 10px; font-weight: bold;"> Xem thêm >></a>
</div>
<!-- end danh lam thắng cảnh -->
<div class="box" style="overflow: hidden;">
    <div class="box-title">
        <div class="lb-name">Thông tin ẩm thực</div>
    </div>
    <div class="box-content">
        <div class="news-small">
            <?php
                foreach($arr_thong_tin_am_thuc as $row)
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
    <a href="index.php?controller=thong_tin_am_thuc" style="float: right; margin-right: 10px; font-weight: bold;"> Xem thêm >></a>
</div>
<!-- end thông tin ẩm thực -->
<div class="box" style="overflow: hidden;">
    <div class="box-title">
        <div class="lb-name">Cẩm nang du lịch</div>
    </div>
    <div class="box-content">
        <div class="news-small">
            <?php
                foreach($arr_cam_nang_du_lich as $row)
                {
            ?>
            <div class="list-new">
                <div class="img">
                    <a href="<?php echo 'index.php?controller=cam_nang_du_lich_chi_tiet&id='.$row["pk_id"];?>"><img src="public/frontend/upload/cam_nang_du_lich/<?php echo $row["anh"];?>"></a>
                </div>
                <div class="g-content">
                    <div class="g-row">
                        <a href="<?php echo 'index.php?controller=cam_nang_du_lich_chi_tiet&id='.$row["pk_id"];?>" class="g-title"><?php echo $row["ten"];?></a>
                        <span></span>
                    </div>
                    <div class="g-row last"><?php echo $row["noi_dung"];?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <a href="index.php?controller=cam_nang_du_lich" style="float: right; margin-right: 10px; font-weight: bold;"> Xem thêm >></a>
</div>
<!-- end cẩm nang du lịch -->
