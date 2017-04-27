Thêm Bài Viết Mới:
<form action="" method="post">
  <tr>
   <td>Tiêu Đề: </td>
   <td> <input type="text" name="tieude" value="" required style="color:Black;width:100%;"/></td>
 </tr>
 <hr style="margin:5px;">
 <tr>
   <td>URL Image: </td>
   <td> <input type="text" name="image" value="" style="color:Black;width:30%;"/></td>
   <td>Thể Loại: </td>
   <select name="idtheloai" style="width:150px;height:25px;">
    <option selected="selected" value="2">Thông Báo</option>
    <option value="3">Tin Tức</option>
  </select>
  <button type="submit" name="them" class="btn btn-danger"><strong>Thêm</strong></button>
</tr>
<hr>
<textarea name="noidung" id="editor1" rows="10" cols="80">

</textarea>
<script>          
 CKEDITOR.replace( 'editor1' );
</script>
</form>