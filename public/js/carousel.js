var Carousel = {
	
	init: function(){
		this.option();
	},
	
	option: function(){
		$('.carousel').carousel({
			interval: 3000
		});
	},
};