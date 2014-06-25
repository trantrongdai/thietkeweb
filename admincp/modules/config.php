<?php 
	$tenmaychu="localhost";
	$taikhoan="root";
	$matkhau="";
	$csdl="thietkeweb";

	$con=mysql_connect($tenmaychu,$taikhoan,$matkhau);

	mysql_select_db($csdl,$con);
 ?>