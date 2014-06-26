<?php
    $sql="select * from baiviet";
    $baiviet=mysql_query($sql);
 ?>
<table width="596" border="1">
  <tr>
    <td width="41" height="61"><div align="center"><strong>STT</strong></div></td>
    <td width="48"><div align="center"><strong>Tên bài viết</strong></div></td>
    <td width="50"><div align="center"><strong>Ảnh minh họa</strong></div></td>
    <td width="57"><div align="center"><strong>Tóm tắt</strong></div></td>
    <td width="72"><div align="center"><strong>Nội dung</strong></div></td>
    <td width="70"><div align="center"><strong>idloaitin</strong></div></td>
    <td width="50"><div align="center"><strong>Trạng thái</strong></div></td>
    <td width="46"><div align="center"><strong>Thứ tự</strong></div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($baiviet)){
    ?>
  <tr>
    <td height="33"><?php echo $i; ?></td>
    <td><?php echo $dong["tenbaiviet"] ;?></td>
    <td><?php echo $dong["anhminhhoa"]; ?></td>
    <td><?php echo $dong["tomtat"] ;?></td>
    <td><?php echo $dong["noidung"]; ?></td>
    <td><?php echo $dong["idloaitin"]; ?></td>
    <td><?php echo $dong["trangthai"]; ?></td>
    <td><?php echo $dong["thutu"];?></td>
    <td width="64"><div align="center">
        <a href="index.php?quanly=baiviet&ac=sua">
        Sửa
        </a>
    </div></td>
    <td width="34"><div align="center">
    <a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php echo $dong["idbaiviet"];?>" >
    Xóa
    </a>
    </div></td>
  </tr>
  <?php
  $i++;
    }
   ?>
</table>

