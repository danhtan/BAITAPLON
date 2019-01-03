<?php
$id=$_POST['matb'];
$td=$_POST['tieude'];
$ha=$_POST['hinhanh'];
$nd=$_POST['noidung'];
$ha=$_POST['hinhanh'];
include("../config.php");

$sql="UPDATE thongbao
SET tieude = '$td', urlhinh = '$ha',noidung = '$nd'
WHERE matb= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:thongbao.php");
}
else{
	echo "loi";
}
?>


