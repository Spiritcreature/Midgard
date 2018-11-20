<?php 
	$title = "Reserver le MIdgard";
	ob_start(); 
?>

<section>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<p>Hormis le fait d'être un bar à thème. Nous organisons des soirées et vous proposons de reserver un coin du bar pour :</p>
			<ul>
				<li>Détente entreprise (Attention max 10 personnes).</li>
				<li>Enterrement de jeune guerrier(e) voulant poser les armes avant de s'unir.</li>
				<li>Réunion de clan pour fêter encore une année de bataille de plus dans votre vie.</li>
				<li>Autre (merci de nous le préciser et nous étudierons).</li>
			</ul>
			<p>Vous voulez réserver ? Complétez vite le formulaire ci-dessous et nous vous recontacterons.</p>
		</div>
		<div class="col-md-5">
			<fieldset>
				<legend>Réservation : </legend>
					<form class="form-group" method="post" action="">
						<div class="form-group">
							<label for="datepicker">Date : </label>
							<input type="text" id="datepicker" readonly="readonly"/>
						</div>
						<div class="form-group">
							<label for="reservation">Type de réservation : </label>
							<select id="reservation" name="reservation" class="form-control">
								<option value="" disabled selected>Faites votre choix...</option>
								<option value="1">Détente entreprise</option>
								<option value="2">Enterrement de vie de garçon / fille</option>
								<option value="3">Anniversaire</option>
								<option value="4">Autre (préciser la demande)</option>
							</select>
						</div>
						<div class="form-group">
							<label for="personne">Nombre de personnes :</label>
							<select id="reservation" name="reservation" class="form-control">
								<option value="" disabled selected>Faites votre choix...</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Nom : </label>
							<input id="name" name="name" type="text" placeholder="Nom prénom" class="form-control" required=""/>
						</div>
						<div class="form-group">
							<label for="phone">Téléphone :</label>
							<input id="phone" name="phone" type="tel" placeholder="Fixe ou portable" class="form-control" required=""/>
						</div>
						<div class="form-group">
							<label for="mail">Email :</label>
							<input id="mail" name="mail" type="email" placeholder="Ex: midgard@gmail.com" class="form-control" required=""/>
						</div>
						<div class="form-group">
							<label for="comment">Information complémentaire : </label>
							<textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Si choix 'Autre' merci de préciser."></textarea>
						</div>
						<div class="form-group">
							<label for="submit"></label>
							<button type="submit" id="submit" name="submit" class="btn btn-success">Reserver</button>
							<button type="reset" id="reset" name="reset" class="btn btn-danger">Effacer</button>
						</div>
					</form>
			</fieldset>
		</div>
	</div>
</section>

<?php

$content = ob_get_clean();
	require('view/template.php'); ?>