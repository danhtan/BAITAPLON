<?php
$id=$_POST['id_loaisach'];
$name=$_POST['name'];
include("../config.php");
$sql="UPDATE loaisach
SET tenloaisach = '$name'
WHERE id_loaisach= '$id'";
$result=mysqli_query($conn,$sql);
if($result){
	header("location:dsloaisach.php");
}
?>
