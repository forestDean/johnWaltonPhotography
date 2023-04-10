    <div id="slideshow" class="slideshow">
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
	if ($count <20){$n = $count;}
	else
    $n = 20;	
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
		echo '<div data-cycle-hash="'.$ref.'"><img src="'.$image.'" '. $attr .' alt="" id="landscapeImage'.$a++.'" title="'.$ref.'" class="landscapeSlide"></div>';
    }
    ?>
	</div>