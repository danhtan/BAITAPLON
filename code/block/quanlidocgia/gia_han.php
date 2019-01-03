<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];

 $query = "select * FROM  docgia WHERE madg = 'id'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_giahan.php" method="POST">
       
    <input type="hidden" name="madg" value="<?php echo $id ?>" / class="form-control"  >
        <br>
         <label>Gia Hạn Đến Ngày</label>
     <input type="date" name="giahan" id="giahan" class="form-control" >
     <br>

      <input type="submit" name="submit" value="Gia Hạn " style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>