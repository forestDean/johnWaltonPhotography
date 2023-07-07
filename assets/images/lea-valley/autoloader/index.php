<?php  date_default_timezone_set('Europe/London');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton | Selection</title>
<link rel="shortcut icon" href="http://johnwalton.photography/graphics/favicon.ico">
<link rel="stylesheet" href="autoloader.css" type="text/css" media="screen" >

<!-- BOF FANCYBOX  v2 -->
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="jquery/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="jquery/jquery.fancybox.css?v=2.0.3" type="text/css" media="screen" >
<script type="text/javascript" src="jquery/jquery.fancybox.pack.js?v=2.0.3"></script>

<script type="text/javascript" src="jquery/autoloader.js"></script>

<script type='text/javascript'>//<![CDATA[ 
$(function(){
var collection = $("input:checkbox:not(#chkSelectDeselectAll)").change(function() {
    selectAll[0].checked = collection.filter(":not(:checked)").length === 0;
});
var selectAll = $("#chkSelectDeselectAll").change(function(){
    collection.attr('checked', this.checked);
});
});//]]>  
</script>

</head>
<body id="">

<form name="selection" action="process.php" method="post">
<div id="header">
  <div id="head_left"><b>John Walton Autoloader</b> : <a href="index.php">Selection</a> : <a href="preview.php">Preview</a> : <input type="checkbox" id="chkSelectDeselectAll">Select All <input type="submit" name="formSelect" value="Process" /></div>
  <div id="head_right"><?php echo date('D, d M Y H:i:s')?></div>
 
</div>
<div id="wrap_gallery">
<ul>
<?php 

//try
$folder = 'uploads'; 
//$directory = ('images/'.$folder.'/');
$directory = ('../'.$folder.'/');

//get all image files with a .jpg extension.
$images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);

foreach($images as $image)
{
// extract Identifier
$subject = 	basename($image);;
$search = array('john_walton_', '.jpg'); 
$ref = str_replace ( $search  , '', $subject);
	
# instantiate object
$imagick = new Imagick();

##CREATE A FULL IMAGE THUMBNAIL HERE (OR AT END)
$imagick->readImage($image);

//$imagick->thumbnailImage( 100, null );
$imagick->setImageBackgroundColor("white");
$imagick->resizeImage(150, 150, Imagick::FILTER_LANCZOS,0.9,true);

$width1 = $imagick->getImageWidth();
$height1 = $imagick->getImageHeight();
# create square canvas
$imagick->extentImage (150, 150, ($width1-150)/2, ($height1-150)/2) ;

# set sRGB
$imagick->setImageColorspace(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or 1 - RGBColorspace 
$imagick->setImageType(13); //13 - sRGBColorspace or imagick::COLORSPACE_SRGB or imagick::COLORSPACE_RGB

# write file
$imagick->writeImage("thumbfull/" . basename($image));
//print $imagick->getImage();

#display thumbnail & preview
echo '<li id="thumb"><a href="../uploads/'.basename($image).'" class="gallery" rel="uploads" id="'.$folder.'" ><img src="thumbfull/'.basename($image).'" width="150" height="150"></a><div id="title">'.$ref.'<br><input type="checkbox" name="processImage[]" id="'.basename($image).'" value="'.basename($image).'" ></div></li>' ;

# Free resources associated with the Imagick object
$imagick->clear();
$imagick->destroy();

}
?>
</ul>
</div><!--end of "wrap_gallery "--> 
</form>
</body>
</html>