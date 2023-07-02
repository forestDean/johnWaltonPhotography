<?php
// ***LEAVE NO BLANK SPACE BEFORE HEADERS***
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('Europe/London');
//ob_start();
//ini_set('memory_limit','1200M');
//set_time_limit(900);
// required for IE, otherwise Content-disposition is ignored
//if(ini_get('zlib.output_compression'))
//ini_set('zlib.output_compression', 'Off');
//apache_setenv('no-gzip', '1');
//get filename from link eg: http://www.castingimage.com/clients/download.php?filename=test.zip
$ip = $_SERVER['REMOTE_ADDR'];
$filename = $_GET["filename"];
$filepath = '/home/bsensual/downloads/'.$filename;
//$filepath = '/home/bsensual/public_html/downloads/'.$filename;
//echo $filepath . '<br>'; echo filesize($filepath) . ' bytes'; exit;
if (!file_exists($filepath))
{
    die('File does not Exist');
}
	//header("X-Sendfile: $filepath");
	//header("X-Sendfile: " . $filepath );
	header('Content-Description: File Transfer');
	header('Content-type: application/zip');
	//header("Content-type: application/octet-stream");
	header('Content-Disposition: attachment; filename="' . $filename . '"');
	header("Expires: 0"); 
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
	header("Content-Length: ". filesize($filepath));
	set_time_limit(0);
	//header('Cache-Control: private');
	//ob_clean();
	//ob_end_clean();
	flush();
	readfile($filepath);	
	
	//SEND email notification with timestamp
	$to = "email@johnwalton.photography";
	$subject = "[DOWNLOADED] " . $filename;
	$message = $filename . " has been downloaded on: " . date(DATE_RFC822) . "\n\nip: " . $ip ;
	$from = "email@johnwalton.photography";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	exit;	
?>