<?php
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  hoidap WHERE mach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_traloi.php" method="POST">
        <input type="hidden" name="mach" value="<?php echo $id ?>" >
         <label>Câu HỎI</label>
    <h3 style="color: red"><?php echo  $row['cauhoi'] ?></h3>
     <br />
     <label>TRả Lời</label><br>
 
     <textarea name="traloi" rows="10" cols="70"></textarea>    
       
      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>