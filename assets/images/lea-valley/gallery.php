<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton | Lea Valley</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link href="../../includes/johnwalton.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.progressive.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.center.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.swipe.min.js"></script>

<?php require_once ('slideshowGallery.htm')?>

</head>

<body>

<div class="container">
  <div id="main">
    <div id="galleryHeader">
    <?php require_once ('../../includes/social.php')?>
    
      <div id="home"><a href=../../index.php><img src="../../../graphics/jw_button_grey30.png" width="25" height="25"></a></div>      
    </div><!--end of #galleryHeader-->
    <div id="gallery">
    	<div id="fullOverlay"></div>
    	<div id="slideshow" class="slideShow">
		<?php require_once ('previewSlides.php')?>
        
        </div>     
    </div><!--end of #gallery-->

    <div id="controls">
        <div id="prev"><a href=#><img src="../../../graphics/prevNextButton30.png" width="35" height="35"></a></div>
        <div id="next"><a href=#><img src="../../../graphics/prevNextButton30.png" width="35" height="35"></a></div>        
        <div id="thumbs"><a href=contents.php> <img src="../../../graphics/thumbsButton_grey40_15.png" width="15" height="15"></a></div>
    </div>

  </div><!--end of #main-->
</div><!--end of #container-->

	<?php require_once ('../../includes/legal.php')?>

</body>
</html>