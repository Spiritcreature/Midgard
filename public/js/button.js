var Button = {
	
	
	init : function()
	{
		this.selectRemove();
		this.selectReset();
	},
	
	
	
	selectRemove : function()
	{
		document.getElementById('selectRemove').addEventListener('change', function(){
			if (this.value === 'Médiévale')
			{
				$('#form-beer-rem').css('display','none');
				$('#form-alcohol-free-rem').css('display','none');
				$('#form-mediv-rem').css('display','block');
			}
			else if(this.value === 'Sans alcool')
			{
				$('#form-beer-rem').css('display','none');
				$('#form-mediv-rem').css('display','none');
				$('#form-alcohol-free-rem').css('display','block');		 
			}
			else if(this.value === 'Bière')
			{
				$('#form-alcohol-free-rem').css('display','none');
				$('#form-mediv-rem').css('display','none');
				$('#form-beer-rem').css('display','block');		 
			}
		},false); 	
	},
	
	selectReset : function()
	{
		document.getElementById('selectReset').addEventListener('change', function(){
			if (this.value === 'Médiévale')
			{
				$('#form-beer-res').css('display','none');
				$('#form-alcohol-free-res').css('display','none');
				$('#form-mediv-res').css('display','block');
			}
			else if(this.value === 'Sans alcool')
			{
				$('#form-beer-res').css('display','none');
				$('#form-mediv-res').css('display','none');
				$('#form-alcohol-free-res').css('display','block');		 
			}
			else if(this.value === 'Bière')
			{
				$('#form-alcohol-free-res').css('display','none');
				$('#form-mediv-res').css('display','none');
				$('#form-beer-res').css('display','block');		 
			}
		},false); 	
	},
	
};