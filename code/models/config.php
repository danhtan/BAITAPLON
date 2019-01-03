<?php
      $hostname='localhost';
	  $user='root';
	  $pass='';
	  $csdl='qltv';
	  $conn=mysqli_connect($hostname,$user,$pass,$csdl) or die('Không kết nối được');
	   mysqli_select_db($conn,$csdl);
	   if ($conn) {
	
	   }
	   else{
	   	echo"deo ok";
	   }
?>