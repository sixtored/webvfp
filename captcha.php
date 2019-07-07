<?php
	session_start();
	$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
	$string = "";
	$num_chars = 8;
	for($i=0;$i<$num_chars;$i++)
	{
		$random = rand(0,strlen($chars)-1);
		$string .= substr($chars,$random,1);
	}
	$_SESSION["captcha"] = md5($string);
	
	$captcha = imagecreatefrompng("fondo.png");
	$color = imagecolorallocate($captcha,255,255,255);
	
	imagestring($captcha,5,10,10,$string,$color);
	
	header("Content-type:image/png");
	imagepng($captcha);
	
?>