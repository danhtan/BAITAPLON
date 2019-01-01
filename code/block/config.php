<?php
      $hostname='localhost';
	  $user='root';
	  $pass='';
	  $csdl='qltv';
	  $conn=mysqli_connect($hostname,$user,$pass,$csdl) or die('Không kết nối được');
	   mysqli_select_db($conn,$csdl);
	   if ($conn) {
	   	echo"";
	   	mysqli_set_charset($conn,'utf8');
	   }
	   else{
	   	echo"deo ok";
	   }
?>