<?php
include("../config.php");
$id=$_POST['employee_id'];
$sql2=" DELETE FROM chitietphieumuon WHERE mapm IN (SELECT mapm FROM phieumuon WHERE phieumuon.madg='$id')";
$kq2=mysqli_query($conn,$sql2);
$sql=" DELETE FROM phieutra WHERE mapm IN (SELECT mapm FROM phieumuon WHERE phieumuon.madg='$id')";
$kq=mysqli_query($conn,$sql);

$sql3=" DELETE FROM phieumuon WHERE madg='$id'";
$kq3=mysqli_query($conn,$sql3);
$sql4=" DELETE FROM docgia where madg='$id'";
$kq4=mysqli_query($conn,$sql4);
if(!$kq4){
	echo "loi";
}
?>