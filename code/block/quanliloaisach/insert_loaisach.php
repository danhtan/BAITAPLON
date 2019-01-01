<?php
 
 //$connect = mysqli_connect("localhost", "root", "", "qlthuvien");
include("../config.php");
if(!empty($_POST))
{
    $name = $_POST["name"];  
    $loaisach = $_POST["id_loaisach"]; 
    $query = "
    INSERT INTO loaisach(id_loaisach,tenloaisach)  
     VALUES('$loaisach','$name')
    ";
    $qr=mysqli_query($conn,$query);
}
?>