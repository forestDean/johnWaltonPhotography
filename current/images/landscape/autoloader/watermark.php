<?php  date_default_timezone_set('Europe/London');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>20pictures | Watermark</title>
<link rel="shortcut icon" href="http://20pictures.com/graphics/favicon20.ico">
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

////try
$folder = 'watermark'; 
////$directory = ('images/'.$folder.'/');
$directory = ('../'.$folder.'/');
//
////get all image files with a .jpg extension.
$images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);
//
foreach($images as $image)
{
//# instantiate object
//$imagick = new Imagick();
////$imagick->setBackgroundColor("white");
//
////$image =  "test_P2.jpg" ; //test_L.jpg test_SQ.jpg
//# file to read in and work on
//$imagick->readImage($image);
//$imagick->setImageBackgroundColor("white");
////echo $image ; die;
//
//# vivid colours
////$imagick->normalizeImage(Imagick::CHANNEL_ALL);
// 
////$imagick->enhanceImage();
//
//# resize image
//#resizeImage (width, height, filter, blur factor where > 1 is blurry < 1 is sharp , bestfit = false)
//$imagick->resizeImage(450, 450, Imagick::FILTER_LANCZOS,0.9,true);
//$width0 = $imagick->getImageWidth();
//$height0 = $imagick->getImageHeight();
//
//#centre image in 450x450 if LS
//if ($width0 > $height0) {
//$imagick->extentImage (450, 450, ($width0-450)/2, ($height0-450)/2) ;
//}
//
//#20pictures Images...
//# add credit tab
////$imagick->setImageBackgroundColor("yellow");
//$imagick->extentImage($width0, 490, 0, -40);
//
//# Make an IMagickDraw object...
//$draw  = new IMagickDraw();
//
////$draw->setFillColor("grey");
//$draw->setFillColor("yellow");
//$imagick->annotateImage($draw, 1, 1, 0, "."); //pixel to top-left to prevent trim & add colour for sRGB
//$draw->setFillColor("black");
//$draw->setFontSize(18);
//$draw->setFont("Courier-Bold");
//
//# Draw "© JOHN WALTON" starting at (15, 15) in the image.
//#annotateImage(IMagickDraw draw, float x, float y, float angle, string text) 
//
//$imagick->annotateImage($draw, 15, 15, 0, "© JOHN WALTON");
//$imagick->annotateImage($draw, 15, 33, 0, "www.20pictures.com");
//
//# Landscape trim
//#removes setImageBackgroundColor (fuzz)
//$imagick->setImageBackgroundColor("white"); //rgb(250, 250, 250)
////$imagick->getImageBackgroundColor(); 
////$imagick->setImageBackgroundColor( new ImagickPixel( "rgb(250, 250, 250)" ) );
////$imagick = $imagick->flattenImages(); 
//$imagick->trimImage(0); // FIX THIS ...this trim is removing all uniform colour not just white!!!
//
//# set sRGB
//$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
//$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB
//
//# write the image to file.
//$imagick->writeImage("../tagged/" . basename($image));
//
//# watermark
//$width = $imagick->getImageWidth();
//$height = $imagick->getImageHeight();
//$draw->setFillColor("white");
//$draw->setFillAlpha( 0.2 );
//$draw->rectangle( 0, 275, $width, $height );    // set the rectangle
//$imagick->drawImage( $draw );    // Apply the draw class to the image canvas
//# text drop-shadow
//$draw->setFillColor("black");
//$draw->setFillAlpha(0.5); 
//$draw->setFontSize(36);
//$draw->setFont("../fonts/century_gothic.ttf"); 
//$draw->setGravity (Imagick::GRAVITY_CENTER);
//$imagick->annotateImage($draw, 1, 61, 0, "2Opictures.com");
//#text
//$draw->setFillColor("white");
//$draw->setFillAlpha(1); 
//$draw->setFontSize(36);
//$draw->setFont("../fonts/century_gothic.ttf"); 
//$draw->setGravity (Imagick::GRAVITY_CENTER);
//$imagick->annotateImage($draw, 0, 60, 0, "2Opictures.com");
// 
//# write the image to file.
//$imagick->writeImage("../watermark/" . basename($image));
// 
//# print the image back
////print $imagick->getImage();
//
//# Free resources associated with the Imagick object
//$imagick->clear();
//$imagick->destroy();
//
//##CREATE A FULL IMAGE THUMBNAIL HERE (OR AT END)
//$imagick->readImage($image);
//
////$imagick->thumbnailImage( 100, null );
//$imagick->setImageBackgroundColor("white");
//$imagick->resizeImage(150, 150, Imagick::FILTER_LANCZOS,0.9,true);
//
//$width1 = $imagick->getImageWidth();
//$height1 = $imagick->getImageHeight();
//# create square canvas
//$imagick->extentImage (150, 150, ($width1-150)/2, ($height1-150)/2) ;
//
////#orange dot to top-left to add colour for sRGB 
////$draw->setFillColor("orange");
////$imagick->annotateImage($draw, -72, -83, 0, "."); //10px is possibly font size
//
//# set sRGB
//$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
//$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB
//
//# write file
//$imagick->writeImage("../thumbfull/" . basename($image));
////print $imagick->getImage();
//
//#display thumbnail & preview
////$folder = 'tagged'; 
//////path to directory to scan
//////$directory = ('images/'.$folder.'/');
////$directory = ($folder.'/');	
//////get all image files with a .jpg extension.
////$images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);
// display on page
echo '<li id="thumb"><a href="../'.$folder.'/'.basename($image).'" class="gallery" rel="'.$folder.'" id="'.$folder.'" ><img src="../thumbfull/'.basename($image).'" width="150" height="150"></a><div id="title">'.basename($image).'</div></li>' ;

//# Free resources associated with the Imagick object
//$imagick->clear();
//$imagick->destroy();
}
//	catch(Exception $e)
//{
//	echo $e->getMessage();
//}

?>
</ul>
</div><!--end of "wrap_gallery "--> 
</body>
</html>