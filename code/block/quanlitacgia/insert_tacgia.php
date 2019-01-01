<?php
 
 //$connect = mysqli_connect("localhost", "root", "", "qlthuvien");
include("../config.php");
if(!empty($_POST))
{
    $id_tacgia =mysqli_real_escape_string($conn, $_POST["id_tacgia"]);  
    $name = mysqli_real_escape_string($conn, $_POST["name"]);  
    $namsinh = mysqli_real_escape_string($conn, $_POST["namsinh"]);  
    $quequan = mysqli_real_escape_string($conn, $_POST["quequan"]);  
    $sdt = mysqli_real_escape_string($conn, $_POST["sdt"]);  
    $query = "
    INSERT INTO tacgia (id_tacgia,hotentg, namsinh,quequan, sdt)  
     VALUES('$id_tacgia','$name', '$namsinh', '$quequan', '$sdt')
    ";
    $qr=mysqli_query($conn,$query);
    // if($qr){
    //     header("location:dssach.php");
    // } 
}
?>