(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$(".question").on("click", function(e) {
			$(e.currentTarget).next(".answer").slideToggle(200);
		});

		// $(".donately-btn").css("background-color", "black");
		
	});
	
})(jQuery, this);
