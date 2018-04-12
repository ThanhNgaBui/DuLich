<div class="box">
	<?php 
		foreach($arr as $row)
		{
	?>
	<div class="box-title">
            <div class="lb-name"><i class="fa fa-area-chart"></i><?php echo $row["dat_nuoc_du_lich"];?></div> 
    </div> 
    <div class="box-content">
    	<div class="ten">
    		<h1><?php echo $row["ten"];?></h1>
    	</div>
    	<div class="noidung">
    		<div class="nd_left">
    			<img src="public/frontend/upload/thong_tin_du_lich/<?php echo $row["anh"];?>">
    		</div>
    		<div class="nd_center">
    			<div class="row">Thời gian: <?php echo $row["thoi_gian"];?></div>
    			<div class="row">Khởi hành từ: <?php echo $row["khoi_hanh"];?></div>
    			<div class="row">Ngày khởi hành: <?php echo $row["ngay_khoi_hanh"];?></div>
    			<div class="row">Số chỗ còn: <?php echo $row["so_cho_ngoi"];?></div>
    			<div class="row">Giá cũ: <?php echo number_format($row["gia_cu"]);?> VNĐ</div>
    			<div class="row gia">Giá khuyến mãi: <span><?php echo number_format($row["gia_moi"]);?> VNĐ</span></div>
    			<a href="#tab3" class="button" id="chucnang" style="margin-top: 10px;">Đặt tour</a>
    		</div>
    		<div class="nd_right">
    			<div class="row">
    				<b><i class="fa fa-phone"></i>Hỗ trợ 1: <span style="color: #ff7605; font-size: 16px;">01626478975</span></b>
    				<img src="public/frontend/image/skype.png">
    			</div>
    			<div class="row">
    				<b><i class="fa fa-phone"></i>Hỗ trợ 2: <span style="color: #ff7605; font-size: 16px;">01694689475</span></b>
    				<img src="public/frontend/image/skype.png">
    			</div>
    		</div>
    	</div>
    	<div class="lichtrinh">
    		<ul class="tabs">
			    <li class="active" rel="tab1">Lịch trình</li>
			    <li class="" rel="tab2">Lời nhắn</li>
			    <li class="" rel="tab3">Đặt tour</li>
			</ul>
			<div class="tab_container">
				<div class="tab_content" id="tab1">
					<?php echo $row["lich_trinh"];?>
				</div>
				
				<div class="tab_content" id="tab2">
					<h1 style="text-align: center; color: #BA0707; font-size: 30px;">*** Mời bạn để lại lời nhắn ***</h1>
					<div class="panel panel-primary">
						<div class="panel-body">
							<form action="">
								<!-- row -->
								<div class="row" style="margin-top: 5px;">
									<div class="col-md-2">Họ và tên</div>
									<div class="col-md-10"><input type="text" name="ten" value=" " required class="form-control"></div>
								</div>
								<!-- end row -->	
								<!-- row -->
								<div class="row" style="margin-top: 5px;">
									<div class="col-md-2">Địa chỉ</div>
									<div class="col-md-10"><input type="text" name="ten" value=" " required class="form-control"></div>
								</div>
								<!-- end row -->	
								<!-- row -->
								<div class="row" style="margin-top: 5px;">
									<div class="col-md-2">Điện thoại</div>
									<div class="col-md-10"><input type="text" name="ten" value=" " required class="form-control"></div>
								</div>
								<!-- end row -->
								<!-- row -->
								<div class="row" style="margin-top: 5px;">
									<div class="col-md-2">Email</div>
									<div class="col-md-10"><input type="text" name="ten" value=" " required class="form-control"></div>
								</div>
								<!-- end row -->	
								<!-- row -->
								<div class="row" style="margin-top: 5px;">
									<div class="col-md-2">Nội dung</div>
									<div class="col-md-10"><textarea type="text" name="ten" value=" " required class="form-control"></textarea>
								</div>
								<!-- end row -->				
								<!-- row -->
								<div class="row" style="margin-top: 5px;">
									<div class="col-md-2"></div>
									<div class="col-md-10" style="margin: 5px 0 0 133px;">
										<input type="submit" value="Process" class="btn btn-primary">
									</div>
								</div>
								<!-- end row -->
							</form>
						</div>
						</div>
					</div>
				</div>
				<!-- end tab2-->

                <div class="tab_content" id="tab3">
                        <div class="col-md-10 col-xs-offset-1" style="padding: 0px; width: 670px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Thông tin liên hệ</div>
                                <div class="panel-body">
                                    <form enctype="multipart/form-data" method="post" action="" id="mainform">
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Họ và tên <span style="color: red; margin-left: 15px; font-size: 13px;">(*)</span></div>
                                            <div class="col-md-9"><input type="text" name="" value="" required class="form-control"></div>
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Địa chỉ <span style="color: red; margin-left: 15px; font-size: 13px;">(*)</span></div>
                                            <div class="col-md-9"><input type="text" name="" value="" required class="form-control"></div>
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Điện thoại <span style="color: red; margin-left: 15px; font-size: 13px;">(*)</span></div>
                                            <div class="col-md-9"><input type="text" name="" value="" required class="form-control"></div>
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Email <span style="color: red; margin-left: 15px; font-size: 13px;">(*)</span></div>
                                            <div class="col-md-9"><input type="text" name="" value="" required class="form-control"></div>
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Yêu cầu khác</div>
                                            <div class="col-md-9">
                                                <textarea name="" required class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Khách hàng đi tour</div>
                                            <div class="col-md-9">
                                                <input type="radio"><span style="margin-left: 3px; margin-right: 30px;">Người lớn</span>
                                                <input type="radio"><span style="margin-left: 3px; margin-right: 30px;">Trẻ em</span>
                                                <input type="radio"><span style="margin-left: 3px;">Trẻ nhỏ</span>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Hình thức thanh toán</div>
                                            <div class="col-md-9">
                                                <input type="radio"><span style="margin-left: 3px; margin-right: 30px;">Tiền mặt</span>
                                                <input type="radio"><span style="margin-left: 3px; margin-right: 30px;">Chuyển khoản</span>
                                                <input type="radio"><span style="margin-left: 3px;">Thẻ tín dụng</span>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                         <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <img src="image.php" id="img-captcha"/>
                                                <img src="public/frontend/image/btnnewimg.png" onclick="$('#img-captcha').attr('src', 'image.php?rand=' + Math.random())" style="margin-left: 10px;">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                         <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3">Mã xác minh <span style="color: red; margin-left: 15px; font-size: 13px;">(*)</span></div>
                                            <div class="col-md-9">
                                                <input type="text" id="captcha" value="" class="form-control"/>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                         <!-- row -->
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <input type="submit" value="Process" class="btn btn-primary" id="submit">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <span style="color: red; float: right; font-size: 14px; margin-bottom: 20px; font-weight: bold;">(*) : Thông tin bắt buộc</span>
                    </div>
                    <!-- end tab3 -->

			</div>

		</div>
    </div>
    <?php } ?>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#chucnang').click(function(){
            var idtab = $(this).attr('href');
            $(idtab).show();
        });
    });
</script>
<script language="javascript">
            $(document).ready(function(){
                $('#submit').click(function()
                {
                    // Lấy dự liệu
                    var data = {
                        captcha : $('#captcha').val()
                    };
                     
                    // Validate
                    if ($.trim(data.captcha) == ''){
                        alert('Bạn chưa nhập captcha');
                    }
                    else{
                         
                        $.ajax({
                            type : 'POST',
                            dataType : 'json',
                            url : 'ajax_validate.php',
                            data : data,
                            success : function (result){
                                if (!result.hasOwnProperty('error')){
                                    alert('Kết quả trả về không phù hợp');
                                }
                                else if (result['error'] == 'success'){
                                    $('#mainform').submit();
                                    alert('Kiểm tra thành công');
                                }
                                else{
                                    if (result['content'] != ''){
                                        alert(result['content']);
                                    }
                                     
                                    if (result['captcha'] != ''){
                                        alert(result['captcha']);
                                    }
                                }
                            },
                            error : function (){
                                alert('Có lỗi xảy ra trong quá trình xử lý');
                            }
                        });
                    }
                    return false;
                });
            });
        </script>