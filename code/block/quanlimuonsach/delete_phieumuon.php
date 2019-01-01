<?php
include('../config.php');
$id=$_POST['employee_id'];
$sql1="delete from chitietphieumuon where mapm='$id'";
$kq1=mysqli_query($conn,$sql1);
$sql2="delete from phieutra where mapm='$id'";
$kq2=mysqli_query($conn,$sql2);
$sql3="delete from phieumuon where mapm='$id'";
$kq3=mysqli_query($conn,$sql3);
?>
