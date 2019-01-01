<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $sql= "delete FROM  sach WHERE id_tacgia = '".$_POST["employee_id"]."'";
 $re=mysqli_query($conn,$sql);
 $query = "delete FROM  tacgia WHERE id_tacgia = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
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

