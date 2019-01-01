<?php
$id=$_POST['mach'];
$traloi=$_POST['traloi'];
include("../config.php");

$sql="UPDATE hoidap
SET cautraloi = '$$traloi', trangthai = 'đã trả lời'
WHERE mach= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:hoidap.php");
}
else{
	echo "loi";
}
?>


