<table class="table table-bordered">
    <tr>
        <th> Mã phiếu Mượn </th>
        <th>Mã Sách</th>
        <th>Ngày Mượn</th>
        <th>Ngày Trả</th>
        <th>Trạng Thái Lúc Mượn</th>
    </tr>
    <?php
    if(isset($_POST['employee_id'])){
        include("../config.php");
        $id=$_POST['employee_id'];
        $sql="select * from chitietphieumuon where mapm='$id'";
        $kq=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($kq)) 
        {
            ?>
            <tr>
                <td><?php echo $row['mapm']; ?></td>
                 <td><?php echo $row['id_sach']; ?></td>
                  <td><?php echo $row['ngaymuon']; ?></td>
                   <td><?php echo $row['henngaytra']; ?></td>
                    <td><?php echo $row['trangthailm']; ?></td>
            </tr>
          <?php  
        }
    }
    ?>

</table>

