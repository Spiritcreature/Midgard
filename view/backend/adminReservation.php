<?php
$title = "Gestion des réservations";
ob_start();
?>

<div class="row">
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
						<p>Tel : <?= $event->phone() ?></p>
						<p>Pour : <?= $event->catEvent() ?></p>
						<p>Nb personnes : <?= $event->nbPerson() ?></p>
						<p>Commentaire : <?= $event->comment() ?></p>
						<a  class="btn btn-danger" href="index.php?action=deleteEvent&amp;id=<?= $event->id()?>#down">Supprimer</a>
						<a  class="btn btn-secondary" href="index.php?action=deleteEvent&amp;id=<?= $event->id()?>#down">Modifier</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
		}
	?>
</div>


<?php

$content = ob_get_clean();
require( 'view/template.php' );
?>