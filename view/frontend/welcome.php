<?php 
	$title = "Le midgard";
	ob_start(); 
?>

	<div class="row justify-content-center">
		<div class="col-md-10">
			<p>Ohhh toi noble combatant perdu devant les portes du <strong>Midgard</strong>, tu te situes dans la ville de <strong>Troyes</strong> unique en sont genre et chargée d'histoire d'un autre temps. Vous aimez cette ville ça tombe bien nous aussi ! Troyes et son architecture moyenâgeuse offrent un cadre atipique parfait pour accueillir les portes du <b>Midgard.</b></p>
			<p>Vous avez combattu toute la journée ? Vous avez quitté votre champ de bataille ? Marre de tous ces guerriers qui font sonner le fer de leurs armes ? Rendez-vous dans les terres du mileu, Le <b>Midgard</b>. Où l'odeur du bois et des épices combleront vos sens, dans cette taverne ou la bonne hummeur et l'allégresse coulent à flot. Vous pourrez vous détendre et vous réunir autour d'une bonne chope de <strong>bière</strong>, d'<strong>hypocras</strong>, d'<strong>hydromel</strong> et d'autres liquides dont plusieurs <strong>guerriers</strong> en ont perdu la raison. Ohhh toi fier guerrier viens si tu l'oses passer les portes du Midgard et t'attabler avec tes compagnons d'armes. Nous t'attendons de pied ferme et au contraire de tes ennemies qui eux usent de leurs haches, nous leverons nos cornes remplies de doux breuvage de la victoire.</p>
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
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="public/img/cocktail.jpg" alt="Third slide">
					</div>
				</div>
			</div>			
		</div>
	</div>
<?php
	$content = ob_get_clean();
	require('view/template.php');
?>