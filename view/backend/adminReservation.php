<?php
$title = "Gestion des réservations";
ob_start();
if (isset($_SESSION['pseudo'])){
	if (isset($_SESSION['flash']) && !empty($_SESSION['flash']) )
	{  
		foreach ($_SESSION['flash'] as $key => $value):
	?> 
			<div class="popup-<?= $key ?>">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-right" id="close" >
							<i class="fas fa-times"></i>
							<p><?= $value ?></p>
						</div>
					</div>
				</div>
			</div>
	<?php
		endforeach;
	}
	unset($_SESSION['flash']);
?>

<div class="row justify-content-center">
	<?php 
		foreach ($events as $event)
		{ 
	?>
	<div class="col-md-6">
		<table class="table">
			<thead class="thead-dark">
				<th scope="col">Réservation de <?= $event->name() ?></th>
			</thead>
			<tbody>
				<tr>
					<td>
						<p>Pour le : <?= $event->reservationDate() ?></p>
						<p>Au nom de : <?= $event->name() ?></p>
						<p>@ : <?= $event->email() ?></p>
						<p>Tel : 0<?= $event->phone() ?></p>
						<p>Pour : <?= $event->catEvent() ?></p>
						<p>Nb personnes : <?= $event->nbPerson() ?></p>
						<p>Commentaire : <?= $event->comment() ?></p>
						<a class="btn btn-danger" href="index.php?action=deleteEvent&amp;id=<?= $event->id()?>#down">Supprimer</a>
						<a class="btn btn-secondary" href="index.php?action=selectEvent&amp;id=<?= $event->id()?>" id="modify">Modifier</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
		}
	?>
</div>
<div id="down"></div>

<?php
}else {
	header('Location: index.php?action=authentification');
}
$content = ob_get_clean();
require( 'view/template.php' );
?>