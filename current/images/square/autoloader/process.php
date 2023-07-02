<?php  date_default_timezone_set('Europe/London');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton | Process</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link rel="stylesheet" href="autoloader.css" type="text/css" media="screen" >

<!-- BOF FANCYBOX  v2 -->
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="jquery/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="jquery/jquery.fancybox.css?v=2.0.3" type="text/css" media="screen" >
<script type="text/javascript" src="jquery/jquery.fancybox.pack.js?v=2.0.3"></script>

<script type="text/javascript" src="jquery/autoloader.js"></script>

</head>
<body id="">

<?php require_once ('header.php')?>
<div id="wrap_gallery">
<ul>
<?php 

//try
$folder = 'uploads'; 
$directory = ('../'.$folder.'/');

//POST PROCESSING...
foreach($_POST['processImage'] as $value) {

// extract Identifier
$subject = 	basename($value);;
$search = array('john_walton_', '.jpg'); 
$ref = str_replace ( $search  , '', $subject);
$ref1 = '#'.$ref.'';

# instantiate object
$imagick = new Imagick();

# file to read in and work on
$imagick->readImage('../uploads/' .$value);
$imagick->setImageBackgroundColor("white");

# resize image
#resizeImage (width, height, filter, blur factor where > 1 is blurry < 1 is sharp , bestfit = false)
$imagick->resizeImage(0, 450, Imagick::FILTER_LANCZOS, 1, false);
//$width0 = $imagick->getImageWidth();
//$height0 = $imagick->getImageHeight();

$draw  = new IMagickDraw();
# set sRGB
$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB

#text: John Walton dropshadow
$draw->setFillColor("black");
$draw->setFillAlpha(0.3);
$draw->setFontSize(14);
//$draw->setFont("fonts/gothic.ttf");
$draw->setFont("fonts/segoeprb.ttf"); 
$draw->setGravity (Imagick::GRAVITY_SOUTHEAST);
$imagick->annotateImage($draw, 9, 0, 0, "John Walton");
#text: John Walton
$widthNew = $imagick->getImageWidth();
//if ($widthNew < 450){
$draw->setFillColor("#f2f2f2");
$draw->setFillAlpha(0.9);
$draw->setFontSize(14);
//$draw->setFont("fonts/gothic.ttf"); 
$draw->setFont("fonts/segoeprb.ttf");
$draw->setGravity (Imagick::GRAVITY_SOUTHEAST);
$imagick->annotateImage($draw, 10, 1, 0, "John Walton");
//}

#text: Identifier dropshadow
$draw->setFillColor("black");
$draw->setFillAlpha(0.3);
$draw->setFontSize(12);
//$draw->setFont("fonts/gothic.ttf"); 
$draw->setFont("fonts/segoeprb.ttf"); 
$draw->setGravity (Imagick::GRAVITY_SOUTHWEST);
$imagick->annotateImage($draw, 11, 0, 0, $ref1);
#text: Identifier
$draw->setFillColor("#f2f2f2");
$draw->setFillAlpha(0.9);
$draw->setFontSize(12);
//$draw->setFont("fonts/gothic.ttf"); 
$draw->setFont("fonts/segoeprb.ttf"); 
$draw->setGravity (Imagick::GRAVITY_SOUTHWEST);
$imagick->annotateImage($draw, 10, 1, 0, $ref1);
 
# write the image to file.
$imagick->writeImage("../previews/" . $value);

# Free resources associated with the Imagick object
$imagick->clear();
$imagick->destroy();
//unlink('../uploads/' .$value); //delete original upload

##CREATE THUMBNAIL
$imagick->readImage('../uploads/' .$value);

$width = $imagick->getImageWidth();
$height = $imagick->getImageHeight();

if ($width == $height){
$imagick->resizeImage(125, 125, Imagick::FILTER_LANCZOS,0.7,true); //square image
}elseif ($width < $height){
$imagick->resizeImage(125, 125, Imagick::FILTER_LANCZOS,0.7,false); //portrait image squeeze
//$imagick->resizeImage(125, 0, Imagick::FILTER_LANCZOS,0.7,false); //portrait image crop
//$heightNew = $imagick->getImageHeight();
//$startY = ($heightNew-125)/2;
//$imagick->cropImage(125, 125, 0, $startY);
}else{
$imagick->resizeImage(255, 125, Imagick::FILTER_LANCZOS,0.7,false); //landscape image stretch
}

//$width1 = $imagick->getImageWidth();
//$height1 = $imagick->getImageHeight();
//echo $width1.'/'.$height1;
//exit;
# set sRGB
$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB

# write file
$imagick->writeImage("../thumbs/" . $value);
//echo "../thumbs/" . $value;
//exit;

// display on page
echo '<li id="thumb"><a href="../previews/'.$value.'" class="gallery" rel="preview" id="'.$folder.'" ><img src="thumbfull/'.$value.'" width="150" height="150"></a><div id="title">'.$ref.'</div></li>' ;

# Free resources associated with the Imagick object
$imagick->clear();
$imagick->destroy();
unlink('../uploads/' .$value); //delete original upload
}
?>
</ul>

</div><!--end of "wrap_gallery "--> 
</body>
</html>