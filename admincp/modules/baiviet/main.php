<?php
	
	if(isset($_GET['ac'])){
	$_ac=$_GET['ac'];
	}else{
		$_ac="";
	}
	if($_ac=="sua"){
		include("modules/baiviet/sua.php");
	}else {
		include("modules/baiviet/them.php");
	}
	include("modules/baiviet/lietke.php");

 ?>