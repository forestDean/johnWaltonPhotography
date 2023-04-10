<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton | Contact</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.swipe.min.js"></script>

<script type="text/javascript">
$("html").addClass("js");
$(document).ready(function() {
	$('#slideshowHome').cycle({
	fx: 'fade', //scrollHorz, fade, fadeout, carousel
	sync:    true,  // true if in/out transitions should occur simultaneously
	easing:  'linear' , // easing method for both in and out transitions
	slides:	'> div',
	loader: true, // load slides as images arrive
	progressive: "#imageLoad", // load slides as images arrive
//	paused: true, //If true the slideshow will begin in a paused state
	manualSpeed: 1000,
	delay:    2000,
	speed: 1000,
	timeout: 4000,
	pauseOnHover: true,	
	hideNonActive: true,
	allowWrap: true,
//	pagerEventBubble: false,
	prev:'#prev',
    next:'#next'
	});
}); //end of $(document).ready	
</script>

<style type="text/css">
<!--
-->
</style>
</head>

<body>

<div class="container">
  <div id="main">
    <div id="galleryHeader">
    <?php require_once ('includes/social.php')?>
    
    <div id="home"><a href=index.php><img src="../graphics/jw_button_grey30.png" width="25" height="25"></a></div>      
    </div><!--end of #galleryHeader-->
    
    <div id="galleryHome">
    	<div id="squareOverlay"></div>
    	<div id="slideshowHome" class="slideShowHome">
		<?php require_once ('images/squareSlides.php')?>
        </div><!--end of #slideshowHome-->
    </div><!--end of #galleryHome-->
    
	<?php require_once ('includes/contactForm.php')?>
   
    <div id="controls">
    <div id="prev"><a href=#><img src="../graphics/prevNextButton30.png" width="35" height="35"></a></div>
        <div id="next"><a href=#><img src="../graphics/prevNextButton30.png" width="35" height="35"></a></div>
    </div>

  </div><!--end of #main-->
</div><!--end of #container-->

	<?php require_once ('includes/legal.php')?>

</body>
</html>
