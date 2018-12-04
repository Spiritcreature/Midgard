	<?php 
		$title = "Les boissons du midgard";
		ob_start(); 
	?>
		<div class="row justify-content-center">
			<div class="col-md-8 text-center title-drink">
				<div class="animate four">
					<span>B</span><span>o</span><span>i</span><span>s</span><span>s</span><span>o</span><span>n</span><span>s</span> &nbsp;
					<span>M</span><span>é</span><span>d</span><span>i</span><span>é</span><span>v</span><span>a</span><span>l</span><span>e</span><span>s</span>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($allDrinks as $drink){ 
			if ($drink->category() === 'Médiévale' && $drink->rem()== 0){
			?>
			<div class="card text-white bg-color mb-3" style="max-width: 15rem;">
				<div class="card-header text-center"><?= $drink->name() ?></div>
				<img class="card-img-top img-bottle" src="public/img/<?= $drink->image() ?>" alt="Photo de la boisson <?= $drink->name() ?>">
				<div class="card-body">
					<p class="card-text"><?= $drink->description() ?></p>
				</div>
			</div>
			<?php }} ?>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8 text-center title-drink">
				<div class="animate four">
					<span>B</span><span>i</span><span>è</span><span>r</span><span>e</span><span>s</span>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			
			<?php foreach ($allDrinks as $drink){ 
			if ($drink->category() === 'Bière'  && $drink->rem()== 0){
			?>
			<div class="card text-white bg-color mb-3" style="max-width: 15rem;">
				<div class="card-header text-center"><?= $drink->name() ?></div>
				<img class="card-img-top img-bottle" src="public/img/<?= $drink->image() ?>" alt="Photo de la boisson <?= $drink->name() ?>">
				<div class="card-body">
					<p class="card-text"><?= $drink->description() ?></p>
				</div>
			</div>
			<?php }} ?>
			
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8 text-center title-drink">
				<div class="animate four">
					<span>S</span><span>a</span><span>n</span><span>s</span> &nbsp;
					<span>A</span><span>l</span><span>c</span><span>o</span><span>o</span><span>l</span>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($allDrinks as $drink){ 
			if ($drink->category() === 'Sans Alcool'  && $drink->rem()== 0){
			?>
			<div class="card text-white bg-color mb-3" style="max-width: 15rem;">
				<div class="card-header text-center"><?= $drink->name() ?></div>
				<img class="card-img-top img-bottle" src="public/img/<?= $drink->image() ?>" alt="Photo de la boisson <?= $drink->name() ?>">
				<div class="card-body">
					<p class="card-text"><?= $drink->description() ?></p>
				</div>
			</div>
			<?php }} ?>
		</div>
	<?php

	$content = ob_get_clean();
		require('view/template.php'); ?>