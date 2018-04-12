<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "dulich";
	$link = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($link,"UTF8");
	// Kiểm tra kết nối
	if (!$link) {
    	trigger_error('Không thể kết nối đến MySQL: ' . mysqli_connect_error());
	}
?>