 <div id="content">
    	<div id="content-left">
       	 	<?php
			    $tem=null;
				if(isset($_GET["xem"])){
                 $tam = $_GET["xem"];
				if($tam == "baiviet"){
					include("modules/left/chi-tiet-tin.php");
				}else if($tam == "loaitin"){
					include("modules/left/chi-tiet-loai-tin.php");
				}}else{
				include("modules/left/tin-moi.php");
				include("modules/left/box-tin.php");
				}	
			?>
        </div>
        <div id="content-right">
        	<?php 
				include("modules/right/tin-cap-nhat.php");
			?>
        </div>
        <div class="xoa">
            </div>
     </div>