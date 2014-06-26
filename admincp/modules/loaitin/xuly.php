<?php
	include("../config.php");
	$tenloaitin = $_POST["tenloaitin"];
	$thutu		= $_POST["thutu"];
	$trangtrai  = $_POST["trangthai"];
	$id = $_GET["id"];

	if(isset($_POST["them"])){

		$sql="insert into loaitin(tenloaitin,thutu,trangthai)
		values('$tenloaitin','$thutu','$trangtrai')";
		mysql_query($sql);

		header("location: ../../index.php?quanly=loaitin&ac=them");

	}else if(isset($_POST["sua"])) {
		//code for sua
	}else{

		$sql="delete from  loaitin where idloaitin= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=them");
	}

?>
