<div class="box">
    <?php 
        foreach($arr as $row)
        {
    ?>
    <div class="box-title">
            <div class="lb-name"><i class="fa fa-area-chart"></i>Khách sạn</div> 
    </div> 
    <div class="box-content">
        <div class="ten">
            <h1><?php echo $row["ten"];?></h1>
        </div>
        <div class="noidung">
            <div class="nd_left">
                <img style="margin-right: 30px;" src="public/frontend/upload/khach_san/<?php echo $row["anh"];?>">
            </div>
            <div class="nd_center" style="width: 250px;">
                <div class="row"><?php echo $row["noi_dung"];?></div>
                <div class="row gia">Giá từ: <span><?php echo number_format($row["gia"]);?> VNĐ</span></div>
                <a href="#tab3" class="button" id="chucnang" style="margin-top: 10px;">Đặt phòng</a>
            </div>
        </div>
        <div class="lichtrinh">
            <ul class="tabs">
                <li class="active" rel="tab1">Thông tin chi tiết</li>
                <li class="" rel="tab2">Bảng giá</li>
                <li class="" rel="tab3">Đặt phòng</li>
            </ul>
            <div class="tab_container">
                <div class="tab_content" id="tab1">
                    <?php echo $row["chi_tiet"];?>
                </div>
                
                <div class="tab_content" id="tab2">
                    <?php echo $row["bang_gia"];?>
                </div>

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
