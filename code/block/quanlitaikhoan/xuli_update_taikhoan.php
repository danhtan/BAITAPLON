<?php
$id=$_POST['id_user'];
$ur=$_POST['username'];
$pa=$_POST['password'];
$q=$_POST['quyen'];
include("../config.php");

$sql="UPDATE nguoidung
SET username = '$ur', password = '$pa',quyen_try_cap = '$q'
WHERE id_user= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:taikhoan.php");
}
else{
	echo "loi";
}
?>


