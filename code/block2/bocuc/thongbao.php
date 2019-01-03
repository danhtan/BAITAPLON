<!DOCTYPE html>
<html>
<head>
	<title>Thông Báo</title>
	<link rel="stylesheet" type="text/css" href="block2/style/css.css">
	 <link rel="stylesheet" type="text/css" href="../style/glyphicons-halflings-regular.woff2">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" type="text/css" href="block2/style/bootstrap.min.css">
     <script type="text/javascript" src="block2/style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="block2/style/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<?php
		include("block2/config.php");
		?>
		<div class="left">
			<div  >
				<?php
				$sql="select * from thongbao";
				$resulat=mysqli_query($conn,$sql);
				$sl=mysqli_num_rows($resulat);

				while ($row=mysqli_fetch_array($resulat))
				 {

				
				?>
	         <img class="mySlides" src="block2/img/<?php echo $row['urlhinh'] ?>" style="width:100% ; height: 350px;">
          
               <?php
           }
               ?>
        </div>
			
		</div>
		<div class="right" id="thongbao" style="overflow: auto;">
			<h2 style="color:red"> <i class="fa fa-bell-slash" style="font-size:26px ;color:red"></i>Thông Báo</h2>
			<?php
			$sql="select * from thongbao order by matb DESC limit 0,4";
			$kq=mysqli_query($conn,$sql);
			while ( $rows=mysqli_fetch_array($kq)) {
		
			?>
			<div style ="border-bottom: 1px dotted black ; height: 71px;">
				<p><i class="fa fa-caret-right" style="font-size:17px ;color: #b3cccc"></i>thông báo :<?php echo $rows['tieude']; ?></p>
				<!-- <a href="#" style="float: right;margin-right: 20px" id="<?php echo $rows['matb'] ?>" class="chitiet">xem chi tiết</a> -->
				<input type="button" name="view" style="float:right;margin-right: 20px; padding-bottom: 0px; margin-bottom: 0px" value="xem chi tiết" id="<?php echo $rows["matb"]; ?>" class="btn btn-info btn-xs chitiet" /> 
			</div>
			<?php
		}
			?>


			
		</div>
	</div>

</body>
	<script>




// })
		var myIndex = 0;
carousel();
function carousel(){
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);
}

$(document).ready(function(){


$(document).on('click', '.chitiet', function(){

 
  var employee_id = $(this).attr("id");

  $.ajax({
   url:"block2/bocuc/chitietthongbao.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
   $("#thongbao").html(data);
   },
   error:function(){
   	alert("loi");
   }
  });



 });

})

</script>

</html>