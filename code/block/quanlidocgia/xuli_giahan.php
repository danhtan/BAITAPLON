<?php
$id=$_POST['madg'];
$gh=$_POST['giahan'];

include("../config.php");

$sql="UPDATE  docgia
SET hansudung='$gh'
WHERE  madg= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:docgia.php");
}
else{
	die("câu lệnh bị lỗi");
}
?>


