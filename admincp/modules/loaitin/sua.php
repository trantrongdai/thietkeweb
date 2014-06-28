<?php
      if(isset($_GET["id"])){
        $id=$_GET["id"];
      }else{
        $id="";
      }
        $sql="select * from loaitin where idloaitin='$id'";
        $loaitin=mysql_query($sql);
        $dong=mysql_fetch_array($loaitin);
 ?>
<form action="modules/loaitin/xuly.php?id=<?php echo $dong["idloaitin"] ?>" method="post">
    <div class="left">
    <table width="349" border="0">
      <tr>
        <td height="33" colspan="3"><div align="center"><strong>CHỨC NĂNG SỬA LOẠI TIN</strong></div></td>
      </tr>
      <tr>
        <td width="89" height="41">Tên loại tin</td>
        <td colspan="2"><input type="text" name="tenloaitin" id="tenloaitin" value="<?php echo $dong["tenloaitin"];?>" /></td>
      </tr>
      <tr>
        <td height="41">Thứ tự</td>
        <td colspan="2"><input type="text" name="thutu" id="thutu" value="<?php echo $dong["thutu"]; ?>" /></td>
      </tr>
      <tr>
        <td height="44">Trạng thái</td>
        <td colspan="2"><select name="trangthai" id="trangthai">
          <?php
            if($dong["trangthai"]=="Hiển thị"){
           ?>
          <option value="Hiển thị" selected="selected">Hiển thị</option>
          <option value="Không hiển thị">Không hiển thị</option>
            <?php
            }else{
            ?>
          <option value="Hiển thị" >Hiển thị</option>
          <option value="Không hiển thị" selected="selected">Không hiển thị</option>
          <?php
            }
           ?>
        </select></td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td width="77"><input type="submit" name="sua" id="sua" value="  Sửa  " /></td>
        <td width="169"><input type="reset" name="xoa" id="xoa" value="  Xóa  " /></td>
      </tr>
    </table>
    </div>
</form>