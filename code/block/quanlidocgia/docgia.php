<!DOCTYPE html>
<html>
<head>
  <title>nhan su</title>
  <link rel="stylesheet" type="text/css" href="../style/nhansu.css">
   <link rel="stylesheet" type="text/css" href="../style/glyphicons-halflings-regular.woff2">
   <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
     <script type="text/javascript" src="docgia.js"></script>
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
 $sotin1trang=8;
if(isset($_GET['trang'])){
  $trang=$_GET['trang'];
}
else{
 $trang=1;
}
  ?>
</div>


<div style="width: 100%">


<div class="docgia" id="noidung">
  
<button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary" style="margin: 10px 0px 0px 40px;"><i class="fa fa-plus-circle" style="font-size:16px ; margin-right: 3px"></i>THêm</button> 
<br> 
<?php
include("../config.php"); 
 $form=($trang-1)*$sotin1trang;  
  $sql="select * from docgia order by madg LIMIT $form,$sotin1trang";
$resualt=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_array($resualt)) {
?>
                <div class="khunganh ">
                    <div style="height:200px; margin-top:0px "; class="view_data" id="<?php echo $row["madg"]; ?>">
                        <img src="../img/docgia/<?php echo $row['urlhinh'] ?>" style=" margin-left:60px;width:120px;height: 110px;  margin-top: 10px; border-radius: 90%" / >
                        <br>
                        <p style="text-align:center;font-size: 20px">
                            <strong><?php echo $row['hotendg'] ?></strong>
                        </p>
                        
                        <p style="text-align:center;"><?php echo $row['ngaysinh'] ?></p>
                    </div>
                    <div style="height:90px;margin-top:0px;border-top:1px dashed #dddddd">
                        <span>
                            <i class="fa fa-users"></i>
                            <a href="#"><?php echo $row['diachi'] ?></a>
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
                            
                          <input type="button" name="delete" value="delete" id="<?php echo $row['madg']; ?>" class="btn btn-info btn-xs delete_data"  />
                           <input type="button" name="view" value="update" id="<?php echo $row['madg']; ?>" class="btn btn-info btn-xs update_data" />
                    </div>
                </div>
                <?php
}
?>


</div>
<div style="padding: 40px">
<?php
 $sql="select * from docgia";
        $kq=mysqli_query($conn,$sql);
        $tongtin=mysqli_num_rows($kq);
      
        $sotrang=ceil($tongtin/$sotin1trang);
     
        for ($i=$sotrang; $i >0 ; $i--) {       
           echo"<a href='docgia.php?trang=$i' style='background-color:blue ;color:white;margin:5px;padding:2px ;float: right;'>trang $i </a>";
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
    <form method="POST" id="insert_form" >
        <label>Mã Độc Giả</label>
     <input type="text" name="madg" id="madg" class="form-control" />
         <br />
    
     <label>Họ và Tên</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Địa Chỉ</label>
     <input type="text" name="diachi" id="diachi" class="form-control"></intput>
     <br />
     <label>NGày Sinh</label>
      <input type="date" name="ngaysinh" id="ngaysinh" class="form-control"></input>
        <br>
        <br>
      <label>Giới Tính</label>
      <input type="text" name="gioitinh" id="gioitinh" class="form-control"></input>
     <br />
        <label>Hạn Sử Dụng </label>
      <input type="date" name="hsd" id="hsd" class="form-control"></input>
     <br />
     <label>urlhinh</label>
      <input type="text" name="hinh" id="hinh" class="form-control"></input>
     
     <br />
         <label>Gamil </label>
      <input type="text" name="gmail" id="gmail" class="form-control"></input>
     <br />
     <label>SDT</label>
      <input type="number" name="sdt" id="sdt" class="form-control"></input>
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
    <h4 class="modal-title">Employee Details</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


</body>

</html>