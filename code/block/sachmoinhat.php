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
		<img src="block/img/<?php echo $row_tmn['urlhinh'] ?>" style="width: 80% ; height: 300px;margin-left: 80px;" 	>
		<h1 style="margin-left: 80px;" >Tên Sách : <?php echo $row_tmn['tensach'] ?> </h1>
		<h3 style="margin-left: 80px;">Số Lượng Còn :<?php echo $row_tmn['soluongcon']; ?></h3>
	</div>
</body>
</html>
	