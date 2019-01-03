<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  thongbao WHERE matb = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_thongbao.php" method="POST">
        <input type="hidden" name="matb" value="<?php echo $id ?>" >
         <label>Tiêu Đề</label>
     <input type="text" name="tieude" id="tieude" class="form-control" / value="<?php echo $row['tieude'] ?>">
     <br />
     <label>Hình Ảnh</label>
     <input type="text" name="hinhanh" id="hinhanh" class="form-control" value="<?php echo $row['urlhinh'] ?>">
     <br />
     <label>Nội Dung</label>
     <textarea name="noidung"  rows="10" cols="70" ><?php echo $row['noidung'] ?></textarea>    
        <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>