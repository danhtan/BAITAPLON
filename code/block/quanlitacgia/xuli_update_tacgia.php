<?php
$id=$_POST['id_tacgia'];
$ht=$_POST['name'];
$ns=$_POST['namsinh'];
$qq=$_POST['quequan'];
$sdt=$_POST['sdt'];
include("../config.php");
$sql="UPDATE tacgia
SET hotentg = '$ht', namsinh= '$ns',quequan = '$qq', sdt = '$sdt' 
WHERE id_tacgia= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:dstacgia.php");
}
?>
