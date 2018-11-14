var Button = {
	
	
	init : function()
	{
		this.selectRemove();
		this.selectReset();
	},
	
	
	
	selectRemove : function()
	{
		$('#selectRemove').change(function(){
			
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