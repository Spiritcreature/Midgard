<?php
$title = "Ajouter une boisson";
ob_start();
?>
<?php if (isset($_SESSION['pseudo'])){ ?>
	<div class="row justify-content-center">
		<div class="col-xs-12 col-sm-12 col-md-6 add-font">
			<h3>Ajouter une boisson à la carte</h3>
			<form action="index.php?action=addDrink#cat" method="post" class="form-group" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Nom de la boisson :</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom..."/>
				</div>
				<div class="form-group">
					<label for="desc">Description :</label>
					<textarea name="desc" id="desc" class="form-control" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="file">Importer une photo (jpg, jpeg, png, max 2mo) :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="2048576" />
					<input type="file" class="form-control-file" name="image" id="file">
				</div>
				<div class="form-group">
					<label for="cat">Type de Boisson : </label>
					<select class="form-control" id="cat" name="cat">
						<option selected >Catégorie...</option>
						<option>Bière</option>						
						<option>Médiévale</option>
						<option>Sans Alcool</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Enregistrer</button>
				</div>
			</form>
		</div>
	</div>
	<?php
	if ( isset( $_SESSION[ 'flash' ] ) && !empty( $_SESSION[ 'flash' ] ) ) {
		foreach ( $_SESSION[ 'flash' ] as $key => $value ):
			?>
		<div class="popup-<?= $key ?>">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-right" id="close">
						<i class="fas fa-times"></i>
						<p>
							<?= $value ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
		endforeach;
	}
	unset( $_SESSION[ 'flash' ] );
	?>

<?php
}else {
	header('Location: index.php?action=authentification');
}
$content = ob_get_clean();
require( 'View/template.php' );
?>