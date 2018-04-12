$(function(){
	//Số lượng hình muốn hiển thị
	var display_image_number=2;
	//Lựa chọn cách thức xoay vòng tròn(circle) của slide bằng cách thay đổi circle_method bằng các con số tương ứng
	//Method=1: Sau khi chạm đến giới hạn slide, slider sẽ trượt thẳng về vị trí cuối cùng hoặc đầu tiên
	//Method=2: Sau khi chạm đến giới hạn slide, slide sẽ được quay vòng qua từng hình
	var circle_method=2;
	//Tốc độ dịch chuyển của từng hình ảnh(đơn vị milisecond)
	var anispeed=200;
	//Lựa chọn có sử dụng chế độ tự động cuốn hình slide
	//1=kích hoạt, 0=không kích hoạt
	var auto_scroll=1;
	//Nếu giá trị auto_scroll=1 thì có thể điều chỉnh giá trị sau để thay đổi thời gian cuộn
	var timeinterval=1200;

	//Xác định các thông số của slideshow

	//Xác định số lượng hình ảnh của slide, chiều rộng của mỗi hình để tìm ra độ rộng của slider
	var image_count=$('.tour-item').length;
	var image_width=$('.tour-item').width();
	var slider_width=image_width * image_count;
	//Xác định chiều rộng của khung hiển thị slide
	var display_width=display_image_number*image_width;
	//Chỉnh độ dài slider tương ứng với số lượng hình cần hiển thị thông qua display_width
	$('.tour-hot').css("width", display_width+"px");
	//Chỉnh lại độ dài của khối bao quanh
	$('#hot-slider').css("width", slider_width+"px");
	// ========= Xử lý khi click nút next và prev =========
	
	function left_slide_circle(){
		$('.tour-item:last-child').addClass('swapthis'); // Xác định hình đang ở vị trí cuối cùng
		$('.swapthis').insertBefore('.tour-item:first'); // Chuyển hình cuối lên trước hình đầu tiên
		$('#hot-slider').css("left",-image_width + "px"); // Dịch chuyển tức thời vị trí của stage sang một khoảng bằng 1 slide-image
		$('#hot-slider').stop().animate({left:0},anispeed); // Thực hiện animation
		$('.swapthis').removeClass('swapthis'); // Reset class cho slide-image vừa chuyển
	}
	function right_slide_circle(){
		$('.tour-item:first').addClass('swapthis'); // Xác định hình đang ở vị trí cuối cùng
		$('.swapthis').insertAfter('.tour-item:last-child'); // Chuyển hình cuối lên trước hình đầu tiên
		$('#hot-slider').css("left",-(slider_width - image_width - display_width) + "px"); // Dịch chuyển tức thời vị trí của stage sang một khoảng bằng 1 slide-image
		$('#hot-slider').stop().animate({left:display_width - slider_width},anispeed); // Thực hiện animation
		$('.swapthis').removeClass('swapthis'); // Reset class cho slide-image vừa chuyển
	}
	function left_slide_scroll(){
		//Xác định xem slide có còn hình phía bên trái hay không dựa vào left hot-slider
		var slider_left=$('#hot-slider').position().left;
		//nếu có
		if(slider_left<0 && !$('#hot-slider').is(':animeted')){
			//kích hoạt chỉ khi slider không chuyển động nữa
			$('#hot-slider').stop().animeted({left:"+="+image_width},anispeed);
		}
		else //nếu đã chuyển về hình ảnh đầu tiên thì lựa chọn cách thức xoay vòng
		{
			switch(circle_method){
				case 1:
					$('#hot-slider').stop().animeted({left:display_width-slider_width},anispeed);
					break;
				case 2:
					left_slide_circle();
					break;	
			}
		}
	}
	function right_slide_scroll(){
		// Xác định xem slide có còn hình phía bên phải hay không dựa trên độ dài của stage và container
		var slider_left = Math.abs($('#hot-slider').position().left);
		var right_remain = slider_width - (display_width + slider_left);
		
		// Nếu có
		if(right_remain > 0 && !$('#hot-slider').is(':animated')){ //Kích hoạt chỉ khi stage ko chuyển động nữa
			$('#hot-slider').stop().animate({left:"-=" + image_width},anispeed);
		}
		else // Nếu đã chuyển về hình ảnh đầu tiên thì lựa chọn cách thức quay vòng
		{
			switch(circle_method){ //Lựa chọn
				case 1:
					$('#hot-slider').stop().animate({left:0},anispeed);
					break;
				case 2:
					right_slide_circle();
					break;
			}
		}
	}
	
	$('.slide-control-prev').click(function(){left_slide_scroll();});
	$('.slide-control-next').click(function(){right_slide_scroll();});
	
	// ========= Xử lý auto scroll ==================
	
	function start_slide_auto_scroll(){
		play = setInterval(right_slide_scroll,timeinterval);
	}
	
	// Nếu chế độ auto scroll được chọn thì sẽ kích hoạt 
	if(auto_scroll == 1){
		start_slide_auto_scroll(); 
	}
	
	// Đưa chuột vào slide và các nút sẽ tạm dừng quá trình auto scroll
	$("#hot-slider,.slide-control-prev,.slide-control-next").hover(function() {
		clearInterval(play);
	}, function(){
		start_slide_auto_scroll();
	});
	
})