<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="../style/glyphicons-halflings-regular.woff2">
	<link rel="stylesheet" type="text/css" href="block2/style/css.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="block2/style/bootstrap.min.css">
     <script type="text/javascript" src="block2/style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="block2/style/bootstrap.min.js"></script>

</head>
<body>
	<div>
		<div class="left2">
		  <div class="sidebar">
             <a class="active" href="">Trang Đầu</a>
              <input type="button" name="tatca" class="tatca" style="padding: 10px; width: 100%; border: none" value="Tất Cả Sách">
               <input type="button" name="moinhat" class="moinhat" style="padding: 10px; width: 100%; border: none" value="Sách Mới Nhất">
                <input type="button" name="docnhieunhat" class="docnhieunhat" style="padding: 10px; width: 100%; border: none" value="Đọc Nhiều Nhất">
          
          </div>
			
		</div>
		<div class="center">
			<div style="background-color: blue; padding: 7px;margin-right: 190px ;color: white; border-radius: 0px 90px 0px 0px">
				Tìm Kiếm Sách
				
			</div>


			<input type="text" name="tensach" style="width: 50%; margin-top: 10px ; padding: 10px;border-radius: 10px" id="tensach">
			<button style="background-color: #ffff00; color: black; padding: 10px" class="timkiem">Tìm Kiếm </button>
              <div id="tatca">	
			<div id="center1">
				<div style="background-color: blue; padding: 7px;margin: 20px 190px 10px 0px;color: white; border-radius: 0px 90px 0px 0px">
					Sách MỚi Nhất 					
				</div>
				<div id="thaydoi">	
				<?php
				include("../config.php");
				$sql="SELECT * FROM sach ORDER BY id_sach DESC limit 0,9";
				$resualt=mysqli_query($conn,$sql);
				while ($rows=mysqli_fetch_array($resualt)) {
					?>
					<div class="sachmoi">

						<div>
							<img src="block2/img/<?php echo $rows['urlhinh'] ?>" style="float : left; width: 200px; height: 230px; margin: 10px 0px 0px 15px">
						</div>

						<h4 style="	margin:15px;	"	> Tên Sách :<?php echo $rows['tensach'] ?></h4>
						<h4 style="	margin:15px;	"	> Số lượng còn :<?php echo $rows['soluongcon'] ?></h4>
						<button style=" padding: 5px;border: none;	color: 	white;background-color: blue ; float:right;	margin-right: 20px ;" id="<?php echo $rows['id_sach'] ?>" class="chitietsach">Chi Tiết</button>
						
					</div>

					<?php
				}
				?>
			</div>
                  
				
			</div>
			<div class="clear">	</div>
			<div style="background-color: blue; padding: 7px;margin: 20px 190px 10px 0px;color: white; border-radius: 0px 90px 0px 0px">
					Sách Được Đọc Nhiều Nhất 					
				</div>

					<div id="sachmuonnn">	
				<?php
				
				$sql2="SELECT s.id_sach,s.urlhinh,s.soluongcon , s.tensach, COUNT(ctpm.id_sach) FROM sach s , chitietphieumuon ctpm WHERE s.id_sach=ctpm.id_sach GROUP by s.id_sach ,s.tensach ORDER BY COUNT(ctpm.id_sach) DESC limit 0,6 ";
				$resualt2=mysqli_query($conn,$sql2);
				while ($rows=mysqli_fetch_array($resualt2)) {
					?>
					<div class="sachmoi">

						<div>
							<img src="block2/img/<?php echo $rows['urlhinh'] ?>" style="float : left; width: 210px; height: 230px; margin: 10px 0px 0px 15px">
						</div>

						<h4 style="	margin:15px;	"	> Tên Sách :<?php echo $rows['tensach'] ?></h4>
						<h4 style="	margin:15px;	"	> Số lượng còn :<?php echo $rows['soluongcon'] ?></h4>
						<button style=" padding: 5px;border: none;	color: 	white;background-color: blue ; float:right;	margin-right: 20px ;" id="<?php echo $rows['id_sach'] ?>" class="chitietsachmnn">Chi Tiết</button>
						
					</div>

					<?php
				}
				?>
			</div>
				


			</div>
		</div>
		<div class="right2">
			<div class="loiich">
			<h3>Lợi Ích Cảy Việc đọc sách </h3>
			</div>
			<p><i class='fas fa-caret-right'></i> Thúc đẩy trí não</p>
			<p><i class='fas fa-caret-right'></i> Giảm stress</p>
			<p><i class='fas fa-caret-right'></i>Cung cấp kiến thức</p>
			<p><i class='fas fa-caret-right'></i>Mở rộng vốn từ</p>
			<p><i class='fas fa-caret-right'></i>Củng cố trí nhớ</p>
			<p><i class='fas fa-caret-right'></i>Luyện kỹ năng phê phán</p>
			<p><i class='fas fa-caret-right'></i> Tăng khả năng tập trung</p>
			<p><i class='fas fa-caret-right'></i> Luyện kỹ năng viết</p>
			<p><i class='fas fa-caret-right'></i>Đạt được sự tĩnh tâm</p>
            
			<div >
				<div style="background-color: blue;color: white;padding: 7px; margin-right: 18px; border-radius: 0px 90px 0px 0px">Ảnh Thư Viện </div>
			<img src="block2/img/atv.jpg" style="width: 100%" >
		   </div>
			<div >
				<div style="background-color: blue;color: white;padding: 7px; margin-right: 18px; border-radius: 0px 90px 0px 0px">Hỗ Trợ Trực Tuyến</div>
			<img src="block2/img/hctt.jpg" style="width: 100%">
		   </div>
		</div>
		
	</div>
	


</body>
<script >
	$(document).ready(function(){
	  $(document).on('click', '.chitietsach', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"block2/gioithieusach/chitietsach.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#thaydoi').html(data);
   },
  
   error: function(){
    alert('error!');
  }
  });

 });

	    $(document).on('click', '.chitietsachmnn', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"block2/gioithieusach/chitietsach.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#sachmuonnn').html(data);
   },
  
   error: function(){
    alert('error!');
  }
  });

 });

$(document).on('click', '.tatca', function(){
 // var employee_id = $(this).attr("id");
  $.ajax({
   url:"block2/gioithieusach/lietkesach.php",
   method:"POST",

   success:function(data){

    $('#tatca').html(data);
   },
  
  //  error: function(){
  //   alert('error!');
  // }
  });


 });

$(document).on('click', '.moinhat', function(){
 // var employee_id = $(this).attr("id");
  $.ajax({
   url:"block2/gioithieusach/moinhat.php",
   method:"POST",

   success:function(data){

    $('#tatca').html(data);
   },
  
  //  error: function(){
  //   alert('error!');
  // }
  });


 });
$(document).on('click', '.docnhieunhat', function(){
 // var employee_id = $(this).attr("id");
  $.ajax({
   url:"block2/gioithieusach/docnhieunhat.php",
   method:"POST",

   success:function(data){

    $('#tatca').html(data);
   },
  
  //  error: function(){
  //   alert('error!');
  // }
  });


 });

$(document).on('click', '.timkiem', function(){
    var employee_id=$("#tensach").val();

  $.ajax({
   url:"block2/gioithieusach/timkiemsach.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#tatca').html(data);
   },
  
  //  error: function(){
  //   alert('error!');
  // }
  });
  


 });

	  });  
</script>
</html>