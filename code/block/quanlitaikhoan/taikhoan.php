<div>
  <?php
 include("../home.php");
  ?>
</div>
<div>
  <?php
  include("../menu2.php");
  ?>
</div>
<?php  
include("../config.php");
// $connect = mysqli_connect("localhost", "root", "", "testing");
$sotin1trang=10;
if(isset($_GET['trang'])){
  $trang=$_GET['trang'];
}
else{
 $trang=1;
}

 ?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Sach</title> 
   <link rel="stylesheet" type="text/css" href="../block/style/glyphicons-halflings-regular.woff2">
 <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
     <script type="text/javascript" src="taikhoan.js"></script>
  
  </style>
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:100%;" id="abc">  
   
     
   <br />  
   <div class="table-responsive" >
    <div style="float: left ; margin-bottom: 10px">
      
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><i class="fa fa-plus-circle" style="font-size:16px ; margin-right: 3px"></i>Add</button> 

     <input style="float: right;width: 300px; margin-left: 800px" class="form-control" id="myInput" type="text" placeholder="Search.."> 
    
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th >STT</th>  
       <th>id_user</th>
       <th >Username</th>
        <th >Password</th>  
       <th >Quyền Truy Cập</th>
       <th>Thao Tac</th>
      </tr>
      <tbody id="myTable">
      <?php
      $stt=1;
        $form=($trang-1)*$sotin1trang;
       $query = "SELECT * FROM nguoidung ORDER BY id_user DESC LIMIT $form,$sotin1trang ";
        $result = mysqli_query($conn, $query);
      
      while($row = mysqli_fetch_array($result))
      {

      ?>
      <tr>
       <td><?php echo $stt ?></td>
       <td><?php echo $row['id_user']; ?></td>
       <td><?php echo $row['username'] ?></td>
       <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['quyen_try_cap'] ?></td>
       <td> <input type="button" name="delete" value="delete" id="<?php echo $row["id_user"]; ?>" class="btn btn-info btn-xs delete_taikhoan"  />
            <input type="button" name="update" value="update" id="<?php echo $row["id_user"]; ?>" class="btn btn-info btn-xs update_taikhoan" />
         </td>
      </tr>
      <?php
      $stt++;
      }
      ?>
      </tbody>
     
     </table>
    <div style="float: right;">
      <?php
        $sql="select * from nguoidung";
        $kq=mysqli_query($conn,$sql);
        $tongtin=mysqli_num_rows($kq);
      
        $sotrang=ceil($tongtin/$sotin1trang);
     
        for ($i=1; $i <= $sotrang ; $i++) {       
           echo"<a href='taikhoan.php?trang=$i' style='background-color:blue ;color:white;margin:5px;padding:2px '>trang $i </a>";
        }
      ?>
    </div>
  
    </div>
   </div>  
  </div>

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog" >
  <div class="modal-content" >
   <div class="modal-header">
  
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h2 style="color: blue" >Thêm  Taì Khoản</h2>
    
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
        <label>Mã Tài KHoản </label>
     <input type="text" name="id_user" id="id_user" class="form-control" />
     <br />
     <label>Username</label>
     <input type="text" name="username" id="username" class="form-control" />
     <br />
      <label>Password</label>
     <input type="text" name="password" id="password" class="form-control" />
     <br />
     <label>Quyền Truy Cập</label>
      <select class=" form-control" name="quyentrycap" id="quyentrycap">
       <option>1</option>
       <option>0</option>
      
     </select>
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
    <h4 class="modal-title" style="color: blue">Sửa Thống Tin Sách</h4>
   </div>
   <div class="modal-body" id="employee_detail_sua">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div> 


<script type="text/javascript">
  
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });



  $(document).on('click', '.delete_taikhoan', function(){

  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete_taikhoan.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
     //alert(employee_id);
    if(data==='loi'){
      alert("lỗi");
    }
    else{
    location.reload();
    }
   },
   error:function(){
    alert(loi);
   }

  });


 });



  $(document).on('click', '.update_taikhoan', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"update_taikhoan.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){

    $('#employee_detail_sua').html(data);
    $('#dataModal_sua').modal('show');
   },
  
   error: function(){
    alert('error!');
  }
  });

 });


 
});  

</script>

 </body>  
</html>  

