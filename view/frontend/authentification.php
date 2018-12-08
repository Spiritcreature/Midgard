	<?php
		$title = "Authentification";
		ob_start();
	?>

	<?php 

	if (!isset($_SESSION['pseudo'])){ ?>
	<div class="row justify-content-center">
		<div class="col-md-5">
			<form action="index.php?action=login" method="post" class="form-group">
				<legend>Veuillez vous authentifier :</legend>
				<div class="form-group">
					<label for="login"> Nom d'utilisateur :</label>
					<input type="text" class="form-control" id="login" name="login" placeholder="Nom d'utilisateur..." required/>
				</div>
				<div class="form-group">
					<label for="password" >Mot de passe :</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe..." />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Connexion</button>
				</div>
			</form>
		</div>
	</div>
	<?php } ?>

	<?php
		$content = ob_get_clean();
		require('View/template.php');
	?>