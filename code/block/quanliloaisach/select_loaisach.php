<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 // $connect = mysqli_connect("localhost", "root", "", "qlthuvien");
 include("../config.php");
 $query = "SELECT * FROM  loaisach WHERE id_loaisach = '".$_POST["employee_id"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
  
        <tr>  
            <td width="30%"><label>Tên Sách</label></td>  
            <td width="70%">'.$row["id_loaisach"].'</td>  
        </tr>
     <tr>  
            <td width="30%"><label>Tên Sách</label></td>  
            <td width="70%">'.$row["tenloaisach"].'</td>  
        </tr>
        
      
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
