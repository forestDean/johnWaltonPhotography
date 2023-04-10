<?php
   // user has clicked a delete hyperlink
   if($_GET['action'] && $_GET['action'] == 'delete') {
       //unlink($_GET['filename']);
	   unlink('thumbfull/'.($_GET['filename']));
	   //echo '../previews/'.basename($_GET['filename']);
	   unlink('../previews/'.($_GET['filename']));
	   unlink('../thumbs/'.($_GET['filename']));
       header("Location:preview.php");
       exit();
   }
?>