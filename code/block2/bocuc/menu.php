<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../block/style/glyphicons-halflings-regular.woff2">
 <link rel="stylesheet" type="text/css" href="block2/style/bootstrap.min.css">
     <script type="text/javascript" src="block2/style/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="block2/style/bootstrap.min.js"></script>

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
<div style="margin: 101px; margin-top: 0px ; margin-bottom: 0px; margin-left: 100px">
<ul>
  <li ><a href="http://localhost:8080/phech/code/index2.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
  <li><a href="http://localhost:8080/phech/code/index2.php">Trang Chủ</a></li>

  <li class="dropdown12">
    <a href="javascript:void(0)" class="dropbtn12">Giới Thiệu</a>
    <div class="dropdown-content12">
      <a href="#" id="gttv" class="gttv">Giới Thiệu Thư Viện </a>
      <a href="#" id="cnnv" class="cnnv">Chức Năng , Nhiện Vụ</a>
      <a href="#" id="hd" class="hd">Hướng Dẫn Sử Dụng</a>
       <a href="#" id="nq" class="nq">Nội quy</a>
    </div>
  </li>
   <li><a href="#" id="hoidap" class="hoidap">Hỏi Đáp</a></li>
     
    <li><a href="#" id="gioithieusach" class="gioithieusach">Giới Thiệu Sách</a></li>
     <li><a href="http://localhost:8080/phech/code/login.php" style="float: right;margin-left: 550px" id="Login"  class="Login" >Login</a></li>
</ul>
</div>

</body>
<script type="text/javascript">
  $(document).ready(function(){
  $(document).on('click', '.gttv', function(){
 

  $.ajax({
   url:"block2/gioithieuthuvien/gioithieu.php",
   method:"POST",
  
   success:function(data){

    $('#conten').html(data);
   
   },
  
   error: function(){
    alert('error!');
  }
  });

 });


    $(document).on('click', '.cnnv', function(){

  $.ajax({
   url:"block2/gioithieuthuvien/chucnangnhienvu.php",
   method:"POST",
   success:function(data){

    $('#conten').html(data); 
   },
   error: function(){
    alert('error!');
  }
  });

 });

  $(document).on('click', '.hd', function(){

  $.ajax({
   url:"block2/gioithieuthuvien/huongdan.php",
   method:"POST",
   success:function(data){

    $('#conten').html(data); 
   },
   error: function(){
    alert('error!');
  }
  });

 });

  $(document).on('click', '.nq', function(){

  $.ajax({
   url:"block2/gioithieuthuvien/noiquy.php",
   method:"POST",
   success:function(data){

    $('#conten').html(data); 
   },
   error: function(){
    alert('error!');
  }
  });

 });

   $(document).on('click', '.hoidap', function(){

  $.ajax({
   url:"block2/hoidap/hoidap.php",
   method:"POST",
   success:function(data){

    $('#conten').html(data); 
   },
   error: function(){
    alert('error!');
  }
  });

 });

    $(document).on('click', '.gioithieusach', function(){

  $.ajax({
   url:"block2/gioithieusach/gioithieusach.php",
   method:"POST",
   success:function(data){

    $('#conten').html(data); 
   },
   error: function(){
    alert('error!');
  }
  });

 });

 //        $(document).on('click', '.Login', function(){

 //  $.ajax({
 //   url:"login.php",
 //   method:"POST",
 //   success:function(data){

 //    $('#tonhat').html(data); 
 //   },
 //   error: function(){
 //    alert('error!');
 //  }
 //  });


 // });

  });  


</script>
</html>