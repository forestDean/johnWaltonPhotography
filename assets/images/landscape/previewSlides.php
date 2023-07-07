<?php

	$a = 1;	
	if (isset($_GET['ref'])) {
	// get Identifier
	$refFirst = $_GET['ref'];
	//echo $ref;
	$image = 'previews/john_walton_'.$refFirst.'.jpg';
    list($width, $height, $type, $attr)= getimagesize($image);  
		echo '<div class="slideDiv" data-cycle-hash="'.$refFirst.'"><img src="'.$image.'" '. $attr .' alt="" id="slideImage'.$a++.'" title="'.$refFirst.'" class="slideImage"></div><br>';
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
	$refFirst = str_replace ( $search  , '', $subject);
	//echo $ref; exit;
	
	// display on page        
	$a = 1;
    list($width, $height, $type, $attr)= getimagesize($firstImage);  
        echo '<div class="slideDiv" data-cycle-hash="'.$refFirst.'"><img src="'.$firstImage.'" '. $attr .' alt="" id="slideImage'.$a++.'" title="'.$refFirst.'" class="slideImage"></div>';
	}
?>
    <script id="imageLoad" type="text/cycle">
<?php
    //all images  
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
	
	//shuffle the random images to prevent ordering by number
	$keys = array_keys($random);  
	$shuffle = shuffle ($keys);
	$random2 = array();  
    foreach ($keys as $key) {  
    $random2[] = $random[$key];  
    } 
	   
    // display on page
    $a = 2;
    foreach($random2 as $image) {

	//extract Identifier
	$subject = 	basename($image);;
	$search = array('john_walton_', '.jpg'); 
	$ref = str_replace ( $search  , '', $subject);
	//print_r ($refNo);

	//prevent duplication of first slide
	if ($ref != $refFirst){
	//echo $image.'<br>';
    list($width, $height, $type, $attr)= getimagesize($image);  
        //echo '<img src="'.$image.'" '. $attr .' alt="" id="mainImage'.$a++.'" title="'.basename($image).'" class="mainImagePlus">';
		echo '<div class="slideDiv" data-cycle-hash="'.$ref.'"><img src="'.$image.'" '. $attr .' alt="" id="slideImage'.$a++.'" title="'.$ref.'" class="slideImage"></div><br>';
	}
    }	
?>
	</script>