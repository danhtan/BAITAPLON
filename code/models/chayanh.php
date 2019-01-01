<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="models/stype/home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!--   <script type="text/javascript" src="/web/view/js/index.js"></script> -->
</head>
<body>
<div  class="container" style="margin-top: 0px;" >
<div class="w3-content w3-section" >
	 <img class="mySlides" src="models/img/anh6.jpg" style="width:100% ; height: 345px;">
  <img class="mySlides" src="models/img/anh1.jpg" style="width:100% ; height: 345px;">
  <img class="mySlides" src="models/img/anh2.jpg" style="width:100% ; height: 345px;">
  <img class="mySlides" src="models/img/anh3.jpg" style="width:100%; height: 345px;">
    <img class="mySlides" src="models/img/anh4.jpg" style="width:100%; height: 345px;">
      <img class="mySlides" src="models/img/anh5.jpg" style="width:100%; height: 345px;">
        <img class="mySlides" src="models/img/anh7.jpg" style="width:100%; height: 345px;">
</div>
<script>
var myIndex = 0;
carousel();
function carousel(){
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);
}
</script>
</body>
</html>