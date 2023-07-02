<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('Europe/London');
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>email</title>
<style type="text/css">
<!--
.h1 { font-weight:bold; width:150px; float: left;}
.h2 {
	font-size: 10px; color:#999;
	font-family:Arial, Helvetica, sans-serif
}
.h3 {
	font-size: 14px;
	font-family: "Courier New", Courier, monospace;
	text-align:justify
}
body{margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:12px;}
#content{ margin:0 20px 0 20px; height:auto; widows:95%}
#title{ font-weight:bold; font-size:18px;  margin:30px 0 20px 0; border-bottom:#ccc solid 1px; padding-bottom:10px}
.message{font-family:"Courier New", Courier, monospace}
#ip{margin-top:40px; padding-top:5px; float: left; width:100%; border-top:#ccc solid 1px;}
.hide{display:none}
.greyfont{ color:#ccc; font-size:10px; float: left; width:100%}
.var{float: left; width:90%}

#spacer{float: left; width:100%; height:40px}
a {}
-->
</style>
</head>

<body>
<div id="content">
  <div id="title">John Walton Photography</div>
  <div class="h1">sent:</div>
  <div class="var"><?php echo date(DATE_RFC822);?></div>
  <div class="h1">email:</div>
  <div class="var">$email</div>
  <div class="h1">name:</div>
  <div class="var">$name</div>
  <div class="h1">telephone:</div>
  <div class="var">$telephone</div>
   <div class="h1">message:</div>
  <div class="var message">$message</div>
  <div id="ip" class="greyfont">ip: $ip</div>
  <div class="greyfont">referrer: $referrer</div>  
  <div id="spacer"></div>
</div><!--end of "content"-->

</body>
</html>
