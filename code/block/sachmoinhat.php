<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	include('trangchu.php');
	$tinmoinhat=sach_moi_nhat();
	$row_tmn=mysqli_fetch_array($tinmoinhat);
	?>
	<div style="margin-top: 10px">

		<img src="img/<?php echo $row_tmn['urlhinh'] ?>" style="width: 80% ; height: 300px;margin-left: 80px;" 	>
		<h1 style="margin-left: 80px;" >Tên Sách : <?php echo $row_tmn['tensach'] ?> </h1>
		<h2 style="margin-left: 80px;" >Mô Tả</h2>
		<p style="margin-left: 80px; color: black"><?php echo  $row_tmn['mota']?> </p>
	</div>
</body>
</html>
	