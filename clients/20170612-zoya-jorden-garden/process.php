<?php date_default_timezone_set('Europe/London');
set_time_limit(0);
require_once ('includes/config.php') ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>process...</title>

<!-- BOF FANCYBOX  v2 -->
<!--<script type="text/javascript" src="jquery/jquery.js"></script>-->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="jquery/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="jquery/jquery.fancybox.css?v=2.0.3" type="text/css" media="screen" >
<script type="text/javascript" src="jquery/jquery.fancybox.pack.js?v=2.0.3"></script>
<link rel="stylesheet" href="jquery/helpers/jquery.fancybox-buttons.css?v=2.0.3" type="text/css" media="screen" >
<script type="text/javascript" src="jquery/helpers/jquery.fancybox-buttons.js?v=2.0.3"></script>
<link rel="stylesheet" href="jquery/helpers/jquery.fancybox-thumbs.css?v=2.0.3" type="text/css" media="screen" >
<script type="text/javascript" src="jquery/helpers/jquery.fancybox-thumbs.js?v=2.0.3"></script>
<script type="text/javascript" src="jquery/jquery.lazyload.js"></script>

<script type="text/javascript"> 
//GALLERY
$(document).ready(function() {
	$(".gallery").fancybox({
		padding 	: 	5,	  //border width
		closeBtn    : false, //If set to true, close button will be displayed
		arrows 		: true,	 //If set to true, navigation arrows will be displayed
		nextClick   : true, //If set to true, will navigate to next gallery item when user clicks the content
//		mouseWheel  : true, //If set to true, you will be able to navigate gallery using the mouse wheel
//		modal       : false, //If set to true, will disable navigation and closing
		loop        : true, //If set to true, enables cyclic navigation
		openEffect	: 'none', //Animation effect ('elastic', 'fade' or 'none')
		closeEffect	: 'none', //Animation effect ('elastic', 'fade' or 'none')
		nextEffect : 'none',
		prevEffect : 'none', 
		title : "title_test_002",
		helpers	: {
			title : {
            	type : 'outside'
            },
			overlay	: //null
				{
				opacity : 0.8,
				css : {
					'background-color' : '#000'
				},
				closeClick	: true,
			},
		}
	});
});
</script>
<script type="text/javascript">
// This causes all images of class 'gallery' to be lazy loaded & show if no Javascript Enabled - 200px before visible
	$(document).ready(function(){		 
	    $(function() { 
		$('.gallery img').show().lazyload({ 
				placeholder : '". BASEURL ."../graphics/greypixel.gif'					
				}); 
				threshold : 200 ;   
		        effect    : 'fadeIn'
		    });		
    });	

var loadingAnim = '"../graphics/loading.gif';

</script>

<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #DADADA;
}
body {
	background-color: #000;
}
#content{position:relative; margin: 20px auto 0 auto}
#header{ position:relative; height:30px; width:95% ; border-bottom: #DADADA solid 1px; margin: 0 auto 20px  auto}
#head_left{ float:left}
#head_right{ float:right}
#wrap_gallery { position:relative; width:95% ; margin: 0 auto 20px auto}
#wrap_gallery img {margin:10px 10px 2px 10px; border: #202020 solid 1px}
.thumb{ position:relative; float:left}
.title{ /*text-indent:9px;*/ font-family:Verdana, Geneva, sans-serif; font-size:10px}
.#centre{position:relative; width: inherit; height:auto; margin: 0px auto 0px auto; border: #f00 solid 1px; overflow:auto}
ul {list-style-type:none; margin: 0 0 0 10px; padding: 0px; /*reset*/ text-align:left}
li{display:inline; margin:0 0 15px 0; /*border: #f00 solid 1px*/text-align: center}

