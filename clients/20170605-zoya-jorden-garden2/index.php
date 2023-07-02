<?php  date_default_timezone_set('Europe/London');?>
<?php require_once ('includes/config.php')?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="graphics/favicon_jw.ico">
<title><?php echo CLIENT; ?></title>

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
//		modal       : false, //If set to true, will disable navigation and closing		
		closeBtn    : false, //If set to true, close button will be displayed
		arrows 		: true,	 //If set to true, navigation arrows will be displayed
		nextClick   : true, //If set to true, will navigate to next gallery item when user clicks the content
//		mouseWheel  : true, //If set to true, you will be able to navigate gallery using the mouse wheel
		loop        : true, //If set to true, enables cyclic navigation
		openEffect	: 'none', //Animation effect ('elastic', 'fade' or 'none')
		closeEffect	: 'none', //Animation effect ('elastic', 'fade' or 'none')
		nextEffect : 'none',
		prevEffect : 'none', 
		fitToView  : true,
		aspectRatio	: true,
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
	background-color: #333;
}
#content{position:relative; margin: 20px auto 0 auto}
#header{ position:relative; height: auto; width:95% ; border-bottom: #fff solid 1px;  margin: 0 auto 20px auto; overflow: visible;}
#head_left{ float:left; text-align: left}
#head_right{ float:right; text-align: right}
img{ border:0}
#logo{ position: relative; top:0; width:400px; margin:0 auto 10px auto; text-align:center; z-index:10;}
#wrap_gallery { position:relative; width:95% ; margin: 0 auto 0 auto; padding-bottom:30px; overflow: auto;}
#wrap_gallery img {margin:10px 10px 2px 10px; border: #202020 solid 1px}
.thumb{ position:relative; float:left}
.title{ /*text-indent:9px;*/ font-family:Verdana, Geneva, sans-serif; font-size:10px}
.#centre{position:relative; width: inherit; height:auto; margin: 0px auto 0px auto; border: #f00 solid 1px; overflow:auto}
ul {list-style-type:none; margin: 0 0 0 10px; padding: 0px; /*reset*/ text-align:left}
li{display:inline; margin:0 0 15px 0; /*border: #f00 solid 1px*/text-align: center}
#footer{ clear:both; position:relative; width:95% ; margin: 0 auto 20px auto; border-top: #fff solid 1px; padding-top:15px}
#foot_left{ float:left; text-align: left}
#foot_right{ float:right; text-align: right}
#legal{clear:both; text-align:center; border-top: #fff solid 1px; font-size: 10px; padding-top:10px}
#copyright{ text-align:center; font-weight:bold; margin-top:20px}

a:link { text-decoration:none; color:#fff}
a:visited {text-decoration:none; color:#fff}
a:hover {text-decoration:none; color:#f00}
a:active {text-decoration:none; color:#fff}
li img:hover { opacity: 0.6;}
</style>

<?php require_once ('../../analytics/google_analytics.php')?>

</head>
<body>

<div id="content">
<?php require_once ('includes/header.php')?>

<div id="wrap_gallery">
<div id="centre">
<ul>
<?php 

//try
$folder = 'thumbfull'; 
//$directory = ('cd_index/'.$folder.'/');
$directory = ($folder.'/');

//get all image files with a .jpg extension.
$images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);

foreach($images as $image)
{
# get ID number
$img = basename ($image,'.jpg');
$ids = (explode('_', $img, 3));
//print_r ($ids); exit;
$id = $ids[2];	
#display on page
//echo '<li class="thumb"><a href="watermark/' . basename($image) . '" class="gallery"  title="'.basename($image).'" rel="preview" ><img src="thumbfull/'.basename($image).'" width="150" height="150" alt="" ></a><div class="title">'.basename($image).'</div></li>' ;
echo '<li class="thumb"><a href="watermark/' . basename($image) . '" class="gallery"  title="' . basename($image) . '" rel="preview" >
<img src="../graphics/greypixel.gif" data-original="thumbfull/' . basename($image) . '" width="150" height="150" alt="" ></a><div class="title">' . $id . '</div></li>
<noscript><img src="thumbfull/' . $id . '" width="150" height="150" alt="" ></noscript>';

}


?>
</ul>
</div><!--end of "centre"-->
</div><!--end of "wrap_gallery"--> 
<?php require_once ('includes/footer.php')?>

</div><!--end of "content"--> 
</body>
</html>