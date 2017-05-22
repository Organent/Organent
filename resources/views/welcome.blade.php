@extends('layouts.app')

@section('content')
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4s;
  animation-name: fade;
  animation-duration: 4s;
}

.bg-5{
  background-color: #fccbc0;
}
.size1{
height:320px;
width:640px;
}
.size2{
height:120px;
width:320px;
}
@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 500px) {
  .text {font-size: 11px}
  .size1{
  height:320px;
  width:300px;
  }

}
</style>

<body>
  <div class="container-fluid ">
  <div class="row box">
    <div class="col-md-1">

  </div>
  <div class="col-md-10">


  <div class="container-fluid bg-5">
    <div class="row box">

    <div class="col-md-2">
    <center>

    <img src="{{URL::asset('/img/symbol-24.jpg')}}" class="img-responsive" height="120" width="120" style="padding-top:100px;" />

    </center>


  </div>
  <div class="col-md-8">



<center>
  <h2 style="color:#be0043;">Recommend Events</h2>
  </center>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <center>

  <img src="{{URL::asset('/img/event5.jpg')}}" alt="profile Pic"  class="size1">
  </center>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <center>

  <img src="{{URL::asset('/img/event6.jpg')}}" alt="profile Pic" class="size1">
  </center>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <center>

  <img src="{{URL::asset('/img/comingsoon.jpg')}}" alt="profile Pic"  class="size1">
  </center>
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</div>
<div class="col-md-2" style="padding-top:100px;">


  <center>

<img src="{{URL::asset('/img/symbol-23.png')}}" alt="profile Pic"  height="200" width="180" style="padding-right:20px; ">  </center>


</div>
</div>
</div>
</div>
<div style="padding-top:40px">

</div>
<div class="col-md-1">

</div>
</div>


<br />
<div class="row">


<div class="col-md-1">

</div>
<div class="bg-6 col-md-2">
  <center>

  <h1 style="color:white;">EVENT</h1>

  </center>
</div>
</div>
<br />



<div class="container-fluid">

</div>
<div class="row">
  <div class="col-md-1">

  </div>
  <div class="col-md-3" >
    <div class="card bg-5" style="width:32rem;">

      <img class="card-img-top size2 " onclick="alert('please login');" src="{{URL::asset('/img/event5.jpg')}}"  alt="Card image cap" >


        <center><h4 class="card-title">Be Green Market</h4></center>


    </div>


  </div>


  <div class="col-md-3">
    <div class="card bg-5" style="width:32rem;">
      <img class="card-img-top size2" onclick="alert('please login');" src="{{URL::asset('/img/event6.jpg')}}" alt="Card image cap">

        <center><h4 class="card-title">มหาสงกรานต์</h4></center>


    </div>

  </div>

</div>
<br />






</div>





<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
@endsection
