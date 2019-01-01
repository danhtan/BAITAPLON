<?php
include("../config.php");
$id=$_POST['employee_id'];
$sql1="delete from phieutra where mapm in (select mapm from phieumuon where manv='$id')";
$kq1=mysqli_query($conn,$sql1);
$sql2="delete from chitietphieumuon  where mapm in ( select mapm from phieumuon where manv='$id')";
$kq2=mysqli_query($conn,$sql2);
$sql3="delete from phieumuon where manv='$id'";
$kq3=mysqli_query($conn,$sql3);
$sql4="delete from nhanvien where manv='$id'";
$kq4=mysqli_query($conn,$sql4);

if(!$kq4){
	echo "loi";
}
?>