<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Landscape Index</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="../../includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../jquery/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="../../jquery/jquery.cycle2.carousel.min.js"></script>
<script type="text/javascript" src="../../jquery/jquery.cycle2.center.min.js"></script>
<script type="text/javascript" src="../../jquery/jquery.cycle2.swipe.min.js"></script>

<!--<link rel="stylesheet" href="jquery/responsive-placeholder-images.css" type="text/css">
<script type="text/javascript" src="jquery/responsive-placeholder-images.js"></script>-->

<!--<script src="jquery/holder.js"></script>
<script type="text/javascript" charset="utf-8">
//Holder.addTheme("bright", {background: "black", foreground: "red", size: 12}).run({
////	Holder.run({
//		renderer: 'html' //svg, canvas or html
//		});

Holder.addTheme("thumbImage", {
  background: "white", foreground: "red", size: 12
});
</script>-->

<!-- Lazy Load jQuery -->
<script src="../../jquery/jquery.lazyload.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
//	if(screen.width>680) {
		$("img.lazy").show().lazyload({			
			//event: "scroll",		
			event: "scrollstop",
			skip_invisible : false,
			//placeholder: "../graphics/greypixel.gif",
			effect : "fadeIn",
			treshhold: 200,
			effectspeed: 500			
		});	
//	};
});
</script>
<script type="text/javascript" charset="utf-8">
//	var $j = jQuery.noConflict();
//	$j(function() {
//	if (navigator.platform == "iPad" || navigator.platform == "iPhone") return;
//	$j("img.lazy").lazyload({
//		event: "scrollstop",
//		skip_invisible : false,
//		placeholder : "../graphics/greypixel.gif",
//		effect: "fadeIn",
//		treshhold: 200,
//		effectspeed: 5		
//	});
//	});
</script>
    
<style type="text/css">
<!--
-->
</style>
</head>

<body>

<div class="container">
  <div id="indexPage">
    <div id="indexHeader">
      <div id="indexTitle"><a href=../../landscapesGallery.php> landscapes </a></div>
      <div id="home"><a href=#> home </a></div>      
    </div><!--end of #indexHeader-->

	<?php require_once ('indexThumbs.php')?>       
  </div><!--end of #indexPage-->
  <div id="indexFooter">
  <div id="home"><a href=#> home </a></div>
  </div>
</div><!--end of #container-->
</body>
</html>
