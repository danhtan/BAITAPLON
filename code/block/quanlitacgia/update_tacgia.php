<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  tacgia WHERE id_tacgia = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_tacgia.php" method="POST">
        <input type="hidden" name="id_tacgia" value="<?php echo $id ?>" >
         <label>Họ và Tến</label>
     <input type="text" name="name" id="name" class="form-control" / value="<?php echo $row['hotentg'] ?>">
     <br />
     <label>Năm Sinh</label>
     <input type="namsinh" name="namsinh" id="" class="form-control" value="<?php echo $row['namsinh'] ?>" ></intput>
     <br />
     <label>Quê Quán</label>
      <input type="text" name="quequan" id="quequan" class="form-control"  value="<?php echo $row['id_tacgia'] ?>" ></input>
        <br>
        <br>
      <label>Số ĐT</label>
      <input type="number" name="sdt" id="sdt" class="form-control"  value="<?php echo $row['sdt'] ?>" ></input>
      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>