@extends('backend.layouts.master')

@section('content')
    <h3 style="text-align: center; color: #ff4e07; letter-spacing: 2px; word-spacing: 3px; font-family: Monospace;"><b>Welcome Admin, {{ Auth::user()->name }} !!</b></h3>

  <!--Slider-->
<div class="w3-content w3-display-container">
  <img class="mySlides" src="{{asset('/image/3.jpg')}}" style="width:97%; max-height: 100%; padding-left: 55px;">
  <img class="mySlides" src="{{asset('/image/2.jpg')}}" style="width:97%; max-height: 100%; padding-left: 55px;">
  <img class="mySlides" src="{{asset('/image/3.jpg')}}" style="width:97%; max-height: 100%; padding-left: 55px;">
  <img class="mySlides" src="{{asset('/image/4.jpg')}}" style="width:97%; max-height: 100%; padding-left: 55px;">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!--End Slider-->
@endsection
