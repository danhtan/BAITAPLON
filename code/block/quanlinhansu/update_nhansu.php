<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  nhanvien WHERE manv = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_nhansu.php" method="POST">
       
    <input type="hidden" name="manv" value="<?php echo $id ?>" / class="form-control"  >
        <br>
         <label>hotennv</label>
     <input type="text" name="name" id="name" class="form-control" / value="<?php echo $row['hotennv'] ?>">
     <br />
     <label>Địa Chỉ</label>
     <input type="text" name="diachi" id="diachi" class="form-control" value="<?php echo $row['diachi'] ?>" ></intput>
     <br />
     <label>Ngày Sinh</label>
      <input type="date" name="ngaysinh" id="ngaysinh" class="form-control"  value="<?php echo $row['ngaysinh'] ?>" ></input>
        <br>
        <br>
      <label>Giới Tính</label>
      <input type="text" name="gioitinh" id="gioitinh" class="form-control"  value="<?php echo $row['gioitinh'] ?>" ></input>
     <br />
     <label>SDT</label>
      <input type="te" name="sdt" id="sdt" class="form-control"  value="<?php echo $row['sdt'] ?>" ></input>
     <br />
       <label>Hình Ảnh</label>
      <input type="te" name="hinh" id="hinh" class="form-control"  value="<?php echo $row['urlhinh'] ?>" ></input>
    
     <br />
         <label>Chức Vụ </label>
      <input type="te" name="chucvu" id="chucvu" class="form-control"  value="<?php echo $row['chucvu'] ?>" ></input>

     <br />
      <label>gmail</label>
      <input type="te" name="gmail" id="gmail" class="form-control"  value="<?php echo $row['gmail'] ?>" ></input>

      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>