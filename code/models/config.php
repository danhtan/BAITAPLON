<?php
      $hostname='localhost';
	  $user='root';
	  $pass='';
	  $csdl='qlthuvien';
	  $conn=mysqli_connect($hostname,$user,$pass,$csdl) or die('Không kết nối được');
	   mysqli_select_db($conn,$csdl);
	   if ($conn) {
	   	echo"ok";
	   }
	   else{
	   	echo"deo ok";
	   }
?>