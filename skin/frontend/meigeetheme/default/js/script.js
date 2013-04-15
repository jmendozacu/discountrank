jQuery.noConflict();    
jQuery(window).load(function() {

	/* Fix for IE */
    	if (jQuery.browser.msie && jQuery.browser.version >= 9) {
		 jQuery.support.noCloneEvent = true;
		}
	/* End fix for IE */

	/* Top Cart */
	jQuery('.top-cart .block-title').click(function(){
		if(!jQuery(this).hasClass('active')){
			jQuery(this).addClass('active');
			is_active = true;
		}		
		jQuery('#topCartContent').slideToggle(500, function(){		
			jQuery(this).toggleClass('active');
			
			if(!is_active){
				jQuery('.top-cart .block-title').toggleClass('active');
			}
			is_active = false;
		})
		
	})
	/* Top Cart */

	/* More Views Slider */
	if(jQuery('#more-views-slider').length) {
		jQuery('#more-views-slider').bxSlider({
			infiniteLoop: true,
			displaySlideQty: 4,
	    	moveSlideQty: 1
		});
	}
	/* More Views Slider */

	/* Footer Slider */
	if(jQuery('#footer-slider ul').length) {
		jQuery('#footer-slider ul').bxSlider({
			infiniteLoop: false,
			displaySlideQty: 6,
	    	moveSlideQty: 1
		});
	}
	/* Footer Slider */
	
	/* Related Block Slider */
	if(jQuery('#block-related-slider').length) {
		jQuery('#block-related-slider').bxSlider({
			displaySlideQty: 4,
	    	moveSlideQty: 1
		});
	}
	/* Related Block Slider */

	/* Related Block Slider */
	if(jQuery('#wishlist-slider ul').length) {
		jQuery('#wishlist-slider ul').bxSlider({
			displaySlideQty: 1,
	    	moveSlideQty: 1
		});
	}
	/* Related Block Slider */


	/* Categories Accorion */
	if (jQuery('#categories-accordion').length) {
		jQuery('#categories-accordion li.level-top.parent ul.level0').before('<div class="btn-cat"></div>')
		jQuery('#categories-accordion li.level-top.parent .btn-cat').each(function(){
		    jQuery(this).toggle(function(){
		        jQuery(this).addClass('closed').next().slideToggle(200);
		    },function(){
		        jQuery(this).removeClass('closed').next().slideToggle(200);
		    })
		});
	}
	/* Categories Accorion */

  /* Layered Navigation Accorion */
  if (jQuery('#layered_navigation_accordion').length) {
    jQuery('.filter-label').each(function(){
        jQuery(this).toggle(function(){
            jQuery(this).addClass('closed').next().slideToggle(200);
        },function(){
            jQuery(this).removeClass('closed').next().slideToggle(200);
        })
    });
  }
  /* Layered Navigation Accorion */


  /* Product Collateral Accordion */
  if (jQuery('#collateral-accordion').length) {
	  jQuery('#collateral-accordion > div.box-collateral').hide();  
	  jQuery('#collateral-accordion > h2').click(function() {
	    var nextDiv = jQuery(this).next();
	    var visibleSiblings = nextDiv.siblings('div:visible');
	 
	    if (visibleSiblings.length ) {
	      visibleSiblings.slideUp(300, function() {
	        nextDiv.slideToggle(500);
	      });
	    } else {
	       nextDiv.slideToggle(300);
	    }
	  });
  }
  /* Product Collateral Accordion */

  /* My Cart Accordion */
  if (jQuery('#cart-accordion').length) {
	  jQuery('#cart-accordion > div.accordion-content').hide();  
	  jQuery('#cart-accordion > h3.accordion-title').click(function() {
	    var nextDiv = jQuery(this).next();
	    var visibleSiblings = nextDiv.siblings('div:visible');
	 
	    if (visibleSiblings.length ) {
	      visibleSiblings.slideUp(300, function() {
	        nextDiv.slideToggle(500);
	      });
	    } else {
	       nextDiv.slideToggle(300);
	    }
	  });
  }
  /* My Cart Accordion */
  
  /* Coin Slider */

	/* Fancybox */
	if (jQuery.fn.fancybox) {
		jQuery('.fancybox').fancybox();
	}
	/* Fancybox */

	/* Zoom */
	if (jQuery('#zoom').length) {
		jQuery('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
  	}
	/* Zoom */
	
	 /* page title */
	jQuery('.page-title, .block-related header').not('.title-buttons, .category-title').each(function(){		
		title_container_width = jQuery(this).width();  
		title_width = jQuery(this).find('h1, h2').innerWidth();			
		divider_width = (title_container_width - title_width-2);		
		jQuery(this).prepend('<div class="right-divider" />');
		jQuery(this).find('.right-divider').css('width', divider_width);
	}); 
	
});

jQuery(document).ready(function(){
  /* buttons */
  jQuery('.col-main button.button').wrapInner('<span />').wrapInner('<span />').wrapInner('<span />');
  
  /* top links */
  jQuery('#header .links li').each(function(i){
	 i++;
  	 jQuery(this).addClass('item-'+i);
   });
   
  /* Header Selects */
  jQuery(".form-language select, .form-currency select").selectbox();
  
  /* Sidebar Blocks */
  jQuery('.sidebar section:even').addClass('even');

});


