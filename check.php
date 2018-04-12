<?php
	//load file config
	include "config.php";
	$username=isset($_GET["username"])?$_GET["username"]:"";
	if($username !=""){
		$result=mysqli_query($link,"select username from user where username='$username'");
	if(mysqli_num_rows($result)>0)
		echo "user ton tai";
	else
		echo "user khong ton tai";
	}
?>