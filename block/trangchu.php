<?php
function sach_moi_nhat(){
	 include("config.php");
	$sql="SELECT * from sach ORDER BY id_sach DESC LIMIT 1";
	return mysqli_query($conn,$sql);
};
function cac_tin_moi_tt(){
	include ("config.php");
	$sql="SELECT * from sach ORDER BY id_sach DESC LIMIT 1,4";
	return mysqli_query($conn,$sql);
}
function thongbaomoi(){
	include("config.php");
	$sql="SELECT * from thongbao ORDER BY id_thongbao DESC LIMIT 0,3";
	return mysqli_query($conn,$sql);
}
?>