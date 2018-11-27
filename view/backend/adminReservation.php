<?php
$title = "Gestion des réservations";
ob_start();
?>

<div class="row">
	<div class="table-responsive-sm">
		<table class="table">
			<thead class="thead-dark">
				<th scope="col">Date</th>
				<th scope="col">Nom</th>
				<th scope="col">Email</th>
				<th scope="col">Téléphone</th>
				<th scope="col">Type de réservation</th>
				<th scope="col">Nombre de personnes</th>
				<th scope="col">Commentaire</th>
				<th scope="col">Supprimer</th>
			</thead>
			<tbody>
				<?php foreach ($events as $event)
					{ 
				?>
				<tr>
					<td><?= $event->reservationDate() ?></td>
					<td><?= $event->name() ?></td>
					<td><?= $event->email() ?></td>
					<td><?= $event->phone() ?></td>
					<td><?= $event->catEvent() ?></td>
					<td><?= $event->nbPerson() ?></td>
					<td><?= $event->comment() ?></td>
					<td><a  class="btn btn-danger" href="index.php?action=deleteEvent&amp;id=<?= $event->id() ?>">Supprimer</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="col-md-12"></div>
</div>


<?php

$content = ob_get_clean();
require( 'view/template.php' );
?>