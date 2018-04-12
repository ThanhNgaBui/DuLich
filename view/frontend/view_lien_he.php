<div class="box">
	<div class="box-title">
        <div class="lb-name">Thông tin liên hệ</div>
    </div>
    <div class="thongtinlienhe">
        <div class="col-md-10 col-xs-offset-1" style="padding: 0px; width: 670px; margin: 20px 0 0 20px;">
            <div class="panel panel-primary">
                <div class="panel-heading">Thông tin liên hệ</div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" method="post" action="" id="">
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
        </div>
        <span style="color: red; float: right; font-size: 14px; margin-bottom: 20px; font-weight: bold;">(*) : Thông tin bắt buộc</span>
</div>
<div class="box">
	<div class="box-title">
        <div class="lb-name">Liên hệ</div>
    </div>
    <div id="google_map" style="margin-top: 20px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.993102515234!2d105.79610831425909!3d21.03296198599609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4721c01a09%3A0x5806afc80809ffab!2zMTY1IEPhuqd1IEdp4bqleSwgROG7i2NoIFbhu41uZywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1515767059886" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="text_map">
        <p>Văn phòng Hà Nội: 165 Cầu Giấy, Dịch Vọng, Cầu Giấy, Hà Nội</p>
        <p>Tel: 01626478975</p>
        <p>HotLine: 094579274</p>
        <p>Email: kent@gmail.com</p>
    </div>
</div>
<!-- end thong tin lien he -->
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