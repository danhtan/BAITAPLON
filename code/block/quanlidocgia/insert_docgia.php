<?php
if(!empty($_POST)){
$madg=$_POST['madg'];
$ht=$_POST['name'];
$dc=$_POST['diachi'];
$ns=$_POST['ngaysinh'];
$gt=$_POST['gioitinh'];
$hsd=$_POST['hsd'];
$ha=$_POST['hinh'];
$gm=$_POST['gmail'];
$sdt=$_POST['sdt'];
include("../config.php");
$sql="INSERT INTO docgia(madg,hotendg,diachi,ngaysinh,gioitinh,hansudung,urlhinh,gmail,sdt) 
   VALUES ('$madg','$ht','$dc','$ns','$gt','$hsd','$ha','$gm','$sdt')
";
$resualt=mysqli_query($conn,$sql);
if($resualt){
  //  header("location:docgia.php");
}
else{
	echo "loi";
};
}

?>