<?php
$id=$_POST['mapt'];
$mapm=$_POST['phieumuon'];
$ngaytra=$_POST['ngaytra'];
$ttlt=$_POST['trangthai'];

include("../config.php");

$sql="UPDATE  phieutra
SET mapm = '$mapm',ngaytra='$ngaytra',tinhtranglt='$ttlt'
WHERE  mapt= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:trasach.php");
}
else{
	echo 'loi';
}
?>


