<?php
 //$connect = mysqli_connect("localhost", "root", "", "qlthuvien");
include("../config.php");
if(!empty($_POST))
{
    $mapm = $_POST["mapm"]; 
    $id_sach = $_POST["masach"];  
    $ngaymuon = $_POST["ngaymuon"];  
    $henngaymuon =  $_POST["henngaymuon"];  
    $ttlm = $_POST["trangthai"];  
   
    $query = "
    INSERT INTO chitietphieumuon (mapm,id_sach,ngaymuon,henngaytra,trangthailt)  
     VALUES('$mapm','$id_sach','$ngaymuon', '$henngaymuon', '$ttlm')
    ";
    $qr=mysqli_query($conn,$query);

    $query2="
    update sach 
    set soluongcon=soluongcon-1
    where  id_sach='$id_sach'
    ";
    $kq=mysqli_query($conn,$query2);
    if(!$query2){
      echo "loi update";
    }
    if(!$qr){
        echo('loi');
    };
}
?>
     <table class="table table-bordered" id="phieumuon">
        <tr>
          <TH>Mã Pm</TH>
          <th> Mã Sách</th>
          <th>Ngày Mượn</th>
          <th>Hẹn Ngày Trả</th>
          <th>TRạng Thái lúc Mượn</th>
  
        </tr>

        <?php
        $sql="select * from chitietphieumuon where mapm= '$mapm'";
        $kq2=mysqli_query($conn,$sql);
        $sl=mysqli_num_rows($kq2);
      
        while ( $rows=mysqli_fetch_array($kq2)) {
        ?>
           <tr>
            <td>  <?php echo $rows['mapm']?></td>
            <td><?php echo $rows['id_sach'] ?></td>
            <td><?php echo $rows['ngaymuon'] ?></td>
             <td><?php echo $rows['henngaytra'] ?></td>
             <td><?php echo $rows['trangthailt'] ?></td>
           <!--  <td> <input type="button" name="<?php echo $rows['id_sach'] ?>" value="Xóa" id="<?php echo $mapm ?> " class="btn btn-info btn-xs delete_data_ctpm"  /></td> -->
            
            </tr>


           <?php
         }
         ?>
      </table> 

   

