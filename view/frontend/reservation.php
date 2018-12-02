<?php 
	$title = "Reserver le MIdgard";
	ob_start(); 
?>


	<div class="row justify-content-center">
		<div class="col-md-12">
			<p>Hormis le fait d'être un bar à thème, nous organisons aussi des soirées (costumées, murder, escape room...).  Vous pouvez aussi reserver un coin du bar pour un évènement particulier :</p>
			<ul>
				<li>Détente entreprise (Attention max 10 personnes).</li>
				<li>Enterrement de jeune guerrier(e) voulant poser les armes avant de s'unir.</li>
				<li>Réunion de clan pour fêter encore une année de bataille de plus dans votre vie.</li>
				<li>Autre (merci de nous le préciser et nous étudierons votre demande).</li>
			</ul>
			<p>Vous voulez réserver ? Complétez vite le formulaire ci-dessous et nous vous recontacterons.</p>
		</div>

		<div class="col-md-8">
			<fieldset>
				<legend>Réservation : </legend>
					<form class="form-group" method="post" action="index.php?action=addEvent#submit">
						<div class="form-group  col-md-5">
							<label for="datepicker">Date : </label>
							<input type="text" id="datepicker" name="datepicker" class="form-control" readonly="readonly" required/>
							<small id="passwordHelpBlock" class="form-text text-muted">
								(JJ/MM/AAAA)
							</small>
						</div>
						<div class="form-group col-md-5">
							<label for="name">Nom : </label>
							<input id="name" name="name" type="text" placeholder="Votre nom..." class="form-control" required/>
						</div>
						<div class="form-group col-md-5">
							<label for="phone">Téléphone :</label>
							<input id="phone" name="phone" type="tel" placeholder="Fixe ou portable" class="form-control" required/>
						</div>
						<div class="form-group col-md-5">
							<label for="mail">Email :</label>
							<input id="mail" name="mail" type="email" placeholder="exemple@gmail.com" class="form-control" required/>
						</div>
						<div class="row row-choice">
							<div class="col-md-5">
								<label for="category">Type de réservation : </label>
								<select id="category" name="category" class="form-control" required>
									<option value="" disabled selected>Faites votre choix...</option>
									<option value="Détente entreprise">Détente entreprise</option>
									<option value="Enterrement de vie de garçon / fille">Enterrement de vie de garçon / fille</option>
									<option value="Anniversaire">Anniversaire</option>
									<option value="Autre">Autre (préciser la demande)</option>
								</select>
							</div>
							<div class="col-md-5">
								<label for="nbperson">Nombre de personnes :</label>
								<select id="nbperson" name="nbperson" class="form-control" required>
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
						</div>
						<div class="form-group col-m-5">
							<label for="comment">Information complémentaire : </label>
							<textarea class="form-control" id="comment" name="comment" rows="4" ></textarea>
							<small id="passwordHelpBlock" class="form-text text-muted">(AUTRE: Merci de préciser)</small>
						</div>
						<div class="form-group col-m-5">
							<label for="submit"></label>
							<button type="submit" id="submit" name="submit" class="btn btn-success">Reserver</button>
							<button type="reset" id="reset" name="reset" class="btn btn-danger">Effacer</button>
						</div>
					</form>
			</fieldset>
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
		<?php endforeach;
			}
            unset($_SESSION['flash']);
        ?>
	</div>
<?php

$content = ob_get_clean();
	require('view/template.php'); ?>