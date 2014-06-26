<?php
    $sql="select * from loaitin";
    $loaitin=mysql_query($sql);

 ?>

<div class="right">
<table width="548" border="1">
  <tr>
    <td width="41" height="43"><div align="center"><strong>STT</strong></div></td>
    <td width="175"><div align="center"><strong>Tên loại tin</strong></div></td>
    <td width="101"><div align="center"><strong>Trạng thái</strong></div></td>
    <td width="127"><div align="center"><strong>Thứ tự</strong></div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
  </tr>

  <?php
  $i=1;
  while($dong=mysql_fetch_array($loaitin)){
   ?>
  <tr>
    <td><?php echo  $i;?></td>
    <td><?php echo $dong["tenloaitin"] ;?></td>
    <td><?php echo $dong["trangthai"] ;?></td>
    <td><?php echo $dong["thutu"] ;?></td>
    <td width="57">
      <div align="center">
      <a href="index.php?quanly=loaitin&ac=sua">
        Sửa
        </a>
      </div></td>
    <td width="70"><div align="center">
    <a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $dong["idloaitin"];?>" >
    Xóa
   </a>
    </div></td>
  </tr>
  <?php
  $i++;
  }
   ?>

</table>
</div>