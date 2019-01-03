<?php
include("../config.php");
if(!empty($_POST))
{
    $id_user = $_POST["id_user"]; 
    $user = $_POST["username"];  
    $pass = $_POST["password"];  
    $qtc =  $_POST["quyentrycap"];  
    $query = "
    INSERT INTO nguoidung(id_user,username, password, quyen_try_cap)  
     VALUES('$id_user','$user', '$pass', '$qtc')
    ";
    $qr=mysqli_query($conn,$query);
    if(!$qr){
        echo('lol');
    };
}
?>