jQuery(document).ready(function($){	
	$(window).bind('scroll', function() {
		parallax();
	});			
	
	
	  $("#btnShowSubService").fancybox({
            width:1200,
            height:240,
            autoSize:false
        });
	
	$( "#tabs" ).tabs();
	
	
});


jQuery(window).load(function($) {
	
});

function parallax() {
	var scrollPos = $(window).scrollTop();		
	// site-header
	if(scrollPos >30){
		$('body.page #site-header').addClass('active');
	}else{
		$('body.page #site-header').removeClass('active');
	}
}