<!DOCTYPE html>
<html>
<head>
	<title>MOYATA</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
/*.mySlides {display:none;}*/
/*body {
   background-image: url("uploads/slider/crush.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;*/
  * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;background-image: url("uploads/slider/crush.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;}
.mySlides {display: none;}


slideshow-container {
  max-width: 100%;
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
  height: 15px;
  width: 15px;
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
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style></head>
<body>



<div class="w3-content w3-section" style="height:100%;">
   <img class="mySlides w3-animate-top" src="<?php echo base_url('uploads/slider/image.jpg'); ?>"/>
  <img  class="mySlides w3-animate-bottom" src="<?php echo base_url('uploads/slider/pro.jpeg'); ?>" />
    <img class="mySlides w3-animate-bottom" src= "<?php echo base_url('uploads/slider/ring.jpg'); ?>" />
  
   <img class="mySlides w3-animate-bottom"src="<?php echo base_url('uploads/slider/coup.jpg'); ?>" />
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 7000);    
}
</script>

</body>
</html>

</body>
</html>