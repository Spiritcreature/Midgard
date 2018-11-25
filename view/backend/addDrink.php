<?php
$title = "Ajouter une boisson";
ob_start();
?>
<section>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<h3>Ajouter une boisson à la carte : </h3>
			<form action="index.php?action=addDrink" method="post" class="form-group" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Nom de la boisson :</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom..."/>
				</div>
				<div class="form-group">
					<label for="desc">Description :</label>
					<textarea name="desc" id="desc" class="form-control" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="file">Importer une photo si non présente (JPG,PNG, max 1mo) :</label>
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
</section>
<?php

$content = ob_get_clean();
require( 'view/template.php' );
?>