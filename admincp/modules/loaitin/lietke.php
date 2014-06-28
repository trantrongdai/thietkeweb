<?php
    $sql="select * from loaitin";
    $loaitin=mysql_query($sql);

 ?>

<div class="right">
<table width="519" border="1" id="customers">
  <tr>
    <td width="37" height="40"><div align="center"><strong>STT</strong></div></td>
    <td width="134"><div align="center"><strong>Tên loại tin</strong></div></td>
    <td width="154"><div align="center"><strong>Trạng thái</strong></div></td>
    <td width="49"><div align="center"><strong>Thứ tự</strong></div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
  </tr>

  <?php
  $i=1;
  if(isset($_GET["id"])){
    $id=$_GET["id"];
  }else{
    $id="";
  }
  while($dong=mysql_fetch_array($loaitin)){
        if($dong["idloaitin"]==$id){
   ?>
  <tr class="doimaunen">
    <td height="36"><?php echo  $i;?></td>
    <td><?php echo $dong["tenloaitin"] ;?></td>
    <td><?php echo $dong["trangthai"] ;?></td>
    <td><?php echo $dong["thutu"] ;?></td>
    <td width="43">
      <div align="center">
      <a href="index.php?quanly=loaitin&ac=sua">
        <img src="img/pencil_edit.png" alt="">
        </a>
      </div></td>
    <td width="62"><div align="center">
    <a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $dong["idloaitin"];?>" >
        <img src="img/delete.png" alt="">
   </a>
    </div></td>
  </tr>
  <?php 
    }else{
   ?>
   <tr>
    <td height="36"><?php echo  $i;?></td>
    <td><?php echo $dong["tenloaitin"] ;?></td>
    <td><?php echo $dong["trangthai"] ;?></td>
    <td><?php echo $dong["thutu"] ;?></td>
    <td width="43">
      <div align="center">
      <a href="index.php?quanly=loaitin&ac=sua&id=<?php echo $dong["idloaitin"]?>">
        <img src="img/pencil_edit.png" alt="">
        </a>
      </div></td>
    <td width="62"><div align="center">
    <a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $dong["idloaitin"];?>" >
        <img src="img/delete.png" alt="">
   </a>
    </div></td>
  </tr>
  <?php
    }
  $i++;
  }
   ?>

</table>
</div>