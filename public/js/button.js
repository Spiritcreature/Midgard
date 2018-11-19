var Button = {
	
	
	init : function()
	{
		this.selectRemove();
		this.selectReset();
	},
	
	
	
	selectRemove : function()
	{

		$('#selectRemove').on('change', function() {
			if (this.value === 'Médiévale')
				{
					$('#form-beer-rem ,#form-alcohol-free-rem').hide();
					$('#form-mediv-rem').show();
				}
				else if(this.value === 'Sans alcool')
				{
					$('#form-beer-rem,#form-mediv-rem').hide();
					$('#form-alcohol-free-rem').show();		 
				}
				else if(this.value === 'Bière')
				{
					$('#form-alcohol-free-rem,#form-mediv-rem').hide();
					$('#form-beer-rem').show();		 
				}
		  });
	},
	
	selectReset : function()
	{
		$('#selectReset').on('change', function(){
			if (this.value === 'Médiévale')
				{
					$('#form-beer-res ,#form-alcohol-free-res').hide();
					$('#form-mediv-res').show();
				}
				else if(this.value === 'Sans alcool')
				{
					$('#form-beer-res,#form-mediv-res').hide();
					$('#form-alcohol-free-res').show();		 
				}
				else if(this.value === 'Bière')
				{
					$('#form-alcohol-free-res,#form-mediv-res').hide();
					$('#form-beer-res').show();		 
				}
		  });	
	},
	
};