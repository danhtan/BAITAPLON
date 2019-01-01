<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    /* background-color: #333; */
}
</style>
</head>
<body style="background-color:  #ccffff">
	<div id="tonhat">
		<div>
			<?php
			include("block2/bocuc/header.php");
			?>
		</div>
		<div>
			<?php
			include("block2/bocuc/menu.php");
			?>
		</div>
	<!-- 	<div class="container">
			<?php
			// include("block2/bocuc/thongbao.php");
			?>
		</div> -->
		<div id="conten" class="container">
			 <div class="container">
			<?php
			include("block2/bocuc/thongbao.php");
			?>
		</div> 
		<div style="clear: both;">
			
		</div>
		<div style=" background-color: #99ccff ; border-left: 5px solid red">
			<h1>Sách Mới Nhất</h1>
			
		</div>
		<div>
			<?php 
			include("block2/bocuc/sachmoinhat.php")
			?>
		</div>
		<div>
			<?php 
			include("block2/bocuc/footer.php")
			?>
		</div>

		</div>

	
 
	</div>
		

</body>
</html>