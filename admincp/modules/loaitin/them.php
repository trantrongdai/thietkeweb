<form action = "modules/loaitin/xuly.php" method="post">
  
<div class="left">
<table width="375" border="0">
  <tr>
    <td height="33" colspan="3"><div align="center"><strong>CHỨC NĂNG THÊM MỚI LOẠI TIN</strong></div></td>
  </tr>
  <tr>
    <td width="92" height="41">Tên loại tin</td>
    <td colspan="2"><input type="text" name="tenloaitin" id="tenloaitin" /></td>
  </tr>
  <tr>
    <td height="41">Thứ tự</td>
    <td colspan="2"><input type="text" name="thutu" id="thutu" /></td>
  </tr>
  <tr>
    <td height="44">Trạng thái</td>
    <td colspan="2"><select name="trangthai" id="trangthai">
      <option value="Hiển thị" selected="selected">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
    </select></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td width="74"><input type="submit" name="them" id="them" value="  Thêm " /></td>
    <td width="195"><input type="reset" name="xoa" id="xoa" value="  Xóa  " /></td>
  </tr>
</table>
</div>
</form>