<?php    
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $query = "delete FROM  thongbao WHERE matb = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 if(!$result){
 	echo "loi";
 };
}

?>
