<nav class="clearfix">
				    <ul class="clearfix">
				        <li><a href="index.php">Trang chủ</a></li>
				        <li><a href="index.php?controller=du_lich_trong_nuoc">Du lịch trong nước</a>
							<ul class="sub-menu clearfix">
								<?php 
									foreach ($arr_trong_nuoc as $row)
									{
								?>
									<li><a href="index.php?controller=noi_du_lich&fk_danh_muc=<?php echo $row["fk_danh_muc"];?>"><?php echo $row["dat_nuoc_du_lich"];?></a>
									</li>
								<?php } ?>
							</ul>
				        </li>
				        <li><a href="index.php?controller=du_lich_ngoai_nuoc">Du lịch ngoài nước</a>
							<ul class="sub-menu">
								<?php 
									foreach($arr_nuoc_ngoai as $row)
									{
								?>
									<li><a href="index.php?controller=noi_du_lich&fk_danh_muc=<?php echo $row["fk_danh_muc"];?>"><?php echo $row["dat_nuoc_du_lich"];?></a>
									</li>
								<?php } ?>
							</ul>
				        </li>
				        <li><a href="index.php?controller=tin_tuc_du_lich">Tin tức du lịch</a>
							<ul class="sub-menu">
								<li><a href="index.php?controller=lich_khoi_hanh">Lịch khởi hành</a></li>
								<li><a href="index.php?controller=danh_lam_thang_canh">Danh lam thắng cảnh</a></li>
								<li><a href="index.php?controller=thong_tin_am_thuc">Thông tin ẩm thực</a></li>
								<li><a href="index.php?controller=cam_nang_du_lich">Cẩm nang du lịch</a></li>
							</ul>
				        </li>
				        <li><a href="#">Dịch vụ</a>
							<ul class="sub-menu">
								<li><a href="index.php?controller=cho_thue_xe">Cho thuê xe</a></li>
								<li><a href="index.php?controller=khachsan">Khách sạn</a></li>
							</ul>
				        </li>
				        <li><a href="index.php?controller=gioi_thieu">Giới thiệu</a></li>
				        <li><a href="index.php?controller=lien_he">Liên hệ</a></li>
				    </ul>
	    		<a href="#" id="pull">Menu</a>
</nav>