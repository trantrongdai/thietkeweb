<div id="content">
	
	<?php 
		if(isset($_GET['quanly'])){
			$_tam=$_GET['quanly'];
		}else{
			$_tam="";
		}
		if($_tam== "loaitin"){
			include("modules/loaitin/main.php");
		}else if($_tam== "baiviet"){
			include("modules/baiviet/main.php");
		}else if($_tam==""){
			include("modules/loaitin/main.php");
		}
	 ?>

</div>