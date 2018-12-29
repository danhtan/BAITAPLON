<?php
if(isset($_POST["employee_id"]))
{
 include("config.php");
 $id=$_POST['employee_id'];
 $query = "select * FROM  sach WHERE id_sach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
 ?>
  <div>
      <form action="xuli_update.php" method="POST">
        <input type="hidden" name="id_sach" value="<?php echo $id ?>" >
         <label>Tên Sách</label>
     <input type="text" name="name" id="name" class="form-control" / value="<?php echo $row['tensach'] ?>">
     <br />
     <label>id_loaisach</label>
     <input type="text" name="loaisach" id="loaisach" class="form-control" value="<?php echo $row['id_loaisach'] ?>" ></intput>
     <br />
     <label>id_tacgia</label>
      <input type="text" name="tacgia" id="tacgia" class="form-control"  value="<?php echo $row['id_tacgia'] ?>" ></input>
        <br>
        <br>
      <label>hinhanh</label>
      <input type="text" name="hinhanh" id="hinhanh" class="form-control"  value="<?php echo $row['urlhinh'] ?>" ></input>
     <br />
     <label>Mô tả</label>
      <input type="te" name="mota" id="mota" class="form-control"  value="<?php echo $row['mota'] ?>" ></input>
     <br />
       <label>giá</label>
      <input type="te" name="gia" id="gia" class="form-control"  value="<?php echo $row['gia'] ?>" ></input>
     <br />
         <label>giá mượn</label>
      <input type="te" name="giamuon" id="giamuon" class="form-control"  value="<?php echo $row['giamuon'] ?>" ></input>
     <br />
         <label>số lượng</label>
      <input type="te" name="soluong" id="soluong" class="form-control"  value="<?php echo $row['soluong'] ?>" ></input>

     <br />
      <label>số lượng con</label>
      <input type="te" name="soluongcon" id="soluong" class="form-control"  value="<?php echo $row['soluongcon'] ?>" ></input>

      <br>
      <input type="submit" name="submit" value="update" style="padding: 5px;">
          
      </form>
  </div>

 <?php
}
?>