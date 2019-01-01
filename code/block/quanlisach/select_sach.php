<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 // $connect = mysqli_connect("localhost", "root", "", "qlthuvien");
 include("../config.php");
 $query = "SELECT * FROM  sach WHERE id_sach = '".$_POST["employee_id"]."'";
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
            <td width="30%"><label>Tên Sách</label></td>  
            <td width="70%">'.$row["tensach"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>id_loaisach</label></td>  
            <td width="70%">'.$row["id_loaisach"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>id_tacgia</label></td>  
            <td width="70%">'.$row["id_tacgia"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Giá</label></td>  
            <td width="70%">'.$row["gia"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Số lượng</label></td>  
            <td width="70%">'.$row["soluong"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Số lượng còn</label></td>  
            <td width="70%">'.$row["soluongcon"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
