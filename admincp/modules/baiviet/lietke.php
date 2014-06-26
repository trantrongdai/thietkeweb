<?php
    $sql="select * from baiviet";
    $baiviet=mysql_query($sql);
 ?>
<table width="801" border="1" id="customers">
  <tr>
    <td width="50" height="61"><div align="center"><strong>STT</strong></div></td>
    <td width="63"><div align="center"><strong>Tên bài viết</strong></div></td>
    <td width="58"><div align="center"><strong>Ảnh minh họa</strong></div></td>
    <td width="82"><div align="center"><strong>Tóm tắt</strong></div></td>
    <td width="180"><div align="center"><strong>Nội dung</strong></div></td>
    <td width="53"><div align="center"><strong>idloaitin</strong></div></td>
    <td width="67"><div align="center"><strong>Trạng thái</strong></div></td>
    <td width="64"><div align="center"><strong>Thứ tự</strong></div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
  </tr>
  <?php
  $i=1;
  if(isset($_GET["id"])){
    $id=$_GET["id"];
  }else{
    $id="";
  }
  while($dong=mysql_fetch_array($baiviet)){
     if($dong["idbaiviet"]==$id){
    ?>
  <tr class="doimaunen">
    <td height="33"><?php echo $i; ?></td>
    <td><?php echo $dong["tenbaiviet"] ;?></td>
    <td><?php echo $dong["anhminhhoa"]; ?></td>
    <td><?php echo $dong["tomtat"] ;?></td>
    <td><?php echo $dong["noidung"]; ?></td>
    <td><?php echo $dong["idloaitin"]; ?></td>
    <td><?php echo $dong["trangthai"]; ?></td>
    <td><?php echo $dong["thutu"];?></td>
    <td width="53"><div align="center">
        <a href="index.php?quanly=baiviet&ac=sua">
          <img src="img/pencil_edit.png" alt="">
        </a>
    </div></td>
    <td width="67"><div align="center">
    <a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php echo $dong["idbaiviet"];?>" >
          <img src="img/delete.png" alt="">
    </a>
    </div></td>
  </tr>
  <?php
    }else{
   ?>
    <tr >
    <td height="33"><?php echo $i; ?></td>
    <td><?php echo $dong["tenbaiviet"] ;?></td>
    <td><?php echo $dong["anhminhhoa"]; ?></td>
    <td><?php echo $dong["tomtat"] ;?></td>
    <td><?php echo $dong["noidung"]; ?></td>
    <td><?php echo $dong["idloaitin"]; ?></td>
    <td><?php echo $dong["trangthai"]; ?></td>
    <td><?php echo $dong["thutu"];?></td>
    <td width="53"><div align="center">
        <a href="index.php?quanly=baiviet&ac=sua&id=<?php echo $dong["idbaiviet"] ?>">
          <img src="img/pencil_edit.png" alt="">
        </a>
    </div></td>
    <td width="67"><div align="center">
    <a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php echo $dong["idbaiviet"];?>" >
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

