<div style="background-color: #ffdb4d ; padding: 5px">
      <h2>Danh Mục Hỏi Đáp</h2>
    </div>
<?php
include("../config.php");
$sql="select * from hoidap where trangthai='đã trả lời' ";
$kq=mysqli_query($conn,$sql);
 $stt=1;
while ( $row=mysqli_fetch_array($kq) ){
 
?>
<div>
  <h3 style="color: red"> Câu <?php echo $stt; ?>: <?php echo $row['cauhoi']; ?> </h3>
  <p style="color: blue">Câu Trả Lời:</p> 
  <p style="font-size: 20px"><?php echo $row['cautraloi']; ?></p>
  
</div>


<?php

$stt++;

}
?>
