<?php
$title = "Editer la carte";
ob_start();
?>
<section>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 test">
			<h3>Retirer de la vente :</h3>
			<form method="post" action="index.php?action=remove" class="form-group">
				<div class="form-group">
					<label for="select">Type de boissons:</label>
					<select class="form-control" id="selectRemove">
						<option value="Médiévale">Médiévale</option>
						<option value="Bière">Bière</option> 
						<option value="Sans alcool">Sans alcool</option> 
					</select>
				</div>
				<div id="form-mediv-rem">
					<h3 class="panel-title">Boissons Médiévales :</h3>
					<?php 
					foreach ($allDrinks as $drink)
					{ 
						if ($drink->category() === 'Médiévale' && $drink->rem() == 0)
						{
					?>
					<div class="form-group">
						<input type="checkbox" id="id" name="id[]" value="<?= $drink->id() ?>">
						<label for="drink"><?= $drink->name() ?></label>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div id="form-beer-rem">
					<h3 class="panel-title">Bières :</h3>
					<?php 
					foreach ($allDrinks as $drink)
					{ 
						if ($drink->category() === 'Bière' && $drink->rem() == 0)
						{
					?>
					<div class="form-group">
						<input type="checkbox" id="id" name="id[]" value="<?= $drink->id() ?>">
						<label for="drink"><?= $drink->name() ?></label>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div id="form-alcohol-free-rem">
					<h3 class="panel-title">Boissons sans alcool :</h3>
					<?php 
					foreach ($allDrinks as $drink)
					{ 
						if ($drink->category() === 'Sans Alcool' && $drink->rem() == 0)
						{
					?>
					<div class="form-group">
						<input type="checkbox" id="id" name="id[]" value="<?= $drink->id() ?>">
						<label for="drink"><?= $drink->name() ?></label>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div class="form-group">
					<button class="btn btn-danger" type="submit">Retirer</button>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 test">
			<h3>Remettre en vente :</h3>
			<form method="post" action="index.php?action=reset" class="form-group">
				<div class="form-group">
					<label for="select">Quelle boissons ? :</label>
					<select class="form-control" id="selectReset">
						<option value="">Faites votre choix...</option>
						<option id="Médiévale">Médiévale</option>
						<option id="Bière">Bière</option>
						<option id="Sans alcool">Sans alcool</option>
					</select>
				</div>
				<div id="form-mediv-res">
					<h3 class="panel-title">Boissons Médiévales :</h3>
					<?php 
					foreach ($allDrinks as $drink)
					{ 
						if ($drink->category() === 'Médiévale' && $drink->rem() == 1)
						{
					?>
					<div class="form-group">
						<input type="checkbox" id="id" name="id[]" value="<?= $drink->id() ?>">
						<label for="drink"><?= $drink->name() ?></label>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div id="form-beer-res">
					<h3 class="panel-title">Bières :</h3>
					<?php 
					foreach ($allDrinks as $drink)
					{ 
						if ($drink->category() === 'Bière' && $drink->rem() == 1)
						{
					?>
					<div class="form-group">
						<input type="checkbox" id="id" name="id[]" value="<?= $drink->id() ?>">
						<label for="drink"><?= $drink->name() ?></label>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div id="form-alcohol-free-res">
					<h3 class="panel-title">Boissons sans alcool :</h3>
					<?php 
					foreach ($allDrinks as $drink)
					{ 
						if ($drink->category() === 'Sans Alcool' && $drink->rem() == 1)
						{
					?>
					<div class="form-group">
						<input type="checkbox" id="id" name="id[]" value="<?= $drink->id() ?>">
						<label for="drink"><?= $drink->name() ?></label>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Remettre</button>
				</div>
			</form>
		</div>
	</div>
</section>
<?php

$content = ob_get_clean();
require( 'view/template.php' );
?>