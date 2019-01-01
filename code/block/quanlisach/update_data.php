<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  sach WHERE id_sach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update.php" method="POST">
        <input type="hidden" name="id_sach" value="<?php echo $id ?>" >
         <label>Tên Sách</label>
     <input type="text" name="name" id="name" class="form-control" / value="<?php echo $row['tensach'] ?>">
     <br />
     <label>id_loaisach</label>
 
    <select class=" form-control" name="loaisach" id="loaisach">
       <option><?php echo $row['id_loaisach'] ?></option>
       <?php
          $sql="select *from loaisach";
          $kq=mysqli_query($conn,$sql);
          while ($rows=mysqli_fetch_array($kq)) {
          ?>
          <option><?php echo $rows['id_loaisach']; ?></option>
          <?php
          }
       ?>
     </select>
     <br />
     <label>id_tacgia</label>
   <!--    <input type="text" name="tacgia" id="tacgia" class="form-control"  value="<?php echo $row['id_tacgia'] ?>" ></input>
        <br> --><select class=" form-control" name="tacgia" id="tacgia">
       <option><?php echo  $row['id_tacgia']; ?></option>
       <?php
          $sql="select *from tacgia";
          $kq=mysqli_query($conn,$sql);
          while ($rows=mysqli_fetch_array($kq)) {
          ?>
          <option><?php echo $rows['id_tacgia']; ?></option>
          <?php
          }
       ?>
     </select>
        <br>
      <label>hinhanh</label>
      <input type="text" name="hinhanh" id="hinhanh" class="form-control"  value="<?php echo $row['urlhinh'] ?>" ></input>
     <br />
     <label>Mô tả</label>
      <input type="text" name="mota" id="mota" class="form-control"  value="<?php echo $row['mota'] ?>" ></input>
     <br />
       <label>giá</label>
      <input type="number" name="gia" id="gia" class="form-control"  value="<?php echo $row['gia'] ?>" ></input>
    
     <br />
         <label>số lượng</label>
      <input type="number" name="soluong" id="soluong" class="form-control"  value="<?php echo $row['soluong'] ?>" ></input>

     <br />
      <label>số lượng con</label>
      <input type="number" name="soluongcon" id="soluong" class="form-control"  value="<?php echo $row['soluongcon'] ?>" ></input>

      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>