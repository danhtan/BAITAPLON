<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 // $connect = mysqli_connect("localhost", "root", "", "qlthuvien");
 include("../config.php");
 $query = "SELECT * FROM  hoidap WHERE mach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 
    while($row = mysqli_fetch_array($result))
    {
     ?>
<div> 
  <h3 style="color: red"> Câu <?php echo $row['mach']?>:<?php echo $row['cauhoi']; ?></h3>
  <h2 style="color:blue">Câu Trả Lời :</h2>
  <p><?php echo $row['cautraloi'] ?></p>
  <h2 style="color: blue"> Trạng Thái</h2>
  <p><?php echo $row['trangthai']; ?></p>
  
</div>

     <?php
    }
   
}
?>
