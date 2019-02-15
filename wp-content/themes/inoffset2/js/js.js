jQuery(document).ready(function($){	
	$(window).bind('scroll', function() {
		parallax();
	});			
	
	  $("#btnShowSubService").fancybox({
            width:1200,
            height:240,
            autoSize:false
        });
	
	//$( "#tabs" ).tabs();
	
    $('.s-tab-content').hide();
    $('#tab-intro').show();
    
	$('#service-tabs a').click(function(e){
        $('#service-tabs a').removeClass('active');
        $(this).addClass('active');
        
        var rel = $(this).attr('href');
        $('.s-tab-content').hide();
        $(rel).show();
        
       $('html, body').animate({
            scrollTop: parseInt($('#site-header').offset().top)
        }, 500);
        return false;
    });
    
    
    
    $("#tab-images .s-images").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
    
    $('#btnClickTabOrder').click(function(){
        $('.s-tab-content').hide();
        $('#tab-order').show();
    });
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