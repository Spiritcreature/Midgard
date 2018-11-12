<?php 
	$title = "Les boissons du midgard";
	ob_start(); 
?>
<section>
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Boissons médiévales</h1>
		</div>
	</div>
	<div class="row">
		<?php foreach ($allDrinks as $drink){ 
		if ($drink->category() === 'Médiévale'){
		?>
		<div class="col-md-offset-1 col-md-10">
			<h3><?= $drink->name() ?></h3>
			<img class="img-bottle" src="public/img/<?= $drink->image() ?>" alt="Photo de la boisson <?= $drink->name() ?>">
			<p><?= $drink->description() ?></p>
		</div>
		<?php }} ?>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Bières</h1>
		</div>
	</div>
	<div class="row">
		<?php foreach ($allDrinks as $drink){ 
		if ($drink->category() === 'Bière'){
		?>
		<div class="col-md-offset-1 col-md-10">
			<h3><?= $drink->name() ?></h3>
			<img class="img-bottle" src="public/img/<?= $drink->image() ?>" alt="Photo de la boisson">
			<p><?= $drink->description() ?></p>
		</div>
		<?php }} ?>
	</div>
</section>
<?php

$content = ob_get_clean();
	require('view/template.php'); ?>