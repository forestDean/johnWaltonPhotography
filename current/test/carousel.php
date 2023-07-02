<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="../includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.progressive.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.carousel.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.center.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.swipe.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.prevnext.min.js"></script>

<script>
	$('#slideshow').cycle({
	fx: 'carousel',
//	sync:    false,  // true if in/out transitions should occur simultaneously
	easing:  'linear' , // easing method for both in and out transitions
	loader: true,
	progressive: "#slides",
	slides:	'> div',
	centerHorz: true,
	paused: true, //If true the slideshow will begin in a paused state
	speed: 1000,
	timeout: 2000,
//	hideNonActive: true,
	loop: 0,
//	carouselSlideDimension: 910,
//	carouselThrottleSpeed: true,
//	carouselVisible: 2,
//	carouselCenterHorz: true, 
//	carouselHideNonActive: true,
//	sync: false,
	pauseOnHover: true,
	prev:'#prev',
    next:'#next',
//	delay:    -2000,
   cssBefore: { opacity: 0 },
   animOut: { opacity: 0 },
   animIn: { opacity: 1 }
//	,loader: 'wait' //wait for all images to arrive before staring slideshow - width fix!
	});
</script>

<style type="text/css">
<!--
-->
</style>
</head>

<body>

<div class="container">
  <div id="main">johnwalton.photography
    <div id="gallery">
    <div id="slideshow" class="slideshow">
      <div><img src='../images/20140316_20pictures_hampstead_001e.jpg'></div>
      <script id="slides" type="text/cycle" data-cycle-split="---">
        <div><img src='images/20140316_20pictures_hampstead_020e.jpg'></div>
		---
        <div><img src='images/20150222_20pictures_lea_075e.jpg'></div>
		---
        <div><img src='images/20150222_20pictures_lea_034e.jpg'></div>
		---
        <div><img src='images/20150222_20pictures_lea_061e.jpg'></div>
		---
        <div><img src='images/20150224_20pictures_lea_35_1_1e.jpg'></div>
		---
        <div><img src='images/20150307_20pictures_lea_043e.jpg'></div>
		---
        <div><img src='images/20150307_20pictures_lea_050e.jpg'></div>
      </script>         
    </div>
    <div class=center>
    <a href=# id=prev> Prev </a>
    <a href=# id=next> Next </a>
	</div>
    <script>
 //    $.fn.cycle.defaults.autoSelector = '.slideshow';
	</script>
    </div>
  </div>
</div>
</body>
</html>
