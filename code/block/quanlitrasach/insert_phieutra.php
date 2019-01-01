<?php

include("../config.php");
if(!empty($_POST))
{
    $mapt = $_POST['mapt']; 
    $mapm = $_POST["phieumuon"];  
    $ngaytra = $_POST["ngaytra"];     
    $ttlt = $_POST["trangthai"];   
    $query = "
    INSERT INTO phieutra(mapt,mapm, ngaytra,tinhtranglt)  
     VALUES('$mapt','$mapm', '$ngaytra','$ttlt')
    ";
    $qr=mysqli_query($conn,$query);

    if(!$qr){
    	echo  "loi";
    }
}
?>