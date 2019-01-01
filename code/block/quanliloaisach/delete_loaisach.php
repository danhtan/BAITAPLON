<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $sql="delete FROM  sach WHERE id_loaisach = '".$_POST["employee_id"]."'";
 $result1=mysqli_query($conn,$sql);
 $query = "delete FROM  loaisach WHERE id_loaisach = '".$_POST["employee_id"]."'";
 $result2 = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script type="text/javascript">
        <?php 
    if($result){
        ?>
        alert("xóa thanh cong");
     <?php   
      }
     ?>
    </script>
    

</body>
</html>

