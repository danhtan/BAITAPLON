<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 include("../config.php");
  $query1 = "delete FROM  nguoidung WHERE id_user = '".$_POST["employee_id"]."'";
 $result1 = mysqli_query($conn, $query1);

 if(!$result1){
 	echo "loi";
 };
}

?>

