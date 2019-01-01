<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php
    //  include('trangchu.php');
      $thongbao=thongbaomoi();
         $id=0;
      while($rows=mysqli_fetch_array($thongbao)){
	?>
	<div style="border-bottom: 1px dotted black">
		<img src="img/<?php echo $rows['urlhinh'] ?>" style="border: 1px solid #e0ebeb ; height: 200px;margin-top: 10px;float: left">
		<h1 style="color:red">Tiêu Đề :<?php echo $rows['tieude']; ?> </h1>
		<p>  <?php echo $rows['mota'] ?></p>
		<p style="display: none;" id="<?php echo nd.$id ?>"> <?php echo $rows['noidung'] ?></p>
		 <a href="" style="float: right;padding-right: 100px" id="lk" onclick="function{			alert("hsef");
			}"> xem chi tiết </a>
		<div style="clear:both ; padding-left: 300px"></div>
	</div>

	<?php
	$id++;
     }
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#lk").click(function(){
				$("#nd").css("display","block");
			})
		})
		
	</script>

</body>
</html>
	