a:link { text-decoration:none; color:#fff}
a:visited {text-decoration:none; color:#fff}
a:hover {text-decoration:none; color:#f00}
a:active {text-decoration:none; color:#fff}
li img:hover { opacity: 0.6;

</style>

</head>
<body>

<div id="content">
<?php require_once ('includes/header1.php')?>

<div id="wrap_gallery">
<div id="centre">
<ul>
<?php 

//try
$previewSize = PREVIEW_SIZE ;
$previewSizeSq = PREVIEW_SIZE_SQUARE ;
$folder = 'uploads'; 
//$directory = ('cd_index/'.$folder.'/');
$directory = ($folder.'/');

//get all image files with a .jpg extension.
$images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);

foreach($images as $image)
{	
# instantiate object
$imagick = new Imagick();

# file to read in and work on
$imagick->readImage($image);
$imagick->setImageBackgroundColor("white");
//echo $image ; die;

# vivid colours
//$imagick->normalizeImage(Imagick::CHANNEL_ALL);
 
//$imagick->enhanceImage();

# resize image
#resizeImage (width, height, filter, blur factor where > 1 is blurry < 1 is sharp , bestfit = false)
//$ln = getImageLength($image);
//$ln = getimagesize($image);
 //print_r ($ln); exit;
 
$att = getimagesize($image); //echo $width; exit;
$width = $att[0];
$height = $att[1];
if ($width==$height) {//echo $previewSizeSq; exit;
$imagick->resizeImage($previewSizeSq, $previewSizeSq, Imagick::FILTER_LANCZOS,0.9,true);
}else{ //echo 'false';
$imagick->resizeImage($previewSize, $previewSize, Imagick::FILTER_LANCZOS,0.9,true);
}

# Make an IMagickDraw object...
$draw  = new IMagickDraw();

# set sRGB
$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB

# watermark
// $width = $imagick->getImageWidth();
// $height = $imagick->getImageHeight();
// if ($previewSize>500) {
// $draw->setFillColor("white");
// $draw->setFillAlpha( 0.4 );
// $draw->line  ( $width*0.25, 0, $width*0.25, $height );    // set the vertical line
// $draw->setFillColor("white");
// $draw->setFillAlpha( 0.4 );
// $draw->line  ( $width/2, 0, $width/2, $height );    // set the vertical line
// $draw->setFillColor("white");
// $draw->setFillAlpha( 0.4 );
// $draw->line  ( $width*0.75, 0, $width*0.75, $height );    // set the vertical line
// };
// $draw->setFillColor("white");
// $draw->setFillAlpha( 0.1 );
// $draw->rectangle( 0, $height/2, $width, $height );    // set the rectangle
// $imagick->drawImage( $draw );    // Apply the draw class to the image canvas
// # text drop-shadow
// $draw->setFillColor("black");
// $draw->setFillAlpha(0.5); 
// $draw->setFontSize(30);
// $draw->setFont("fonts/century_gothic.ttf"); 
// $draw->setGravity (Imagick::GRAVITY_CENTER);
// $imagick->annotateImage($draw, 1, 51, 0, "2Opictures.com");
// # text
// $draw->setFillColor("white");
// $draw->setFillAlpha(1); 
// $draw->setFontSize(30);
// $draw->setFont("fonts/century_gothic.ttf"); 
// $draw->setGravity (Imagick::GRAVITY_CENTER);
// $imagick->annotateImage($draw, 0, 50, 0, "2Opictures.com");
# get ID number
$img = basename ($image,'.jpg');
//$ids = end(split('_',$img)); //use this for number only	
$ids = (explode('_', $img, 3));
//print_r ($ids); exit;
$id = $ids[2];
# ID drop-shadow
$draw->setFillColor("black");
$draw->setFillAlpha(0.5); 
$draw->setFontSize(10);
$draw->setFont("fonts/verdana.ttf"); 
$draw->setGravity (Imagick::GRAVITY_SOUTHEAST);
$imagick->annotateImage($draw, 5, 5, 0, $id);
# ID
$draw->setFillColor("white");
$draw->setFillAlpha(1); 
$draw->setFontSize(10);
$draw->setFont("fonts/verdana.ttf"); 
$draw->setGravity (Imagick::GRAVITY_SOUTHEAST);
$imagick->annotateImage($draw, 6, 6, 0, $id);

# write the image to file.
$imagick->writeImage("watermark/" . basename($image));
 
# print the image back
//print $imagick->getImage();

# Free resources associated with the Imagick object
$imagick->clear();
$imagick->destroy();

##CREATE A FULL IMAGE THUMBNAIL HERE (OR AT END)
$imagick->readImage($image);

//$imagick->thumbnailImage( 100, null );
$imagick->setImageBackgroundColor("white");
$imagick->resizeImage(150, 150, Imagick::FILTER_LANCZOS,0.9,true);

$width1 = $imagick->getImageWidth();
$height1 = $imagick->getImageHeight();
# create square canvas
$imagick->extentImage (150, 150, ($width1-150)/2, ($height1-150)/2) ;

//#orange dot to top-left to add colour for sRGB 
//$draw->setFillColor("orange");
//$imagick->annotateImage($draw, -72, -83, 0, "."); //10px is possibly font size

# set sRGB
$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB

# write file
$imagick->writeImage("thumbfull/" . basename($image));
//print $imagick->getImage();

#display on page
//echo '<li class="thumb"><a href="watermark/' . basename($image) . '" class="gallery"  title="'.basename($image).'" rel="preview" ><img src="thumbfull/'.basename($image).'" width="150" height="150" alt="" ></a><div class="title">'.basename($image).'</div></li>' ;
echo '<li class="thumb"><a href="watermark/' . basename($image) . '" class="gallery"  title="' . basename($image) . '" rel="preview" >
<img src="../graphics/greypixel.gif" data-original="thumbfull/' . basename($image) . '" width="150" height="150" alt="" ></a><div class="title">' . $id . '</div></li>
<noscript><img src="thumbfull/' . $id . '" width="150" height="150" alt="" ></noscript>';

//echo '<li id="thumb"><a href="tagged/'.basename($image).'" class="gallery" rel="tagged" id="'.$folder.'" ><img src="thumbfull/'.basename($image).'" width="150" height="150"></a><div id="title">'.basename($image).'</div></li>' ;

# Free resources associated with the Imagick object
$imagick->clear();
$imagick->destroy();
}
//	catch(Exception $e)
//{
//	echo $e->getMessage();
//}

?>
</ul>
</div><!--end of "centre"-->
</div><!--end of "wrap_gallery"--> 
</div><!--end of "content"--> 
</body>
</html>