<?php 

//try
$folder = 'uploads'; 
$directory = ('../'.$folder.'/');
//$value = 'john_walton_68160202002.jpg';
$value = '../uploads/john_walton_68160202002.jpg';
////if ($width > $height){
//	//echo $value; exit;
//	$img = $directory.$value;
//	//$exif_data = exif_read_data($img, 'IFD0');
//	$exif_data = exif_read_data($img, NULL, true, true);
//	echo $exif_data['FileName']; exit;
//	//print_r ($exif_data); exit;
//    //$ref2 = "";
//    if (!empty($exif_data['DateTime'])) 
//    $ref2 = $exif_data['DateTime'];	
//	echo $ref2; exit;
////}

//echo $value; exit;

/* Create the object */
$im = new imagick($value);

/* Get the EXIF information */
//$exifArray = $im->getImageProperties("exif:*");
$exifArray = $im->getImageProperties("exif:ImageDescription");
echo $exifArray['exif:ImageDescription']; exit;
//print_r ($exifArray); exit;

//POST PROCESSING...
//foreach($_POST['processImage'] as $value) {

//// extract Caption = ImageDescription for landscape images only
////if ($width > $height){
//	//echo $value; exit;
//	$img = $directory.$value;
//	//$exif_data = exif_read_data($img, 'IFD0');
//	$exif_data = exif_read_data($img, NULL, true, true);
//	print_r ($exif_data); exit;
//    //$ref2 = "";
//    if (!empty($exif_data['DateTime'])) 
//    $ref2 = $exif_data['DateTime'];	
//	echo $ref2; exit;
////}

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

/* Get the EXIF information */
$exifArray = $value->getImageProperties("exif:*");
print_r ($exifArray); exit;

# resize image
#resizeImage (width, height, filter, blur factor where > 1 is blurry < 1 is sharp , bestfit = false)
$imagick->resizeImage(0, 450, Imagick::FILTER_LANCZOS, 1, false);
//$width0 = $imagick->getImageWidth();
//$height0 = $imagick->getImageHeight();

$draw  = new IMagickDraw();
# set sRGB
$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB

//#text: John Walton dropshadow
//$draw->setFillColor("black");
//$draw->setFillAlpha(1);
//$draw->setFontSize(14);
//$draw->setFont("fonts/gothic.ttf"); 
//$draw->setGravity (Imagick::GRAVITY_SOUTHEAST);
//$imagick->annotateImage($draw, 9, 0, 0, "John Walton");
#text: John Walton
$widthNew = $imagick->getImageWidth();
//if ($widthNew < 450){
$draw->setFillColor("#f2f2f2");
$draw->setFillAlpha(0.8);
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

#text: Caption dropshadow
if ($width > $height){
$draw->setFillColor("black");
$draw->setFillAlpha(0.3);
$draw->setFontSize(12);
//$draw->setFont("fonts/gothic.ttf"); 
$draw->setFont("fonts/segoeprb.ttf"); 
$draw->setGravity (Imagick::GRAVITY_CENTER);
$imagick->annotateImage($draw, 1, 0, 0, $ref2);
#text: Caption
$draw->setFillColor("#f2f2f2");
$draw->setFillAlpha(0.9);
$draw->setFontSize(12);
//$draw->setFont("fonts/gothic.ttf"); 
$draw->setFont("fonts/segoeprb.ttf"); 
$draw->setGravity (Imagick::GRAVITY_CENTER);
$imagick->annotateImage($draw, 0, 1, 0, $ref2);
}
 
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
//}
?>
