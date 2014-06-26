<?php
	include("../config.php");
	$tenloaitin = $_POST["tenloaitin"];
	$thutu		= $_POST["thutu"];
	$trangthai  = $_POST["trangthai"];
	if(isset($_GET["id"])){
	$id = $_GET["id"];
	}else{
		$id="";
	}

	if(isset($_POST["them"])){

		$sql="insert into loaitin(tenloaitin,thutu,trangthai)
		values('$tenloaitin','$thutu','$trangthai')";
		mysql_query($sql);

		header("location: ../../index.php?quanly=loaitin&ac=them");

	}else if(isset($_POST["sua"])) {
		$sql="UPDATE loaitin SET tenloaitin='$tenloaitin',thutu='$thutu',trangthai='$trangthai' where idloaitin='$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=sua&id=".$id);
	}else{

		$sql="delete from  loaitin where idloaitin= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=loaitin&ac=them");
	}

?>
