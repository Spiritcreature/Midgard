<?php 
	$title = "Le midgard";
	ob_start(); 
?>

	<div class="row justify-content-center">
		<div class="col-md-10">
			<p>Ôhhh vous nobles combattants perdus devant les portes du <strong>Midgard</strong>, vous vous situez dans la ville de <strong>Troyes</strong> unique en son genre et chargée d'histoire d'un autre temps. Vous aimez cette ville ça tombe bien nous aussi ! Troyes et son architecture moyenâgeuse offrent un cadre atypique, parfait pour accueillir les portes du <em>Midgard.</em>
			<p>Vous avez combattu toute la journée ? Vous avez quitté votre champ de bataille ? Marre de tous ces guerriers qui font sonner le fer de leurs armes ? Rendez-vous dans les terres du milieu du <em>Midgard</em>. Où l'odeur du bois et des épices combleront vos sens, dans cette taverne ou la bonne humeur et l'allégresse coulent à flot. Vous pourrez vous détendre et vous réunir autour d'une bonne chope de <strong>bière</strong>, d'<strong>hypocras</strong>, d'<strong>hydromel</strong> et d'autres liquides dont plusieurs <strong>guerriers</strong> en ont perdu la raison. Ôhhh vous fier guerriers venez si vous l'osez passer les portes du Midgard et vous attablez avec vos compagnons d'armes. Nous vous attendons de pied ferme et au contraire de vos ennemies, nous lèverons nos cornes remplies de doux breuvage pour fêter votre victoire.</p>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div id="carouselwelcome" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselwelcome" data-slide-to="0" class="active"></li>
					<li data-target="#carouselwelcome" data-slide-to="1"></li>
					<li data-target="#carouselwelcome" data-slide-to="2"></li>
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
				<a class="carousel-control-prev" href="#carouselwelcome" role="button" data-slide="prev" >
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href ="#carouselwelcome" role="button" data-slide="next" >
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>			
		</div>
	</div>
<!-- POPUP ADMIN -->
<?php
if ( isset( $_SESSION[ 'pseudo' ] ) ) {
?>
	<div class="col-md-8 popup-admin">
		<div class="container-popup">
			<div class="row">
				<div class="col-md-12 text-right" id="close" >
					<i class="fas fa-times"></i>
				</div>
				<div class="col-md-12 text-center">
					<div class="animate four">
						<span>B</span><span>i</span><span>e</span><span>n</span><span>v</span><span>e</span><span>n</span><span>u</span><span>e</span> &nbsp;
						<span>a</span><span>d</span><span>m</span><span>i</span><span>n</span><span>i</span><span>s</span><span>t</span><span>r</span><span>a</span><span>t</span><span>e</span><span>u</span><span>r</span><span>.</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8 text-center">
					<table class="table">
						<thead class="thead-dark">
							<th scope="col">Message du jour</th>
						</thead>
						<tbody>
							<?php foreach ($listComments as $alert){
							if (!empty($alert->comment())){ ?>
							<tr>
								<td><?= $alert->comment() ?></td>
							</tr>
							<?php }else{ ?>
							<tr>
								<td></td>
							</tr>
							<?php }} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>
<!-- POPUP ADMIN -->
<?php
	$content = ob_get_clean();
	require('view/template.php');
?>