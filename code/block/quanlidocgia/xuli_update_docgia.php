<?php
$id=$_POST['madg'];
$ht=$_POST['name'];
$dc=$_POST['diachi'];
$ns=$_POST['ngaysinh'];
$gt=$_POST['gioitinh'];
$hsd=$_POST['hsd'];
$ha=$_POST['hinh'];
$gm=$_POST['gmail'];
$sdt=$_POST['sdt'];
include("../config.php");

$sql="UPDATE  docgia
SET hotendg = '$ht', diachi = '$dc',ngaysinh= '$ns',gioitinh='$gt',hansudung='$hsd', urlhinh = '$ha' ,gmail = '$gm', sdt= '$sdt'
WHERE  madg= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:docgia.php");
}
else{
	die("câu lệnh bị lỗi");
}
?>


