<?php
include("../config.php");
$id=$_POST['employee_id'];
$sql="select * from thongbao  where matb='$id'";
$kq=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($kq)) {
	?>
	<div style="overflow: auto;">
		<h3 style="color:blue">Thông báo:<?php echo $row['tieude']; ?></h3>
		<img src="block2/img/<?php echo $row['urlhinh'] ?> " style="width: 90%; padding-left:  70px ; padding-bottom: 30px">
		<p> Nội dung :<?php echo $row['noidung']; ?></p>
		
	</div>
	<?php
}
?>

