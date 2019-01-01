<?php

include("../config.php");
$id=$_POST['employee_id'];
$sql="select * from sach where id_sach='$id'";
$resualt=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($resualt);
?>
<div style="background-color: red; margin: 10px">
<div style="float: left;width: 	30%; height: 400px">	
<img src="block2/img/<?php echo $row['urlhinh'] ?>" style="width: 	100%; height: 300px">	
</div>
<div style=" float: left;width: 70%; padding: 5px">
	<h3 style="	color: #527a7a">Tên Sách : <?php echo $row['tensach'] ?></h3>
	<h3  style="	color: #527a7a"> Mã Tác Giả :<?php echo $row['id_tacgia']?></h3>
	<h3  style="	color: #527a7a"> SÔ lượng Còn : <?php echo $row['soluongcon'] ?></h3>

	<h2 style="	color:#990000">Tóm Tắt Nội Dung </h2>
	<p style="font-size: 20px">	<?php echo  $row['mota']; ?></p>

</div>	
</div>
