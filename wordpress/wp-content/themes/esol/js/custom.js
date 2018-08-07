jQuery(document).ready(function($){
/*--Menu Dropdown--------*/ 
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });   
	   
   //Menu fixed top	
	  $('.header').affix({
      offset: {
        top: $('.header-top').height()
			  }
		});	
  
 // Aos Animation js		
	  AOS.init({
        easing: 'ease-in-out-sine'
      });		
});

/*-- Page Scroll To Top Section ---------------*/
	jQuery(document).ready(function () {
	
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.hc_scrollup').fadeIn();
			} else {
				jQuery('.hc_scrollup').fadeOut();
			}
		});
	
		jQuery('.hc_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	});	

