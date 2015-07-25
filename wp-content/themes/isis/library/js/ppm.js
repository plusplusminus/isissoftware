jQuery(document).ready(function(){
	jQuery('.background-image-holder').each(function() {
	    var imgSrc = jQuery(this).children('img').attr('src');
	    jQuery(this).css('background', 'url("' + imgSrc + '")');
	    jQuery(this).children('img').hide();
	    jQuery(this).css('background-position', '50% 50%');
	});

	setTimeout(function() {
        jQuery('.background-image-holder').each(function() {
            jQuery(this).addClass('fadeIn');
        });
        jQuery('.header.fadeContent').each(function() {
            jQuery(this).addClass('fadeIn');
        });
    }, 200);

    jQuery('#video-grid').mixItUp();
    jQuery('#video-premium-grid').mixItUp({
        selectors: {
            filter: '.filter-btn'
        }
    });
    
    jQuery('#accordion')
      .on('show.bs.collapse', function(e) {
        jQuery(e.target).prev('.panel-heading').addClass('active');
      })
      .on('hide.bs.collapse', function(e) {
        jQuery(e.target).prev('.panel-heading').removeClass('active');
    });

})




// Can also be used with $(document).ready()
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "fade",
    directionNav: false
  });
});