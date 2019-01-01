<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 // $connect = mysqli_connect("localhost", "root", "", "qlthuvien");
 include("../config.php");
 $query = "SELECT * FROM  nhanvien WHERE manv= '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
       
        <tr>  
            <td width="30%"><label>Ảnh</label></td>  
            <td width="70%"><img style="padding-left:80px;height:200px;width:250px" src="../img/'.$row["urlhinh"].'" ></td>  
        </tr>
        <tr>  
            <td width="30%"><label>MÃ Nhân Viên</label></td>  
            <td width="70%">'.$row["manv"].'</td>  
        </tr>
     <tr>  
            <td width="30%"><label>Mã Người Dùng</label></td>  
            <td width="70%">'.$row["id_user"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Họ Và Tên</label></td>  
            <td width="70%">'.$row["hotennv"].'</td>  
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
            <td width="30%"><label>SDT</label></td>  
            <td width="70%">'.$row["sdt"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Chúc Vụ</label></td>  
            <td width="70%">'.$row["chucvu"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Gmail</label></td>  
            <td width="70%">'.$row["gmail"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
