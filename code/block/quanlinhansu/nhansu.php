<!DOCTYPE html>
<html>
<head>
	<title>nhan su</title>
	<link rel="stylesheet" type="text/css" href="../style/nhansu.css">
	 <link rel="stylesheet" type="text/css" href="../style/glyphicons-halflings-regular.woff2">
   <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
     <!-- <script type="text/javascript" src="nhansu.js"></script> -->

</head>
<body style="background-color: #e6f9ff ; width: 100% ;height: 100%">
	<div>
	 <?php
 include("../home.php");
  ?>
</div>
<div>
  <?php
  include("../menu2.php");
    if(isset($_GET['chucvu'])){
    	$chucvu=$_GET['chucvu'];
    }
    else{
    	$chucvu='tatca';
    }
  ?>
</div>

<div class="dhtl">
	<h2>NHÂN SỰ ĐẠI HỌC THƯ VIỆN HÀ NỘI</h2>
</div >
<div style="width: 100%">
<div class="danhmuc">
	<h3 style="border-left: 5px solid black; padding: 5px; margin: 2px">Nhân sự</h3>
    

	<?php
	
	echo"<a href='nhansu.php?chucvu=tatca' ; style='color:black;margin:25px;padding:2px '>Danh sách nhân viên </a> .<br>.<br>";
	
	echo"<a href='nhansu.php?chucvu=truongphong' ; style='color:black;margin:25px;padding:2px '>Tưởng Phòng</a>  .<br>.<br>";

	echo"<a href='nhansu.php?chucvu=nhanvien' ; style='color:black;margin:25px;padding:2px '>Nhân Viên</a> .<br>.<br>";

	echo"<a href='nhansu.php?chucvu=baove' ; style='color:black;margin:25px;padding:2px '>Bảo Vệ</a>";

	?>

	
</div>

<div class="noidung" id="noidung">
	
<button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary" style="margin: 10px 0px 0px 40px;"><i class="fa fa-plus-circle" style="font-size:16px ; margin-right: 3px"></i>THêm</button> 
<br> 
<?php
include("../config.php"); 
    if($chucvu=='tatca'){
	$sql="select * from nhanvien";
     }

     elseif ($chucvu=='truongphong') {
       $sql="select * from nhanvien where chucvu='trưởng phòng'";
     }
      elseif ($chucvu=='baove') {
       $sql="select * from nhanvien where chucvu='bảo vệ'";
     }
     else {
     	$sql="select * from nhanvien where chucvu='nhân viên'";
     }

$resualt=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_array($resualt)) {
?>

                <div class="khunganh " >
                    <div style="height:200px; margin-top:0px "; class="view_data" id="<?php echo $row["manv"]; ?>">
                        <img src="../img/<?php echo $row['urlhinh'] ?>" style=" margin-left:60px;width:120px;height: 110px;  margin-top: 10px; border-radius: 90%" / >
                        <br>
                        <p style="text-align:center;font-size: 20px">
                            <strong><?php echo $row['hotennv'] ?></strong>
                        </p>
                        
                        <p style="text-align:center;"><?php echo $row['chucvu'] ?></p>
                    </div>
                    <div style="height:90px;margin-top:0px;border-top:1px dashed #dddddd">
                        <span>
                            <i class="fa fa-users"></i>
                            <a href="#">đại học thủy lợi</a>
                        </span>
                        <br>
                        <span>
                            <i class="fa fa-envelope"></i>
                            <a href="#"><?php echo $row['gmail']; ?></a>
                        </span>
                        <br>

                        <span>
                            <i class="fa fa-phone"></i><?php echo $row['sdt']; ?>
                        </span>
                        <br>
                        <input type="button" name="delete" value="delete" id="<?php echo $row["manv"]; ?>" class="btn btn-info btn-xs delete_data" /> 

                           <input type="button" name="view" value="update" id="<?php echo $row["manv"]; ?>" class="btn btn-info btn-xs update_data" />
                           <!-- <input type="button" name="view" value="view" id="<?php echo $row["manv"]; ?>" class="btn btn-info btn-xs view_data" /> -->

                    
                    </div>
                </div>
                <?php
}
?>

</div>

</div>


