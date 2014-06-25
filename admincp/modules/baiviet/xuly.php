<?php
	include("../config.php");
	$tenbaiviet=$_POST["tenbaiviet"];
	$anhminhhoa=$_POST["anhminhhoa"];
	$tomtat    =$_POST["tomtat"];
	$noidung   =$_POST["noidung"];
	$idloaitin =$_POST["idloaitin"];
	$trangthai =$_POST["trangthai"];
	$thutu     =$_POST["thutu"];
	$id = $_GET["id"];

	if(isset($_POST["them"])){

		$sql="insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu)
		values('$tenbaiviet','$anhminhhoa','$tomtat','$noidung','$idloaitin','$trangthai','$thutu')";
		mysql_query($sql);

		header("location: ../../index.php?quanly=baiviet&ac=them");

	}else if(isset($_POST["sua"])) {
		//code for sua
	}else{

		$sql="delete from  baiviet where idbaiviet= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=baiviet&ac=them");
	}

?>
