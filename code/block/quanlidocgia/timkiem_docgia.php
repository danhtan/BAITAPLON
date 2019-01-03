<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="../style/nhansu.css">

</head>
<body>

	<?php
if(!empty($_POST)){
$tendocgia=$_POST['employee_id'];

include("../config.php");
$sql="select * from docgia where hotendg like '%$tendocgia%'
";
$resualt=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_array($resualt)) {
	?>
					<div class="khunganh">
                    <div style="height:200px; margin-top:0px "; class="view_data" id="<?php echo $row["madg"]; ?>">
                        <img src="../img/docgia/<?php echo $row['urlhinh'] ?>" style=" margin-left:60px;width:120px;height: 110px;  margin-top: 10px; border-radius: 90%" / >
                        <br>
                        <p style="text-align:center;font-size: 20px">
                            <strong><?php echo $row['hotendg'] ?></strong>
                        </p>
                        
                        <p style="text-align:center;"><?php echo $row['ngaysinh'] ?></p>
                    </div>
                    <div style="height:90px;margin-top:0px;border-top:1px dashed #dddddd">
                        <span>
                            <i class="fa fa-users"></i>
                            <a href="#"><?php echo $row['diachi'] ?></a>
                        </span>
                        <br>
                        <span>
                            <i class="fa fa-envelope"></i>
                            <a href="#"><?php echo $row['gmail']; ?></a>
                        </span>
                        <br>

                        <span>
                            <i class="fa fa-phone"></i><?php echo $row['sdt']; ?>
                        </span>
                        <br>
                            
                          <input type="button" name="delete" value="delete" id="<?php echo $row['madg']; ?>" class="btn btn-info btn-xs delete_data"  />
                           <input type="button" name="view" value="update" id="<?php echo $row['madg']; ?>" class="btn btn-info btn-xs update_data" />
                          <input type="button" name="giahan" value="gia han" id="<?php echo $row['madg']; ?>" class="btn btn-info btn-xs gia_han" />

                    </div>
                </div>
					<?php
				}
			}
				
?>

</body>
</html>
