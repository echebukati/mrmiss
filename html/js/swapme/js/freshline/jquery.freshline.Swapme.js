/**
 * jquery.freshline.SwapMe - jQuery Plugin for Changing some Divs
 * @version: 1.1 (12.09.2011)
 * @requires jQuery v1.2.2 or later 
 * @author Krisztian Horvath
 * All Rights Reserved, use only in freshline Templates or when Plugin bought at Envato ! 
**/




(function($,undefined){	
	
	
	
	////////////////////////////
	// THE PLUGIN STARTS HERE //
	////////////////////////////
	
	$.fn.extend({
	
		
		// OUR PLUGIN HERE :)
		swapme: function(options) {
	
		
			
		////////////////////////////////
		// SET DEFAULT VALUES OF ITEM //
		////////////////////////////////
		var defaults = {	
			
		};
		
		options = $.extend({}, $.fn.swapme.defaults, options);
					

		return this.each(function() {
					
			//PUT THE BANNER HOLDER IN A VARIABLE
			var container = $(this);
			
			// OPTIONS 
			var opt=options;	

			$('body').find('.cont_2').each(function(i) {
								var $item=$(this);
								
								$item.css({'display':'none','opacity':'0.0'});
								
							});			
			
			var button=$('body').find('#more_button');
			button.hover(
				function() {
					var $this=$(this);
					if ($this.hasClass("open")) {
						$this.css({'background-position':'left bottom'});
					} else {
						$this.css({'background-position':'right bottom'});
					}
				},
				function() {
					var $this=$(this);
					if ($this.hasClass("open")) {
						$this.css({'background-position':'left top'});
					} else {
						$this.css({'background-position':'right top'});
					}
				
				});
				
				
			 button.click(function() {
					var $this=$(this);
					
					if ($this.hasClass("open")) {
							$this.removeClass('open');
							$this.css({'background-position':'right bottom'});
							$('body').find('.cont_1').each(function(i) {
								var $item=$(this);
								setTimeout(
									function() {		
										$item.css({'display':'block'});
										$item.animate({'opacity':'1.0'},{duration:600});
										$('body').find('.cont_2').css({'display':'none'});
									},1000 + (i*240));
							});
							
							$('body').find('.cont_2').each(function(i) {
								var $item=$(this);
								setTimeout(
									function() {
										$item.animate({'opacity':'0.0'},{duration:600});
									},i*240);
							});
					} else {
					
							$('body').find('.cont_1').each(function(i) {
								var $item=$(this);
								setTimeout(
									function() {
										$item.animate({'opacity':'0.0'},{duration:600});
									},i*240);
							});
							$('body').find('.cont_2').each(function(i) {
								var $item=$(this);
								setTimeout(
									function() {
										$('body').find('.cont_1').css({'display':'none'});
										$item.css({'display':'block'});
										$item.animate({'opacity':'1.0'},{duration:600});
										
									},1000 + (i*240));
							});
							$this.addClass('open');
							$this.css({'background-position':'left bottom'});
					}
					
					
					
			 });
		})
	}
})


		///////////////////////////////
		//  --  LOCALE FUNCTIONS -- //
		///////////////////////////////
		
		
				
})(jQuery);			

				
			

			   