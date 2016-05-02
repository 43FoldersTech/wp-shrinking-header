//* DEPRECATED IN FACOR OF PHP FILE USAGE

//* Make header shrink!

function gen_shrink_head() {
/* This function simply applies or removes the shrink class to the genesis framework 
 .site-header, which is where the header and our menu sites */

    jQuery(document).ready(function($) {
	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
			$('.site-header').addClass('shrink');
		}
		else {
			$('.site-header').removeClass('shrink');
		}
	});
     });
}
