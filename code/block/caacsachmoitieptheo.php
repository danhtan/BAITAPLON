<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//include('trangchu.php');
	   $cactinmoitt=cac_tin_moi_tt();
	   while ($rows=mysqli_fetch_array($cactinmoitt)){
	   	
	?>
	 
		<div style="height: 108px" >
			<img src="img/<?php echo $rows['urlhinh'] ?>" style="float :left;width: 100px; height: 90px;">
			<h3 style="margin-left: 102px;color: blue"> tên sách: <?php echo $rows['tensach']; ?> </h3>
			<p style="margin-left: 112px;"><?php echo $rows['mota']; ?></p>
		</div>
	
	<?php
      }
	?>	

</body>
</html>