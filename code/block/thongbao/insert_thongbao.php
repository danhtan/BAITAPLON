<?php

include("../config.php");
if(!empty($_POST))
{
    $matb = $_POST["matb"]; 
    $ha = $_POST["hinhanh"];  
    $tieude = $_POST["tieude"];  
    $noidung =  $_POST["noidung"];  

    $query = "
    INSERT INTO thongbao(matb,urlhinh,tieude,noidung)  
     VALUES('$matb','$ha', '$tieude', '$noidung')
    ";
    $qr=mysqli_query($conn,$query);
    if(!$qr){
        echo('lol');
    };
}
?>