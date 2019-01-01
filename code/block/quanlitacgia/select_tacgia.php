<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 include("../config.php");
 $query = "SELECT * FROM  tacgia WHERE id_tacgia = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Mã tác giả </label></td>  
            <td width="70%">'.$row["id_tacgia"].'</td>  
        </tr>
        
     <tr>  
            <td width="30%"><label>Tên Tác Giả </label></td>  
            <td width="70%">'.$row["hotentg"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>năm sinh</label></td>  
            <td width="70%">'.$row["namsinh"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Quê quán</label></td>  
            <td width="70%">'.$row["quequan"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Số ĐT</label></td>  
            <td width="70%">'.$row["sdt"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
