<div class="box mobile-hidden">
	<div class="box-title">
		<div class="lb-name"><i class="fa fa-file-text"></i>Tin nổi bật</div>
	</div>
	<div class="box-content">
		<div class="news-featured">
			<div class="content-news">
				<marquee direction="up" scrollamount="2" scrolldelay="2" onmouseover="this.stop()" onmouseout="this.start()">
					<ul>
					<?php
						foreach($arr_cam_nang_du_lich as $row)
						{
					?>
						<li>
							<a href="<?php echo 'index.php?controller=cam_nang_du_lich_chi_tiet&id='.$row["pk_id"];?>" class="img"><img src="public/frontend/upload/cam_nang_du_lich/<?php echo $row["anh"];?>"></a>
							<div class="text" style="text-transform: capitalize;"><?php echo $row["ten"];?></div>
						</li>
					<?php } ?>	

					<?php
						foreach($arr_danh_lam_thang_canh as $row)
						{
					?>
						<li>
							<a href="<?php echo 'index.php?controller=danh_lam_thang_canh_chi_tiet&id='.$row["pk_id"];?>" class="img"><img src="public/frontend/upload/danh_lam_thang_canh/<?php echo $row["anh"];?>"></a>
							<div class="text" style="text-transform: capitalize;"><?php echo $row["ten"];?></div>
						</li>
					<?php } ?>	

					<?php
						foreach($arr_lich_khoi_hanh as $row)
						{
					?>
						<li>
							<a href="<?php echo 'index.php?controller=lich_khoi_hanh_chi_tiet&id='.$row["pk_id"];?>" class="img"><img src="public/frontend/upload/lich_khoi_hanh/<?php echo $row["anh"];?>"></a>
							<div class="text" style="text-transform: capitalize;"><?php echo $row["ten"];?></div>
						</li>
					<?php } ?>	

					<?php
						foreach($arr_thong_tin_am_thuc as $row)
						{
					?>
						<li>
							<a href="<?php echo 'index.php?controller=thong_tin_am_thuc_chi_tiet&id='.$row["pk_id"];?>" class="img"><img src="public/frontend/upload/thong_tin_am_thuc/<?php echo $row["anh"];?>"></a>
							<div class="text" style="text-transform: capitalize;"><?php echo $row["ten"];?></div>
						</li>
					<?php } ?>	

					<?php
						foreach($arr_khach_san as $row)
						{
					?>
						<li>
							<a href="<?php echo 'index.php?controller=chi_tiet_khach_san&id='.$row["pk_id"];?>" class="img"><img src="public/frontend/upload/khach_san/<?php echo $row["anh"];?>"></a>
							<div class="text" style="text-transform: capitalize;"><?php echo $row["ten"];?></div>
						</li>
					<?php } ?>	


					</ul>
                </marquee>
			</div>
		</div>
	</div>
</div>