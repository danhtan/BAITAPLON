<?php
$id=$_POST['mapm'];
$madg=$_POST['docgia'];
$manv=$_POST['nhanvien'];

include("../config.php");

$sql="UPDATE  phieumuon
SET madg = '$madg', manv = '$manv'
WHERE  mapm= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:muonsach.php");
}
else{
	die("câu lệnh bị lỗi");
}
?>


