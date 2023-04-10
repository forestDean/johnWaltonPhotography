<!--Google Analytics-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(
  ['_setAccount', 'UA-4342073-11'],
  ['_setDomainName', 'johnwalton.photography'], 
  ['_trackPageview'] 
  );
  setTimeout("_gaq.push(['_trackEvent', '15_seconds', 'read'])",15000); //bounce rate fix

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  //function clickGA(category) { _gaq.push(['_trackEvent', category, 'clicked']); } //console.log("GA click - "  + category ); }
	function clickGA(category) { _gaq.push(['_trackEvent', category, 'clicked']); console.log("GA click - "  + category ); }
	
</script>
<!-- end of Google Analytics-->