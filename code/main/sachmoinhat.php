<?php
function sach_moi_nhat(){
	$sql="SELECT * from sach ORDER BY id_sach DESC LIMIT 1";
	return mysqli_query($sql);
}
?>