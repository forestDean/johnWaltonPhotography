// JavaScript Document

<!-- AudioPlay jQuery -->    
function playAudio() {
	document.getElementById('myClick').play();
}

function gotoURL(url) {     
  window.location.href = url;   
} 
	
function basename (path, suffix) {
	// Returns the filename component of the path  
	// *     example 1: basename('/www/site/home.htm', '.htm');     returns 1: 'home'
	// *     example 2: basename('ecra.php?p=1');  returns 2: 'ecra.php?p=1'
	var b = path.replace(/^.*[\/\\]/g, '');
	 if (typeof(suffix) == 'string' && b.substr(b.length - suffix.length) == suffix) {
		b = b.substr(0, b.length - suffix.length);
	}		 
	return b;}
	
	
<!-- Facebook Asynchronous loading with jQuery --> 

//// prevent jQuery from appending cache busting string to the end of the FeatureLoader URL
//var cache = jQuery.ajaxSettings.cache;
//jQuery.ajaxSettings.cache = true;
//// Load FeatureLoader asynchronously. Once loaded, we execute Facebook init 
//
//jQuery.getScript('http://connect.facebook.net/en_US/all.js', function() {
//	FB.init({appId: '198612933518721', status: true, cookie: true, xfbml: true});
//});
//// just Restore jQuery caching setting
//jQuery.ajaxSettings.cache = cache;

<!-- Facebook Asynchronous loading --> 

//window.fbAsyncInit = function() {   
//FB.init({appId: '198612933518721', status: true, cookie: true, xfbml: true});   
//};   
//(function() {   
//var e = document.createElement('script'); e.async = true;   
//e.src = document.location.protocol +   
//'//connect.facebook.net/en_US/all.js';   
//document.getElementById('fb-root').appendChild(e);   
//}());   
		
//=============================================================		
//    var currentFile = "";    function playAudio() {         
//	var oAudio = document.getElementById('myaudio');        
//	// See if we already loaded this audio file.        
//	if ($("#audiofile").val() !== currentFile) {            
//	oAudio.src = $("#audiofile").val();            
//	currentFile = $("#audiofile").val();        
//	}           
//	 var test = $("#myaudio");           
//	  test.src = $("#audiofile").val();        
//	  oAudio.play();    
//    }
	
//var audio = $("#myClick")[0];
//$("#gallery a img").click(function() {
//  audio.play();
//});


