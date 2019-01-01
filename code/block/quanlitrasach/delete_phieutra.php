<?php

include("../config.php");
$id=$_POST['employee_id'];
$sql="delete from phieutra where mapt='$id'";
$resualt=mysqli_query($conn,$sql);
if(!$resualt){
	echo "loi";
}

?>