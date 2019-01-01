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
$sotin1trang=5;
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
  <title>loaisach</title>  
 <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
  <script type="text/javascript" src="loaisach.js"></script>
  </style>
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:90%;" id="abc">  
   
     
   <br />  
   <div class="table-responsive" >
    <div style="float: left ; margin-bottom: 10px">
      
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" style="padding: 10px; background-color: blue; width: 70px ">Add</button> 

     <input style="float: right;width: 300px; margin-left: 800px" class="form-control" id="myInput" type="text" placeholder="Search.."> 
    
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th >STT</th>  
       <th>Mã loại sách</th>
       <th >Tên Loại Sách</th>     
        <th>Thao Tác</th>
      </tr>
      <tbody id="myTable">
      <?php
      $stt=1;
        $form=($trang-1)*$sotin1trang;
       $query = "SELECT * FROM loaisach ORDER BY id_loaisach DESC LIMIT $form,$sotin1trang ";
        $result = mysqli_query($conn, $query);
      
      while($row = mysqli_fetch_array($result))
      {

      ?>
      <tr>
       <td><?php echo $stt ?></td>
      <td><?php echo $row['id_loaisach'] ?></td>
       <td><?php echo $row['tenloaisach'] ?></td>
       <td><input type="button" name="view" value="view" id="<?php echo $row["id_loaisach"]; ?>" class="btn btn-info btn-xs view_data" /> <input type="button" name="delete" value="delete" id="<?php echo $row["id_loaisach"]; ?>" class="btn btn-info btn-xs delete_sach"  data-toggle="modal" data-target="#myModal" />
        
        <input type="button" name="view" value="update" id="<?php echo $row["id_loaisach"]; ?>" class="btn btn-info btn-xs update_data" />
      
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
        $sql="select * from loaisach";
        $kq=mysqli_query($conn,$sql);
        $tongtin=mysqli_num_rows($kq);
      
        $sotrang=ceil($tongtin/$sotin1trang);
     
        for ($i=1; $i <= $sotrang ; $i++) {       
           echo"<a href='dstacgia.php?trang=$i' style='background-color:blue ;color:white;margin:5px;padding:2px '>trang $i </a>";
        }
      ?>
    </div>
  
    </div>
   </div>  
  </div>
 </body>  
</html>  

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog" style="height: 1000px;">
  <div class="modal-content" style="height: 500px;">
   <div class="modal-header">
    <h1 class="modal-title" style="color: blue;">Thêm Loai Sách</h1>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
       <label>Mã loại Sách</label>
     <input type="text" name="id_loaisach" id="loaisach" class="form-control" />
     
     <br />
     <label>Tên Loại Sách</label>
     <input type="text" name="name" id="name" class="form-control" />
     
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
 <button type="button" class="btn btn-default" data-dismiss="modal" style=" float: right;margin-right: 20px;">Close</button>
    </form>
   </div>
   <div>
   
   </div>
  </div>
 </div>
</div>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h1 class="modal-title" style="color: blue;">Thông tin loại sách</h1>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="dataModal_sua" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
        <h1 class="modal-title" style="color: blue;">Sửa Loại Sách </h1>
    <button type="button" class="close" data-dismiss="modal">&times;</button>

   </div>
   <div class="modal-body" id="employee_detail_sua">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div> 


