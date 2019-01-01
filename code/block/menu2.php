<!DOCTYPE html>
<html>
<head>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn12 {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown12:hover .dropbtn12 {
  background-color: red;
   text-decoration: none;
}

li.dropdown12 {
  display: inline-block;
}

.dropdown-content12 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content12 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content12 a:hover {background-color: #f1f1f1}

.dropdown12:hover .dropdown-content12 {
  display: block;
}
</style>
</head>
<body >
<div style="margin: 16px; margin-top: 0px ; margin-bottom: 0px">
<ul>
  <li ><a href="#home"><i class="fa fa-fw fa-home"></i>Home</a></li>
  <li><a href="http://localhost:8080/phech/code/index.php">Trang Chủ</a></li>
  <li><a href="http://localhost:8080/phech/code/block/quanlinhansu/nhansu.php">Quản Lí Nhân Sự</a></li>
  <li><a href="http://localhost:8080/phech/code/block/quanlidocgia/docgia.php">Quản Lí Độc Giả</a></li>
  <li class="dropdown12">
    <a href="javascript:void(0)" class="dropbtn12">Quản Lí Sách</a>
    <div class="dropdown-content12">
      <a href="http://localhost:8080/phech/code/block/quanlisach/dssach.php">Danh Sách Sách</a>
      <a href="http://localhost:8080/phech/code/block/quanlitacgia/dstacgia.php">Danh Sách Tác Giả</a>
      <a href="http://localhost:8080/phech/code/block/quanliloaisach/dsloaisach.php">Danh Sách Thể Loại</a>
    </div>
  </li>
    <li class="dropdown12">
    <a href="javascript:void(0)" class="dropbtn12">Quản Lí Mượn Trả Sách</a>
    <div class="dropdown-content12">
      <a href="http://localhost:8080/phech/code/block/quanlimuonsach/muonsach.php">Danh Sách phiếu Mượn</a>
      <a href="http://localhost:8080/phech/code/block/quanlitrasach/trasach.php">Danh Sách Phiếu Trả</a>
      <a href="">Danh Sách Phạt</a>
    </div>
  </li>
    <li><a href="http://localhost:8080/phech/code/block/thongke/thongke.php">Thống Kê</a></li>
        <li><a href="http://localhost:8080/phech/code/block/hoidap/hoidap.php">Hỏi Đáp</a></li>
</ul>
</div>

</body>
</html>