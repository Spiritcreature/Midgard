var Datepicker = {
	
	
	init : function()
	{
		this.active();
	},
	
	active : function()
	{
		$("#datepicker").datepicker({
			autoSize: true,
			monthNames: [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décember" ],
			dayNames:["Dimanche","Lundi", "Mardi", "Mercredi", "Jeudi","Vendredi" ,"Samedi"],
			dayNamesMin: [ "Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ],
			dateFormat: 'dd/mm/yy',
			minDate: '+1d',
			firstDay: 1,
			
			
			
		},$.datepicker.regional['fr']);

	},
	
	
	
};

