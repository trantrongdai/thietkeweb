<?php include("modules/editor/editor1.php"); ?>
<form  action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
<div class="left">
<table width="505" border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>CHỨC NĂNG THÊM MỚI BÀI VIẾT</strong></div></td>
  </tr>
  <tr>
    <td width="87">Tên bài viết</td>
    <td colspan="2"><label for="tenbaiviet"></label>
      <input type="text" name="tenbaiviet" id="tenbaiviet" /></td>
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
      <textarea name="tomtat2" id="tomtat2" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td colspan="2"><label for="noidung"></label>
      <label for="noidung2"></label>
      <textarea name="noidung" id="noidung2" cols="45" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td colspan="2"><label for="idloaitin"></label>
      <input type="text" name="idloaitin" id="idloaitin" /></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td colspan="2">
      <select name="trangthai" size="1" id="trangthai">
        <option value="Hiển thị" selected="selected">Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td colspan="2"><label for="thutu"></label>
      <input type="text" name="thutu" id="thutu" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="114">
      <input type="submit" name="them" id="them" value="  Thêm  " />
    </td>
    <td width="290">
      <input type="reset" name="xoa" id="xoa" value="  Xóa  " />
    </td>
  </tr>
</table>
</div>
</form>
