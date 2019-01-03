<?php  
//select.php  
if(isset($_POST["employee_id"]))
{

 include("../config.php");
 $query = "SELECT * FROM  thongbao WHERE matb = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);

}
 
?>

<div>
  <h2 style="color: blue">Tiêu Đề : <?php echo $row['tieude']; ?></h2>
  <img src="../img/<?php echo $row['urlhinh'] ?>" style="width: 400px;max-height:300px;margin-left: 80px ">
  <p>Nội dung :</p>
  <p><?php echo $row['noidung'] ?></p>
  
</div>
