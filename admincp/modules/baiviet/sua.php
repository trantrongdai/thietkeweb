<?php
    if(isset($_GET["id"])){
      $id=$_GET["id"];
    }else{
      $id="";
    }
    $sql="select * from baiviet where idbaiviet='$id'";
    $baiviet=mysql_query($sql);
    $dong=mysql_fetch_array($baiviet);
 ?>
<form action="modules/baiviet/xuly.php?id=<?php echo $dong["idbaiviet"] ?>" method="post">
<div class="left">
<table width="300" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>CHỨC NĂNG SỬA BÀI VIẾT</strong></div></td>
  </tr>
  <tr>
    <td width="90">Tên bài viết</td>
    <td colspan="2"><label for="tenbaiviet"></label>
      <input type="text" name="tenbaiviet" id="tenbaiviet" value="<?php echo $dong["tenbaiviet"] ?>" /></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td colspan="2"><label for="anhminhhoa"></label>
      <input type="text" name="anhminhhoa" id="anhminhhoa" value="<?php echo $dong["anhminhhoa"] ?>"/></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td colspan="2"><label for="tomtat"></label>
      <input type="text" name="tomtat" id="tomtat" value="<?php echo $dong["tomtat"] ?>"/></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td colspan="2"><label for="noidung"></label>
      <input type="text" name="noidung" id="noidung" value="<?php echo $dong["noidung"] ?>"/></td>
  </tr>
  <tr>
    <td>idloaitin</td>
    <td colspan="2"><label for="idloaitin"></label>
      <input type="text" name="idloaitin" id="idloaitin" value="<?php echo $dong["idloaitin"] ?>"/></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td colspan="2">
      <select name="trangthai" size="1" id="trangthai">
        <?php
          if($dong["trangthai"]=="Hiển thị"){
         ?>
        <option value="Hiển thị" selected="selected">Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
        <?php
        }else{
         ?>
          <option value="Hiển thị" >Hiển thị</option>
        <option value="Không hiển thị"selected="selected">Không hiển thị</option>
        <?php
        }
         ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td colspan="2"><label for="thutu"></label>
      <input type="text" name="thutu" id="thutu" value="<?php echo $dong["thutu"] ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="59">
      <input type="submit" name="sua" id="sua" value="  Sửa  " />
    </td>
    <td width="137">
      <input type="reset" name="xoa" id="xoa" value="  Xóa  " />
    </td>
  </tr>
</table>
</div>
</form>
