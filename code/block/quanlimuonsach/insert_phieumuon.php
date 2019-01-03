<?php

include("../config.php");
if(!empty($_POST))
{
    $mapm = $_POST['mapm']; 
    $madg = $_POST["docgia"];  
    $manv = $_POST["nhanvien"]; 

    $sql="SELECT * FROM docgia where  '$madg' in (SELECT madg FROM docgia where  hansudung < CURDATE())" ;
    $kq=mysqli_query($conn,$sql);
    $sl=mysqli_num_rows($kq);
    if($sl==0){
     
          $query = "
    INSERT INTO phieumuon(mapm,madg, manv)  
     VALUES('$mapm','$madg', '$manv')
    ";
    $qr=mysqli_query($conn,$query);
    }
    else{
    	 echo "loi";
 
    }
   
 }
?>