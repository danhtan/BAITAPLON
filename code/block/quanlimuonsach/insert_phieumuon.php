<?php

include("../config.php");
if(!empty($_POST))
{
    $mapm = $_POST['mapm']; 
    $madg = $_POST["docgia"];  
    $manv = $_POST["nhanvien"];       
    $query = "
    INSERT INTO phieumuon(mapm,madg, manv)  
     VALUES('$mapm','$madg', '$manv')
    ";
    $qr=mysqli_query($conn,$query);
}
?>