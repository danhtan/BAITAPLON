<?php
 
 //$connect = mysqli_connect("localhost", "root", "", "qlthuvien");
include("config.php");
if(!empty($_POST))
{
    $name = mysqli_real_escape_string($conn, $_POST["name"]);  
    $loaisach = mysqli_real_escape_string($conn, $_POST["loaisach"]);  
    $tacgia = mysqli_real_escape_string($conn, $_POST["tacgia"]);  
    $hanh = mysqli_real_escape_string($conn, $_POST["hinhanh"]);  
    $mota = mysqli_real_escape_string($conn, $_POST["mota"]);
    $gia = mysqli_real_escape_string($conn, $_POST["gia"]);  
    $giam = mysqli_real_escape_string($conn, $_POST["giamuon"]);  
    $sl = mysqli_real_escape_string($conn, $_POST["soluong"]);
    $slc = mysqli_real_escape_string($conn, $_POST["soluongcon"]);
    $query = "
    INSERT INTO sach(tensach, id_loaisach, id_tacgia, urlhinh, mota,gia,giamuon,soluong,soluongcon)  
     VALUES('$name', '$loaisach', '$tacgia', '$hanh', '$mota','$gia','$giam','$sl','$slc')
    ";
    $qr=mysqli_query($conn,$query);
    // if($qr){
    //     header("location:dssach.php");
    // } 
}
?>