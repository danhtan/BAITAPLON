<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  loaisach WHERE id_loaisach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update_loaisach.php" method="POST">
        <input type="hidden" name="id_loaisach" value="<?php echo $id ?>" >
         <label>Tên loại sách</label>
     <input type="text" name="name" id="name" class="form-control" / value="<?php echo $row['tenloaisach'] ?>">
     <br />
      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>