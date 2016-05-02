<?php 
//* Make header shrink!
add_action ( 'wp_footer', 'vr_shrink_head', 1 );
function vr_shrink_head() {
?>
<script>
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
</script>
<?php
}
