<?php
include("../config.php");
$mach=$_POST['mach'];
$cauhoi=$_POST['cauhoi'];
$tt=$_POST['trangthai'];
$sql="
INSERT INTO hoidap(mach,cauhoi,trangthai)  
     VALUES('$mach','$cauhoi', '$tt')
";
$kq=mysqli_query($conn,$sql);
if(!$kq){
	echo "loi";
}
else{
	echo "ok";
}


?>


