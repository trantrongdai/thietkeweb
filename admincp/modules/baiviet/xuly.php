<?php
	include("../config.php");
	$tenbaiviet=$_POST["tenbaiviet"];
	$anhminhhoa=$_POST["anhminhhoa"];
	$tomtat    =$_POST["tomtat"];
	$noidung   =$_POST["noidung"];
	$idloaitin =$_POST["idloaitin"];
	$trangthai =$_POST["trangthai"];
	$thutu     =$_POST["thutu"];
	if(isset($_GET["id"])){
	$id = $_GET["id"];
	}else{
		$id="";
	}

	if(isset($_POST["them"])){
		//Thực hiện thêm dữ liệu
		$tenanh=$_FILES["anhminhhoa"]["name"];
		if($tenanh!=""){
			$time=date("Ymdhis");
			$tenanh=$time.$tenanh;
			$dich="../../../uploads/".$tenanh;
			copy($_FILES["anhminhhoa"]["tmp_name"],$dich);
			$dich=substr($dich,9);
			
		$sql="insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu)
		values('$tenbaiviet','$dich','$tomtat','$noidung','$idloaitin','$trangthai','$thutu')";
		mysql_query($sql);

		header("location: ../../index.php?quanly=baiviet&ac=them");
		}


	}else if(isset($_POST["sua"])) {
		$sql="UPDATE baiviet SET tenbaiviet='$tenbaiviet',anhminhhoa='$anhminhhoa',tomtat='$tomtat',noidung='$noidung',
		idloaitin='$idloaitin',trangthai='$trangthai',thutu='$thutu' where idbaiviet='$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=baiviet&ac=sua&id=".$id);
	}else{

		$sql="delete from  baiviet where idbaiviet= '$id'";
		mysql_query($sql);
		header("location: ../../index.php?quanly=baiviet&ac=them");
	}

?>
