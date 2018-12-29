<?php
 
 //$connect = mysqli_connect("localhost", "root", "", "qlthuvien");
include("config.php");
if(!empty($_POST))
{
    $name = $_POST["name"];  
    $query = "
    INSERT INTO loaisach(tenloaisach)  
     VALUES('$name')
    ";
    $qr=mysqli_query($conn,$query);
}
?>