(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		// Logo header scroll down...
			$(window).scroll(function() {
				if ($(this).scrollTop() > '80') {  
				    $('header').addClass("minify");
				}
				else{
				    $('header').removeClass("minify");
				}
			});
		
	});
	
})(jQuery, this);