<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog" >
  <div class="modal-content" >
   <div class="modal-header">
    <h4 >THên NHân Sự</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body">
    <form method="POST" id="insert_form"  >
        <label>Mã nhân Sự</label>
     <input type="text" name="mans" id="mans" class="form-control" />
         <br />
     <label>Mã Người Dùng</label>
     <!-- <input type="text" name="nguoidung" id="nguoidung" class="form-control"></intput> -->
       <select class=" form-control" name="nguoidung" id="nguoidung">
       <option>Chọn Mã người dùng ...</option>
       <?php
          $sql="select *from nguoidung";
          $kq=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($kq)) {
          ?>
          <option><?php echo $row['id_user']; ?></option>
          <?php
          }
       ?>
     </select>

     <br />
     <label>Họ và Tên</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Địa Chỉ</label>
     <!-- <input type="text" name="diachi" id="diachi" class="form-control"></intput> -->
      <select class=" form-control" name="diachi" id="diachi">
       <option>    </option>
         <option>Hà Nội</option>
          <option>Nam Định</option>
              <option>Nghệ An</option>
          <option>Thanh Hóa</option>
        
       
     </select>
     <br />
     <label>NGày Sinh</label>
      <input type="date" name="ngaysinh" id="ngaysinh" class="form-control"></input>
        <br>
        <br>
      <label>Giới Tính</label>
      <!-- <input type="text" name="gioitinh" id="gioitinh" class="form-control"></input> -->
           <select class=" form-control" name="gioitinh" id="gioitinh">
       <option>   </option>
         <option>nam</option>
          <option>nữ</option>
        
       
     </select>
     <br />
     <label>SDT</label>
      <input type="te" name="sdt" id="sdt" class="form-control"></input>
     <br />
       <label>urlhinh</label>
      <input type="te" name="hinh" id="hinh" class="form-control"></input>
     
     <br />
         <label>Chúc Vụ </label>
      <!-- <input type="te" name="chucvu" id="chucu" class="form-control"></input> -->
        <select class=" form-control" name="chucvu" id="chucvu">
       <option>  </option>
         <option>trưởng phòng</option>
          <option>nhân viên</option>
           <option>bảo vệ</option>
       
     </select>
     <br />
         <label>Gamil </label>
      <input type="te" name="gmail" id="gmail" class="form-control"></input>
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
 <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right;margin-right: 20px;">Close</button>
    </form>
   </div>
   <div>
   
   </div>
  </div>
 </div>
</div>






   <div id="dataModal_sua" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Sửa Thông Tin Nhân Viên</h4>
   </div>
   <div class="modal-body" id="employee_detail_sua">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Thông Tin NHân Sự</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script type="text/javascript">


$(document).ready(function(){

 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  
   if($('#manv').val() == "")  
  {  
   alert("Mã không đk để trống");  
  }  
  else if($('#nguoidung').val() == '')  
  {

   alert("MÃ người dùng k được trống");  
  }  
  else if($('#name').val() == '')
  {  
   alert("Tên k đk để trống");  
  }
  else if($('#diachi').val() == '')  
  {

   alert("Địa Chỉ Không đk để trống");  
  }  
  else if($('#ngaysinh').val() == '')
  {  
   alert("Ngày sinh k đk để trống");  
  }
  else if($('#gioitinh').val() == '')
  {  
   alert("Giới Tính Không đk trống");  
  }
  else if($('#sdt').val() == '')  
  {
   alert("sdt khong dk để trống");  
  }  
  else if($('#hinh').val() == '')
  {  
   alert("hinh k đk để trống ");  
  }
   else if($('#chucvu').val() == '')  
  {

   alert("Chức vụ khong dk để trống");  
  }  
  else if($('#gmail').val() == '')
  {  
   alert("gmail k đk để trống ");  
  }
  else  
  {  
   $.ajax({  
    url:"insert_nhansu.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    success:function(data){  
    // $('#insert_form')[0].reset();  
    $('#noidung').html(data); 

     $('#add_data_Modal').modal('hide');  
    
    
     //$('#abc').load("dssach.php") ;


     location.reload();
      alert("Thêm Thành Công");

    } 
   
   });  
  }  
 });




  $(document).on('click', '.delete_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_nhansu.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    if(data==='loi'){
      alert("lỗi");

    }
    else{

       location.reload();
       alert("Xóa Thành Công");

    }

   
   }
  });

 });

  $(document).on('click', '.update_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_nhansu.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail_sua').html(data);
    $('#dataModal_sua').modal('show');
   },
  
  });
 });

 $(document).on('click', '.view_data', function(){

  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select_nhansu.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });

 });


 
});  
</script>

</body>

</html>