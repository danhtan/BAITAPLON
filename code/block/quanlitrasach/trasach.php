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
  <title>Sach</title> 
  <link rel="stylesheet" type="text/css" href="../block/style/glyphicons-halflings-regular.woff2">
 <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
     <script type="text/javascript" src="../style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="../style/bootstrap.min.js"></script>
     <script type="text/javascript" src="trasach.js"></script>
  
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
       <th >MÃ Phiếu Trả</th>
        <th >MÃ Phiếu Mượn</th>  
       <th >NGày Trả</th>
        <th >Trạng Thái lúc Trả</th>
       <th>Thao Tac</th>
      </tr>
      <tbody id="myTable">
      <?php
      $stt=1;
        $form=($trang-1)*$sotin1trang;
       $query = "SELECT * FROM phieutra ORDER BY mapt DESC LIMIT $form,$sotin1trang ";
        $result = mysqli_query($conn, $query);
      
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
       <td><?php echo $row['mapt'] ?></td>
       <td><?php echo $row['mapm'] ?></td>
        <td><?php echo $row['ngaytra'] ?></td>
        <td><?php echo $row['tinhtranglt'] ?></td>
          
       <td> <input type="button" name="delete" value="Xóa" id="<?php echo $row["mapt"]; ?>" class="btn btn-info btn-xs delete_data"  data-toggle="modal" data-target="#myModal" />
        <!-- <input type="button" name="update" value="update" id="<?php echo $row["id_sach"]; ?>" class="btn btn-info btn-xs view_data'" /> -->
        <input type="button" name="view" value="Sửa" id="<?php echo $row["mapt"]; ?>" class="btn btn-info btn-xs update_data" />
     
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
        $sql="select * from phieutra";
        $kq=mysqli_query($conn,$sql);
        $tongtin=mysqli_num_rows($kq);
      
        $sotrang=ceil($tongtin/$sotin1trang);
     
        for ($i=1; $i <= $sotrang ; $i++) {       
           echo"<a href='trasach.php?trang=$i' style='background-color:blue ;color:white;margin:5px;padding:2px '>trang $i </a>";
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
  <div class="modal-content" >
   <div class="modal-header">
  
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 >Thêm Phiếu Trả</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
        <label>Mã pc</label>
      <?php
      $sql="select mapt from phieutra ORDER by mapt DESC LIMIT 0,1";
      $re=mysqli_query($conn,$sql);
      $r=mysqli_fetch_array($re);
      ?>
     <input type="text" name="mapt" id="mapt" class="form-control" value="<?php echo $r['mapt']+1 ?>" />
     <br />
     <label>MÃ Phiếu Mượn</label>
     <!-- <input type="text" name="docgia" id="docgia" class="form-control" /> -->
     <select class=" form-control" name="phieumuon" id="phieumuon">
       <option>      </option>
       <?php
          $sql="select *from phieumuon";
          $kq=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($kq)) {
          ?>
          <option><?php echo $row['mapm']; ?></option>
          <?php
          }
       ?>
     </select>
     <br />
      <label>Ngày Trả</label>
     <input type="date" name="ngaytra" id="ngaytra" class="form-control" > 
     <br />
     <label>Trang Thái Lúc Trả</label>
      <select class=" form-control" name='trangthai' id="trangthai">

          <option>Tốt</option>
           <option>Bình Thường</option>
            <option>Hỏng </option>
       
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
    <h4 class="modal-title">Sửa Phiếu Mượn</h4>
   </div>
   <div class="modal-body" id="employee_detail_sua">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div> 



