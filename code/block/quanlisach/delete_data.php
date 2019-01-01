<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 include("../config.php");
  $query1 = "delete FROM  chitietphieumuon WHERE id_sach = '".$_POST["employee_id"]."'";
 $result1 = mysqli_query($conn, $query1);
 $query = "delete FROM  sach WHERE id_sach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 if(!$result){
 	echo "loi";
 };
}

?>

