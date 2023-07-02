<?php  date_default_timezone_set('Europe/London');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>John Walton | Holding</title>
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
$folder = 'holding'; 
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

// display on page
echo '<li id="thumb"><a href="../'.$folder.'/'.basename($image).'" class="gallery" rel="'.$folder.'" id="'.$folder.'" ><img src="thumbfull/'.basename($image).'" width="150" height="150"></a><div id="title">'.$ref.'</div></li>' ;
}
?>
</ul>
</div><!--end of "wrap_gallery "--> 
</body>
</html>