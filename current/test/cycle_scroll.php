<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="../includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.carousel.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.center.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.cycle2.swipe.min.js"></script>

<script>
//	// First load.
//	// This init listener must come before init or the event will already have fired.
//	$('#slideshow').on('cycle-post-initialize', function(event, optionHash) {
//		$('.callOutText').hide()
//						 .delay(1000)
//						 .fadeIn(1000);
//	});
//	
//	// all subsequent
//	$('#slideshow').on('cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag){
//	   $(incomingSlideEl).find('.callOutText')
//						 .hide()
//						 .delay(1000) 
//						 .fadeIn(1000);
//	});

	$('#slideshow').cycle({
	fx: 'fade', //scrollHorz, fade, fadeout, carousel
	sync:    true,  // true if in/out transitions should occur simultaneously
	easing:  'linear' , // easing method for both in and out transitions
//	loader: true,
//	progressive: "#slides",
	slides:	'> div',
	centerHorz: true,
	random: true,
	paused: true, //If true the slideshow will begin in a paused state
	manualSpeed: 1000,
//	delay:    2000,
//	speed: 1000,
//	timeout: 2000,
//	pauseOnHover: true,	
	hideNonActive: true,
	allowWrap: true,
	pagerEventBubble: false,
	prev:'#prev',
    next:'#next'

//before: function(curr, next, opts) {
//	        opts.cssBefore = {opacity: 1};
//			opts.animOut.opacity = 0;
//			opts.animIn.opacity = 1;
//		}

// cssBefore: { opacity: 0 },
//   animOut: { opacity: 0 },
//   animIn: { opacity: 1 }
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
<?php //require_once ('data-cycle-split.php')?> 
<?php require_once ('div-slides.php')?>       
    </div>
    
    <div id="controls">
        <ul class="controlBar">
        <li id="prev"><a href=#> Prev </a></li>
        <li id="thumbs"><a href=../images/landscape/gallery.php> Thumbs </a></li>
        <li id="next"><a href=#> Next </a></li>
        <!--<a href="#sunrise"> Link </a>-->
        </ul>
    </div>

    </div><!--end of #gallery-->
  </div><!--end of #main-->
</div><!--end of #container-->
</body>
</html>
