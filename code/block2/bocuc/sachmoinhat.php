 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides1 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container1
 {
  max-width: 1130px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev1, .next1 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next1 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev1:hover, .next1:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text1 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext1 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot1 {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active1, .dot1:hover {
  background-color: #717171;
}

/* Fading animation */
.fade1 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev1, .next1,.text1 {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container1">

<div class="mySlides1 fade1">
  <div class="numbertext1">1 / 3</div>
  <?php
  include("block2/config.php");
  $sql="select * from sach limit 0,4";
  $kq=mysqli_query($conn,$sql);
  $sl=mysqli_num_rows($kq);
  while($rows=mysqli_fetch_array($kq)){

  ?>
  <img src="block2/img/<?php echo $rows['urlhinh'] ?>" style="width:24.65% ; height:250px">
   
    <?php
  }
  ?>

</div>

<div class="mySlides1 fade1">
  <div class="numbertext1">2 / 3</div>
  <?php
 
  $sql="select * from sach limit 4,4";
  $kq=mysqli_query($conn,$sql);
  $sl=mysqli_num_rows($kq);

  while($rows=mysqli_fetch_array($kq)){

  ?>
  <img src="block2/img/<?php echo $rows['urlhinh'] ?>" style=" width:24.65% ; height:250px">
   
    <?php
  }
  ?>

</div>

<div class="mySlides1 fade1">
  <div class="numbertext1">3 / 3</div>
  <?php

  $sql="select * from sach limit 8,4";
  $kq=mysqli_query($conn,$sql);
  $sl=mysqli_num_rows($kq);

  while($rows=mysqli_fetch_array($kq)){

  ?>
  <img src="block2/img/<?php echo $rows['urlhinh'] ?>" style="width:24.65%  ; height:250px">
   
    <?php
  }
  ?>

</div>

<a class="prev1" onclick="plusSlides1(-1)">&#10094;</a>
<a class="next1" onclick="plusSlides1(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot1" onclick="currentSlide(1)"></span> 
  <span class="dot1" onclick="currentSlide(2)"></span> 
  <span class="dot1" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
  showSlides1(slideIndex1 += n);
}

function currentSlide(n) {
  showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
  var i;
  var slides1 = document.getElementsByClassName("mySlides1");
  var dots1 = document.getElementsByClassName("dot1");
  if (n > slides1.length) {slideIndex1 = 1}    
  if (n < 1) {slideIndex1 = slides1.length}
  for (i = 0; i < slides1.length; i++) {
      slides1[i].style.display = "none";  
  }
  for (i = 0; i < dots1.length; i++) {
      dots1[i].className = dots1[i].className.replace(" active1", "");
  }
  slides1[slideIndex1-1].style.display = "block";  
  dots1[slideIndex1-1].className += " active1";
}
</script>

</body>
</html> 

