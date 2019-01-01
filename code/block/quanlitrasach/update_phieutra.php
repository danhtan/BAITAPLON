<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  phieutra WHERE mapt = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $rows=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_phieutra.php" method="POST">
       
    <input type="hidden" name="mapt" value="<?php echo $id ?>" / class="form-control"  >
        <br>
       
    
 
     <label>MÃ Phiếu Mượn</label>
     <select class=" form-control" name="phieumuon" id="phieumuon">
       <option> <?php echo $rows['mapt'];  ?>      </option>
       <?php
          $sql="select *from phieumuon";
          $kq=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($kq)) {

          ?>
          <option><?php echo $row['mapm']; ?></option>
          <?php
          }
       ?>
     </select>
      <br>
      <label>Ngày Trả</label>
      <input type="date" name="ngaytra" value="<?php echo $rows['ngaytra'] ?>" class="form-control">
      <br>
         <label>Trạng Thái Lúc Trả</label>
      <select class=" form-control" name="trangthai" id="trangthai">
       <option><?php echo  $rows['tinhtranglt']; ?> </option>
       <option>Tốt</option>
       <option>Bình Thường</option>
      <option>Cũ</option>
     
     </select>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>