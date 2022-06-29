<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: ;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: aqua;
  font-weight: bold;
  font-size: 28px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 100px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: red;
  color: black;
}

.numbertext {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50;
  }
</style>
</head>
<body>

<h2 style="text-align:center">Multiple Slideshows</h2>

<h2>Inauguration Ceremony</h2>
<div class="slideshow-container">
  <div class="mySlides1" >
  <div class="numbertext">1 / 6</div>
    <img src="images/aayaas2020/inauguration/1.jpg" style="width:90%">
  </div>

  <div class="mySlides1">
  <div class="numbertext">2 / 6</div>
    <img src="images/aayaas2020/inauguration/2.jpg" style="width:90%">
  </div>

  <div class="mySlides1">
  <div class="numbertext">3 / 6</div>
    <img src="images/aayaas2020/inauguration/3.jpg" style="width:90%">
  </div>
  
  <div class="mySlides1">
  <div class="numbertext">4 / 6</div>
    <img src="images/aayaas2020/inauguration/4.jpg" style="width:90%">
  </div>

  <div class="mySlides1">
  <div class="numbertext">5 / 6</div>
    <img src="images/aayaas2020/inauguration/5.jpg" style="width:90%">
  </div>

  <div class="mySlides1">
  <div class="numbertext">6 / 6</div>
    <img src="images/aayaas2020/inauguration/6.jpg" style="width:90%">
  </div>
  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<p>Slideshow 2:</p>
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="images/aayaas2020/events/1.jpg" style="width:90%">
  </div>

  <div class="mySlides2">
    <img src="images/aayaas2020/events/2.jpg" style="width:90%">
  </div>

  <div class="mySlides2">
    <img src="images/aayaas2020/events/3.jpg" style="width:90%">
  </div>
  
  <div class="mySlides2">
    <img src="images/aayaas2020/events/4.jpg" style="width:90%">
  </div>

  <div class="mySlides2">
    <img src="images/aayaas2020/events/5.jpg" style="width:90%">
  </div>

  <div class="mySlides2">
    <img src="images/aayaas2020/events/6.jpg" style="width:90%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 
