<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  docgia WHERE madg = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_docgia.php" method="POST">
       
    <input type="hidden" name="madg" value="<?php echo $id ?>" / class="form-control"  >
        <br>
         <label>Ho Và Tên</label>
     <input type="text" name="name" id="name" class="form-control" / value="<?php echo $row['hotendg'] ?>">
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
       <label>Hạn Sử Dụng</label>
      <input type="date" name="hsd" id="hsd" class="form-control"  value="<?php echo $row['hansudung'] ?>" ></input>
      <br />
       <label>Hình Ảnh</label>
      <input type="text" name="hinh" id="hinh" class="form-control"  value="<?php echo $row['urlhinh'] ?>" ></input>
      <br>
            <label>gmail</label>
      <input type="text" name="gmail" id="gmail" class="form-control"  value="<?php echo $row['gmail'] ?>" ></input>
     <br />
     <label>SDT</label>
      <input type="number" name="sdt" id="sdt" class="form-control"  value="<?php echo $row['sdt'] ?>" ></input>  
     <br />    
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>