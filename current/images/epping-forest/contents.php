<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Gallery Index</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="../../includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- jQuery Lazy Load  -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
//	if(screen.width>680) {
		$("img.lazy").show().lazyload({			
			event: "scroll",		
			//event: "scrollstop",
			//skip_invisible : false,
			//placeholder: "../graphics/greypixel.gif",
			effect : "fadeIn",
			treshhold: 200,
			effectspeed: 500			
		});	
//	};
});
</script>

</head>

<body>

<div class="container">
  <div id="indexPage">
    <div id="indexHeader">
      <div id="indexTitle"><a href=gallery.php>epping forest</a></div>
      <div id="home"><a href=../../index.php><img src="../../../graphics/jw_button_grey30.png" width="25" height="25"></a></div>      
    </div><!--end of #indexHeader-->

	<?php require_once ('indexThumbs.php')?>       
  </div><!--end of #indexPage-->
  <div id="indexFooter">
  <div id="home"><a href=../../index.php><img src="../../../graphics/jw_button_grey30.png" width="25" height="25"></a></div>
  </div>
</div><!--end of #container-->

	<?php require_once ('../../includes/legal.php')?>

</body>
</html>
