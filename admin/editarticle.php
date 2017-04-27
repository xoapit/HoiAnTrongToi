Sửa Bài Viết:
<form action="" method="post">
   <tr>
      <td>Tiêu Đề: </td>
      <td> <input type="text" name="tieude" value="<?php echo $tieude ?>" style="color:Black;width:100%;font-size:18px"/>      </td>
   </tr>
   <hr style="margin:5px;">
   <tr>
     <td>URL Image: </td>
     <td> <input type="text" name="image" value="<?php echo $image ?>" style="color:Black;width:30%;font-size:18px"/></td>
     <td>Thể Loại: </td>
     <td> <input type="text" name="tieude" value="<?php 
        if($row['idtheloai']==2) echo "Thông Báo";
        else if($row['idtheloai']==3) echo "Tin Tức";
        else echo "Giới Thiệu";
        ?>" readonly disabled="disable" style="color:Black;width:20%;font-size:12px"/>      </td>
        <button type="submit" name="luu" class="btn btn-danger"><strong> Lưu Thay Đổi</strong></button>
     </tr>
     <hr>
     <textarea name="noidung" id="editor1" rows="10" cols="80">
       <?php echo $noidung; ?> 
    </textarea>
    <script>          
      CKEDITOR.replace( 'editor1' );
   </script>
</form>