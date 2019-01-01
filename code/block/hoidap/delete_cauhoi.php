<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 include("../config.php");
 $query = "delete FROM  hoidap WHERE mach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 if(!$result){
 	echo 'loi';
 };
}

?>

