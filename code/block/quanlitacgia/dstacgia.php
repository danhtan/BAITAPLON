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
  <title>Tac gia</title>  
    <link rel="stylesheet" type="text/css" href="../block/style/glyphicons-halflings-regular.woff2">
  <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
     <script type="text/javascript" src="tacgia.js"></script>
  
  </style>
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:100%;" id="abc">  
   
     
   <br />  
   <div class="table-responsive" >
    <div style="float: left ; margin-bottom: 10px">
      
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" style="padding: 10px; background-color: blue; width: 70px "> <i class="fa fa-plus-circle" style="font-size:16px ; margin-right: 3px"></i>Add</button> 

     <input style="float: right;width: 300px; margin-left: 800px" class="form-control" id="myInput" type="text" placeholder="Search.."> 
    
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th >STT</th>  
       <th>Mã Tác Giả</th>
       <th >Họ và Tên</th>
        <th >Năm Sinh</th>  
       <th >Quê Quán</th>
        <th >Số đt</th> 
        <th>Thao Tác</th>
      </tr>
      <tbody id="myTable">
      <?php
      $stt=1;
        $form=($trang-1)*$sotin1trang;
       $query = "SELECT * FROM tacgia ORDER BY id_tacgia DESC LIMIT $form,$sotin1trang ";
        $result = mysqli_query($conn, $query);
      
      while($row = mysqli_fetch_array($result))
      {

      ?>
      <tr>
       <td><?php echo $stt ?></td>
       <td><?php echo $row['id_tacgia'] ?></td>
       <td><?php echo $row['hotentg'] ?></td>
       <td><?php echo $row['namsinh'] ?></td>
        <td><?php echo $row['quequan'] ?></td>
         <td><?php echo $row['sdt'] ?></td>
       <td><input type="button" name="view" value="view" id="<?php echo $row["id_tacgia"]; ?>" class="btn btn-info btn-xs view_data" /> <input type="button" name="delete" value="delete" id="<?php echo $row["id_tacgia"]; ?>" class="btn btn-info btn-xs delete_data"  data-toggle="modal" data-target="#myModal" />
        <!-- <input type="button" name="update" value="update" id="<?php echo $row["id_sach"]; ?>" class="btn btn-info btn-xs view_data'" /> -->
        <input type="button" name="view" value="update" id="<?php echo $row["id_tacgia"]; ?>" class="btn btn-info btn-xs update_data" />
      
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
        $sql="select * from tacgia";
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
 <div class="modal-dialog" >
  <div class="modal-content"  >
   <div class="modal-header">
   
    <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 style="color: blue">Thêm Tác Giả</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
      <label>Mã tác giả</label>
     <input type="text" name="id_tacgia" id="tacgia" class="form-control" />
     <br />
     <label>Họ và Tên</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Năm Sinh</label>
     <input type="date" name="namsinh" id="namsinh" class="form-control"></intput>
     <br />
     <label>Quê Quán</label>
      <input type="text" name="quequan" id="quequan" class="form-control"></input>
        <br>
        <br>
      <label>Số Điện Thoại</label>
      <input type="number" name="sdt" id="sdt" class="form-control"></input>   
     <br />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
        <button type="button" class="btn btn-default" data-dismiss="modal" style="float :right ;margin-right: 30px">Close</button>
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
    <h4 class="modal-title" style="color:blue">Chi Tiết Tác Giả</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
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
        <h4 class="modal-title" style="color:blue" >Sửa Tác giả </h4>
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

<!-- hahah -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          Modal body..
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="lod()">Close</button>
  
        </div>
        
      </div>
    </div>
  </div>

