<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  phieumuon WHERE mapm = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $rows=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_phieumuon.php" method="POST">
       
    <input type="hidden" name="mapm" value="<?php echo $id ?>" / class="form-control"  >
        <br>
       
     <label>Mã Độc Giả</label>
     <select class=" form-control" name="docgia" id="docgia">
       <option  selected="selected"><?php  echo  $rows['madg'] ?></option>
       <?php
          $sql="select *from docgia";
          $kq=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($kq)) {
          ?>
          <option><?php echo $row['madg']; ?></option>
          <?php
          }
       ?>
     </select>
     <br />
     <label>MÃ Nhân Viên</label>
     <select class=" form-control" name="nhanvien" id="nhanvien">
       <option><?php echo $rows['manv']; ?></option>
       <?php
          $sql="select *from nhanvien";
          $kq=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($kq)) {
          ?>
          <option><?php echo $row['manv']; ?></option>
          <?php
          }
       ?>
     </select>
      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>