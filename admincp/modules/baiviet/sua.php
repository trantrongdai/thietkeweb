<?php
    include("modules/editor/editor1.php");
    if(isset($_GET["id"])){
      $id=$_GET["id"];
    }else{
      $id="";
    }
    $sql="select * from baiviet where idbaiviet='$id'";
    $baiviet=mysql_query($sql);
    $dong=mysql_fetch_array($baiviet);
 ?>
<form action="modules/baiviet/xuly.php?id=<?php echo $dong["idbaiviet"] ?>" method="post" enctype="multipart/form-data">
<div class="left">
<table width="539" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>CHỨC NĂNG SỬA BÀI VIẾT</strong></div></td>
  </tr>
  <tr>
    <td width="101">Tên bài viết</td>
    <td colspan="2"><label for="tenbaiviet"></label>
      <input type="text" name="tenbaiviet" id="tenbaiviet" value="<?php echo $dong["tenbaiviet"] ?>" /></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td colspan="2"><label for="anhminhhoa"></label>
      <label for="anhminhhoa2"></label>
      <input type="file" name="anhminhhoa" id="anhminhhoa2" /></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td colspan="2"><label for="tomtat"></label>
      <label for="tomtat2"></label>
      <textarea name="tomtat" id="tomtat2" cols="45" rows="5" value="<?php echo $dong["tomtat"] ?>"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td colspan="2"><label for="noidung"></label>
      <label for="noidung2"></label>
      <textarea name="noidung" id="noidung2" cols="45" rows="10" value="<?php echo $dong["noidung"] ?>"></textarea></td>
  </tr>
  <tr>
    <td>Loại tin</td>
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
    <td width="55">
      <input type="submit" name="sua" id="sua" value="  Sửa  " />
    </td>
    <td width="369">
      <input type="reset" name="xoa" id="xoa" value="  Xóa  " />
    </td>
  </tr>
</table>
</div>
</form>
