<?php
$id=$_POST['manv'];
$ht=$_POST['name'];
$dc=$_POST['diachi'];
$ns=$_POST['ngaysinh'];
$gt=$_POST['gioitinh'];
$sdt=$_POST['sdt'];
$ha=$_POST['hinh'];
$cv=$_POST['chucvu'];
$gm=$_POST['gmail'];
include("../config.php");

$sql="UPDATE  nhanvien
SET hotennv = '$ht', diachi = '$dc',ngaysinh= '$ns',gioitinh='$gt',sdt='$sdt', urlhinh = '$ha' ,chucvu = '$cv', gmail= '$gm'
WHERE  manv= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	"<script> alert('ok')</script>";
	header("location:nhansu.php");
}
else{
	die("câu lệnh bị lỗi");
}
?>


