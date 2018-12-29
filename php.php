<?php
include "models/config.php";
if(isset($_POST['submit'])){
    if( empty($_POST['tên_tk']) or empty($_POST['password']) or empty($_POST['qtc'])){
     echo '<span style="color:red">vui lòng không để trống. </span>';
    }
        else{
                $username=$_POST['tên_tk'];
        $password=$_POST['password'];
        $password2=$_POST['nhap_pw'];
        $qtc=$_POST['qtc'];
        $id=$_POST['id_tk'];
        $var=is_numeric($qtc);
        if(strlen($username)<6 or strlen($password)<6){
            echo '<span style="color:red">tên tài khoản và mật khẩu phải nhiều hơn 6 ký tự. </span>';
        }else{
        if($password!==$password2){
            echo '<span style="color:red">password không trùng nhau. </span>';
        }else{
            if($var==false){
                echo '<span style="color:red">quyền truy cập phải có kiểu số nguyên. </span>';
            }else{
            $sql="select * from nguoidung where username='$username'";
            $query=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($query);
            if($num==0){
                $sql1="insert into nguoidung(id_user,username,password,quyen_try_cap) value('$id','$username','$password','$qtc')"; 
                $them=mysqli_query($conn,$sql1);
                if($them){
                    echo '<span style="color:green">thêm thành công. </span>';
                }
                else{
                    echo '<span style="color:red">thêm không thành công. </span>';
                }
            }else{
                echo '<span style="color:red">tên tài khoản đã tồn tại. </span>';
            }
        }
    }
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ĐẠI HỌC THỦY LỢI</title>
     <link rel="stylesheet" href="bai.css">
    </head>
<body>  
                           <div>   
        <form action="#" method="post">
            <h1 style="text-align:center">Đăng ký</h1>
            <label>ID Tài Khoản:</label> 
            <input type="text" name="id_tk" placeholder="Id tài khoản" style="width:50%;margin-left: 47px">
            <br>
            <br> 
                    <label>Tên Tài Khoản:</label> 
            <input type="text" name="tên_tk" placeholder="Tên tài khoản" style="width:50%;margin-left: 37px"> 
            <br>
            <br>
            <label >Mật Khẩu:</label> 
            <input type="password" name="password" placeholder="Mật khẩu" style="width:50% ; margin-left: 86px;"> 
            <br>
            <br>
            <label >Nhập Lại Mật Khẩu:</label> 
            <input type="password" name="nhap_pw" placeholder="Xác nhận mật khẩu" style="width:50% ; margin-left: 0px;"> 
            <br>
            <br>
            <label>Quyền truy cập:</label> 
            <input type="text" name="qtc" placeholder="Quyền truy cập" style="width:50%;margin-left: 28px"> 
            <br>
            <br>
             <input type="submit" name="submit" style="margin-left:150px;width: 80px;" value="Submit">
            <input type="reset" style="margin-left:20px;width: 60px;">
        </form>
    </div>
    </body>
</html>
