<?php
$id=$_POST['id_sach'];
$ts=$_POST['name'];
$ls=$_POST['loaisach'];
$tg=$_POST['tacgia'];
$ha=$_POST['hinhanh'];
$mt=$_POST['mota'];
$g=$_POST['gia'];
$sl=$_POST['soluong'];
$slc=$_POST['soluongcon'];
include("../config.php");

$sql="UPDATE sach
SET tensach = '$ts', id_loaisach = '$ls',id_tacgia = '$tg', urlhinh = '$ha' ,mota = '$mt', gia = '$g', soluong = '$sl',soluongcon = '$slc'
WHERE id_sach= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:dssach.php");
}
else{
	echo "loi";
}
?>


