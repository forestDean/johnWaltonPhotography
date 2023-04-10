    <div id="slideshow" class="slideShow">
    <!--<div data-cycle-hash="201502221084-2"><img src="previews/john_walton_201502221084-2.jpg" width="900" height="450" alt="" id="landscapeImage1" title="201502221084-2" class="landscapeSlide"></div>-->
        <?php
    // all images  
    $folder = 'previews'; 
    //path to directory to scan
    //$directory = ('images/'.$folder.'/');	
	$directory = ($folder.'/');		
    //get all image files with a .jpg extension.
    $images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);
	$count = count(glob($directory . "*.{jpg,JPG}",GLOB_BRACE));
	//print_r ($images); exit;
    //pick $n random *values* (not keys) from an array $array:
//	if ($count <20){$n = $count;}
//	else
//  $n = 20;	
	$n = $count;
	//$n = count(glob($directory . "*.{jpg,JPG}",GLOB_BRACE));
	$flip = array_flip($images);
	$random = array_rand($flip, $n); 
	//print_r ($random); echo'<br><br>';
	
	//shuffle the random images to prevent ordering by number
	//echo'shuffle:<br>';
	$keys = array_keys($random);  
	$shuffle = shuffle ($keys);
	$random2 = array();  
    foreach ($keys as $key) {  
    $random2[] = $random[$key];  
    } 
	//print_r ($random2);echo'<br><br><br>'; 
	   
    // display on page
    $a = 1;
    foreach($random2 as $image) {
		
	// extract Identifier
	$subject = 	basename($image);;
	$search = array('john_walton_', '.jpg'); 
	$ref = str_replace ( $search  , '', $subject);
	//print_r ($refNo);
		
	//	echo $image.'<br>';
    list($width, $height, $type, $attr)= getimagesize($image);  
        //echo '<img src="'.$image.'" '. $attr .' alt="" id="mainImage'.$a++.'" title="'.basename($image).'" class="mainImagePlus">';
		echo '<div class="slideDiv" data-cycle-hash="'.$ref.'"><img src="'.$image.'" '. $attr .' alt="" id="slideImage'.$a++.'" title="'.$ref.'" class="slideImage"></div>';
    }

    ?>

	</div>
    
    <?php
//function curPageURL() {
// $pageURL = 'http';
// if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
// $pageURL .= "://";
// if ($_SERVER["SERVER_PORT"] != "80") {
//  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
// } else {
//  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
// }
// return $pageURL;
//}
?>

<?php
//  echo curPageURL();
//  	$url=parse_url("http://domain.com/site/gallery/1#photo45 ");
//	echo $url["fragment"]; //This variable contains the fragment
?>
	
