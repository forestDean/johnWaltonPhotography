<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton</title>
<link rel="shortcut icon" href="https://johnwalton.photography/graphics/favicon.ico">
<link href="assets/includes/johnwalton.css" rel="stylesheet" type="text/css">

<!--<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.swipe.min.js"></script>-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.swipe.min.js"></script>-->

<?php require_once ('assets/includes/slideshowHome.htm')?>

</head>

<body>

<div class="container">
  <div id="main">
    <div id="galleryHeader">
    <?php require_once ('assets/includes/social.php')?>
    
    <div id="home"><a href=index.php><img src="./graphics/jw_button_grey30.png" width="25" height="25"></a></div>      
    </div><!--end of #galleryHeader-->
    
    <div id="galleryHome">	
    	<div id="squareOverlay"></div>
    	<div id="slideshowHome" class="slideShowHome">             
		<?php require_once ('assets/images/squareSlides.php')?>
        
        </div><!--end of #slideshowHome-->
    </div><!--end of #galleryHome-->    
    <?php require_once ('assets/includes/contentMenu.php')?>
   
    <div id="controls">
        <div id="prev"><a href=#><img src="./graphics/prevNextButton30.png" width="35" height="35"></a></div>
        <div id="next"><a href=#><img src="./graphics/prevNextButton30.png" width="35" height="35"></a></div>
    </div>

  </div><!--end of #main-->
</div><!--end of #container-->

	<?php require_once ('assets/includes/legal.php')?>

</body>
</html>
