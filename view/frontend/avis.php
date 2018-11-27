<?php 
	$title = "Les avis de nos Guerriers";
	ob_start();
?>
<section>
	<div class="row justify-content-center">
		<div class="col-xs-12 col-md-12">
			<div id="image-warrior" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner carousel-warrior">
					<div class="carousel-item active">
						<img class="d-block w-100" src="public/img/Viking-Shields.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="public/img/Viking_Winter.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="public/img/valhalla.jpg" alt="Third slide">
					</div>
				</div>
			</div>			
		</div>
	</div>
	<div class="col-xs-12 col-md-12">
		<div class="fb-page" data-href="https://www.facebook.com/alexis.dizet" data-tabs="timeline" data-width="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
		<div class="fb-comments" data-href="https://www.facebook.com/Midgard-534627433615465/" data-numposts="5" data-colorscheme="dark"></div>
	</div>
</section>
<?php

$content = ob_get_clean();
	require('view/template.php'); ?>