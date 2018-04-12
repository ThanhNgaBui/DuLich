<?php
	session_start();
 
	// Lấy thông tin
	$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : false;
	 
	// Biến lưu kết quả trả về
	$error = array(
	    'error'     => 'success',
	    'captcha'   => ''
	);
	
	if (!isset($_SESSION['captcha_code']) || $_SESSION['captcha_code'] != trim($captcha)) {
	    $error['captcha'] = 'Captcha bạn nhập không đúng';
	    $error['error'] = 'error';
	}
	 
	// Trả kết quả cho client
	die (json_encode($error));
?>