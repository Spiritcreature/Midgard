<?php 
	$title = "Contacter le midgard";
	ob_start(); 
?>
<section>
	<div class="row">
		<div class="col-md-12">
			<legend><img src="public/img/baniere.jpg" alt="photo du logo du bar Midgard"></legend>
			<table>
				<tr>
					<td>Horaires d'ouverture : </td>
					<td> </td>
				</tr>
				<tr>
					<td>Lundi de 17h à minuit</td>
					<td>Vendredi de 17h à 1h00</td>
				</tr>
			</table>
		</div>
	</div>
</section>
<?php

$content = ob_get_clean();
	require('view/template.php'); ?>