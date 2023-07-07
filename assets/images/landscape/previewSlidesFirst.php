<?php

	$a = 1;	
	if (isset($_GET['ref'])) {
	// get Identifier
	$ref = $_GET['ref'];
	//echo $ref;
	$image = 'previews/john_walton_'.$ref.'.jpg';
    list($width, $height, $type, $attr)= getimagesize($image);  
		echo '<div class="slideDiv" data-cycle-hash="'.$ref.'"><img src="'.$image.'" '. $attr .' alt="" id="slideImage'.$a++.'" title="'.$ref.'" class="slideImage"></div><br>';
	}else{
	// first image
	$folder = 'previews'; 
	//path to directory to scan
	$directory = ($folder.'/');            
	//get all image files with a .jpg extension.
	$images = glob($directory . "*.{jpg,JPG}",GLOB_BRACE);
	//pick $n random *values* (not keys) from an array $array:
	$n = 1;
	$firstImage = array_rand(array_flip($images), $n);
	//echo $firstImage; exit;
	
	// extract Identifier
	$subject = 	basename($firstImage);;
	$search = array('john_walton_', '.jpg'); 
	$ref = str_replace ( $search  , '', $subject);
	//echo $ref; exit;
	
	// display on page        
	$a = 1;
    list($width, $height, $type, $attr)= getimagesize($firstImage);  
        echo '<div class="slideDiv" data-cycle-hash="'.$ref.'"><img src="'.$firstImage.'" '. $attr .' alt="" id="slideImage'.$a++.'" title="'.$ref.'" class="slideImage"></div>';
	}
?>