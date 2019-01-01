<?php
 
 //$connect = mysqli_connect("localhost", "root", "", "qlthuvien");
include("../config.php");
if(!empty($_POST))
{
    $id_sach = $_POST["id_sach"]; 
    $name = $_POST["name"];  
    $loaisach = $_POST["loaisach"];  
    $tacgia =  $_POST["tacgia"];  
    $hanh = $_POST["hinhanh"];  
    $mota =  $_POST["mota"];
    $gia = $_POST["gia"];  
     
    $sl =$_POST["soluong"];
    $slc =$_POST["soluongcon"];
    $query = "
    INSERT INTO sach(id_sach,tensach, id_loaisach, id_tacgia, urlhinh, mota,gia,soluong,soluongcon)  
     VALUES('$id_sach','$name', '$loaisach', '$tacgia', '$hanh', '$mota','$gia','$sl','$slc')
    ";
    $qr=mysqli_query($conn,$query);
    if(!$qr){
        echo('lol');
    };
}
?>