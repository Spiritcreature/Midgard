<?php 
	$title = "Les boissons du midgard";
	ob_start(); 
?>
<section>
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Boissons médiévales</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<h3>Hydromel</h3>
			<img class="img-bottle" src="public/img/hydromel-doux-75cl.jpg" alt="Photo de la boisson">
			<p>L'hydromel est  l'une des premières boissons alcoolisées mise au point par l'homme.  Miel fermenté dans de l'eau.
				Les premières productions d'hydromel remontent à 7000 av. J.-C., en Chine. On a une recette écrite d'Aristote en 350 av. J.-C. Chez les wicking, on buvait de l'hydromel dans des cornes, durant le festin des dieux. En grec ancien ὑδρόμελι/hudrómeli dérivé de ὕδωρ/húdôr (« eau »), et μέλι/méli (« miel »). En latin : hydromeli
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Bières</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<h3>Hydromel</h3>
			<img class="img-bottle" src="public/img/hydromel-doux-75cl.jpg" alt="Photo de la boisson">
			<p>L'hydromel est  l'une des premières boissons alcoolisées mise au point par l'homme.  Miel fermenté dans de l'eau.
				Les premières productions d'hydromel remontent à 7000 av. J.-C., en Chine. On a une recette écrite d'Aristote en 350 av. J.-C. Chez les wicking, on buvait de l'hydromel dans des cornes, durant le festin des dieux. En grec ancien ὑδρόμελι/hudrómeli dérivé de ὕδωρ/húdôr (« eau »), et μέλι/méli (« miel »). En latin : hydromeli
			</p>
		</div>
	</div>
</section>
<?php

$content = ob_get_clean();
	require('view/template.php'); ?>