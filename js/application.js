jQuery(function($) {
	$(document).ready(function() {
	 /*  $('.flexslider').flexslider({
		 animation: "slide",
		 controlsContainer: ".flex-container"
	   });*/
		$('a.donate').click(function () {
			$(this).parents('form').submit();
		});
	});
});
