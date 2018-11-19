<?php 
	$title = "Le midgard";
	ob_start(); 
?>

<section>
	<div class="row justify-content-center">
		<div class="col-md-8 justify-content-md-center">
			<p><strong>Troyes</strong> est une ville médiévale, riche d'histoire et dans un cadre unique.</p>
			<p>Vous aimez cette ville ça tombe bien nous aussi ! Venez vite au <strong>Midgard</strong> et découvrir ce <strong>Bar Troyens</strong> totalement unique où nous avons voulu reproduire un cadre convivial. Venez trinquer avec votre corne entre guerriers. Vous allez pouvoir rafraichir votre gosier d'hydromel, d'hypocras, de bieres fraiches et autres boissons...</p>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Lorem Ipsum</h5>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Lorem Ipsum</h5>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Lorem Ipsum</h5>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>			
		</div>
	</div>
</section>
<?php
	$content = ob_get_clean();
	require('view/template.php');
?>