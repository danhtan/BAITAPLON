<?php
if(!empty($_POST)){
$manv=$_POST['mans'];
$uer=$_POST['nguoidung'];
$ht=$_POST['name'];
$dc=$_POST['diachi'];
$ns=$_POST['ngaysinh'];
$gt=$_POST['gioitinh'];
$sdt=$_POST['sdt'];
$h=$_POST['hinh'];
$cv=$_POST['chucvu'];
$gm=$_POST['gmail'];
include("../config.php");
$sql="INSERT INTO nhanvien(manv,id_user,hotennv,diachi,ngaysinh,gioitinh,sdt,urlhinh,chucvu,gmail) 
   VALUES ('$manv','$uer','$ht','$dc','#ns','$gt','$sdt','$h','$cv','$gm')
";
$resualt=mysqli_query($conn,$sql);
if($resualt){
	echo "ok";
    header("location:nhansu.php");
}
else{
	echo "loi";
}

}

?>