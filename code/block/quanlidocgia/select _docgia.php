<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 // $connect = mysqli_connect("localhost", "root", "", "qlthuvien");
 include("../config.php");
 $query = "SELECT * FROM  docgia WHERE madg= '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
       
        <tr>  
            <td width="30%"><label>Ảnh</label></td>  
            <td width="70%"><img style="padding-left:80px;height:200px;width:250px" src="../img/docgia/'.$row["urlhinh"].'" ></td>  
        </tr>
        <tr>  
            <td width="30%"><label>MÃ Độc Giả</label></td>  
            <td width="70%">'.$row["madg"].'</td>  
        </tr>

        <tr>  
            <td width="30%"><label>Họ Và Tên</label></td>  
            <td width="70%">'.$row["hotendg"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Địa Chỉ</label></td>  
            <td width="70%">'.$row["diachi"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Ngày Sinh</label></td>  
            <td width="70%">'.$row["ngaysinh"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Giới Tính</label></td>  
            <td width="70%">'.$row["gioitinh"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Hạn sử Dụng</label></td>  
            <td width="70%">'.$row["hansudung"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Gmail</label></td>  
            <td width="70%">'.$row["gmail"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>SDT</label></td>  
            <td width="70%">'.$row["sdt"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
