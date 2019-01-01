<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 include("../config.php");
$mapm=$_POST["employee_id"];
$mas=$_POST["employee_name"];
 $query = "delete FROM  chitietphieumuon WHERE mapm = '$mapm' and id_sach='$mas'";

 $result = mysqli_query($conn, $query);

if(!$result){
	echo 'loi';
}
}

?>
