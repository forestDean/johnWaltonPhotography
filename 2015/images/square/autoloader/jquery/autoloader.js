// JavaScript Document

$(document).ready(function() {
	/* This is basic - uses default settings */
	$("a.grouped_elements").fancybox();
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.gallery").fancybox({
		transitionIn	:	'elastic',
		transitionOut	:	'elastic',
		prevEffect	: 'none',
		nextEffect	: 'none',		
		padding 	: 	0,	  //border width
		closeBtn : false ,
		mouseWheel : true ,
		arrows : false ,
		nextClick : true , 
		speedIn		:	600, 
		speedOut		:	200, 
		overlayShow	:	true,
		overlayColor		:	'#000',
		titleShow	    :	true,
		titlePosition	    :	'inside',
		loop    :	true, 
	});	
});