var Animation = {
	
	init: function(){
		this.optionCarousel();
	},
	
	optionCarousel: function(){
		$('.carousel').carousel({
			interval: 3000
		});
	},
};