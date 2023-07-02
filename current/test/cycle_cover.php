<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="../includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/JavaScript" data-cfasync='true'>
$(document).ready(function() {
//ImagePreload
//preload('../graphics/20picture02.gif,../graphics/anim_refresh1.gif,../graphics/ajax-loader.gif');
<!-- Cycle2 & Thumbnail jQuery -->

var slides = [
    "<img src='images/p2.jpg'>",
    "<img src='images/p3.jpg'>",
    "<img src='images/p4.jpg'>"
];

$('#slideshow').cycle({
	progressive: slides,	
	fx:        'cover',
	delay:    -2000,
	before: function(curr, next, opts) {
		opts.animOut.opacity = 0;
	},
//	fx:      'scrollHorz',
	sync:    1,  // true if in/out transitions should occur simultaneously
	easing:  'linear' , // easing method for both in and out transitions 			
//	delay:   3000,     // additional delay (in ms) for first transition 
	timeout: 4000,  // milliseconds between slide transitions (0 to disable auto advance) 		
	speed:   400,  // speed of the transition (any valid fx speed value)
	slides:	'> img',
	swipe: true,
//	overlay: '#slideshowWm', //watermark
//	overlayTemplate: '<a href="javascript:void(0);"><img src=\"../images/watermark/{{title}}" width="{{width}}" height="{{height}}" onmousedown="clickGA({{title}}); return false;"></a>',
	manualTrump:   true,  // causes manual transition to stop an active transition instead of being ignored 
	manualSpeed: 200, //the speed (in milliseconds) for transitions that are manually initiated
//	pager:  '#nav', //thumbnails
//	pagerTemplate: '<li><a href="javascript:void(0);" id="pager{{slideNum}}"><img src=\"../images/thumbs/{{title}}" width="70" height="70" onmousedown="clickGA({{title}}); return false;"></a></li>',
//	pagerEvent: 'mouseover', //for hover activation
//	pagerActiveClass: 'activeSlide', //The classname to assign to pager links when a particular link references the currently visible slide. 
	pause:		   1,	  // true to enable "pause on hover"
	pauseOnHover: '> #nav', //for hover activation pause
	log: false, //Set to false to disable console logging. 
});  //end of cycle() 
//console.log("gallery loaded");								
}); //end of $(document).ready
</script>

<style type="text/css">
<!--
-->
</style>
</head>

<body>

<div class="container">
  <div id="main">johnwalton.photography
    <div id="gallery"></div>
  </div>
</div>
</body>
</html>
