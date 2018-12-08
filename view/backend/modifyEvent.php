<?php
$title = "Gestion des réservations";
ob_start();
if (isset($_SESSION['pseudo'])){ 
?>

<div class="row justify-content-center">
<div class="col-md-8 modify-event">
	<div class="col-md-12 text-center">
		<h4>Modifier la réservation au nom de : <?= $mEvent->name() ?></h4>
	</div>
		<form class="form-group" method="post" action="index.php?action=modifEvent&amp;id=<?= $mEvent->id() ?>#submit">
			<div class="col-md-5">
				<label for="datepicker">Date : </label>
				<input type="text" id="datepicker" name="datepicker" class="form-control" rows="1" value="<?= $mEvent->reservationDate() ?>" required/>
			</div>
			<div class="col-md-5">
				<label for="phone">Téléphone :</label>
				<input type="text" id="phone" name="phone" class="form-control" rows="1" value="0<?= $mEvent->phone() ?>" required/>
			</div>
			<div class="col-md-5">
				<label for="nbperson">Nombre de personnes</label>
				<input type="text" id="nbperson" name="nbperson" class="form-control" rows="1" value="<?= $mEvent->nbPerson() ?>" required/>
			</div>
			<div class="col-m-5">
				<label for="comment">Information complémentaire : </label>
				<textarea class="form-control" id="comment" name="comment" rows="4"><?= $mEvent->comment() ?></textarea>
			</div>
			<div class="col-m-5">
				<label for="submit"></label>
				<button type="submit" id="submit" name="submit" class="btn btn-success">Valider</button>
			</div>
		</form>
	</div>
</div>
<?php
	
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

<?php
}else {
	header('Location: index.php?action=authentification');
}
$content = ob_get_clean();
require( 'View/template.php' );
?>