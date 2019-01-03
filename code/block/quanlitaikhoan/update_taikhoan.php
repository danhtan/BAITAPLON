<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  nguoidung WHERE id_user= '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_taikhoan.php" method="POST">
        <input type="hidden" name="id_user" value="<?php echo $id ?>" >
         <label>Username</label>
     <input type="text" name="username" id="username" class="form-control" / value="<?php echo $row['username'] ?>">
     <br />
     <label>Password</label>
      <input type="text" name="password" id="password" class="form-control" / value="<?php echo $row['password'] ?>">
        <br>
      <label>Quyền Try Cập</label>
      <select class=" form-control" name="quyen" id="quyen">
       <option>1</option>
       <option>0</option>
     
     </select>
      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>