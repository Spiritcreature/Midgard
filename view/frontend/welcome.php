<?php ob_start(); ?>
<div class="container-fluid">
	<div class="row">
			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
			<p><strong>Troyes</strong> est une ville médiévale, riche d'histoire et dans un cadre unique.</p>
			<p>Vous aimez cette ville ça tombe bien nous aussi ! Venez vite au <strong>Midgard</strong> et découvrir ce <strong>Bar</strong> totalement unique où nous avons voulu reproduire le cadre de notre ville. Venez trinquer avec votre corne entre guerrier. Vous allez pouvoir rafraichir votre gosier d'hydromel, d'hypocras, de bieres fraiches et autres boissons...</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset1 col-md-10 col-md-offset-1 slide">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="First slide">
					</div>
					<div class="item">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="Second slide">
					</div>
					<div class="item">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="Third slide">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php

$content = ob_get_clean();
	require('view/template.php'); ?>