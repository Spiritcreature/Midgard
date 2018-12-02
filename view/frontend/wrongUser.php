<?php 
	$title = "Contacter le midgard";
	ob_start(); 
?>

	<div class="row justify-content-center">
		<div class="col-xs-6 col-sm-6 col-md-6"><img class="mjolnir" src="public/img/Mjolnir.png" alt="mjolnir affichant un message mauvais nom d'utilisateur ou mot de passe."</div>
	</div>

<?php

$content = ob_get_clean();
	require('view/template.php'); ?>