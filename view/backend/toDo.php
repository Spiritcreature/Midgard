	<?php
	$title = "Ajouter un pense bête";
	ob_start();
	if (isset($_SESSION['pseudo'])){ 
	?>
		<div class="row justify-content-center">
			<div class="col-xs-12 col-sm-12 col-md-6 add-font">
				<form action="index.php?action=addMessage" method="post" class="form-group" enctype="multipart/form-data">
					<div class="form-group">
						<label for="comment">Ecrire un pense bête :</label>
						<textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enregistrer</button>
					</div>
				</form>
			</div>
		</div>
	<?php foreach ( $listComments as $comment ) {?>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<table class="table">
					<thead class="thead-dark">
						<th scope="col">Commentaire</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<p>Ajouté le : <?= $comment->creationDate() ?></p>
								<p><?= $comment->comment() ?></p>
								<a class="btn btn-danger" href="index.php?action=deleteComment&amp;id=<?= $comment->id() ?>">Supprimer</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}}else {
	header('Location: index.php?action=authentification');
	}
	$content = ob_get_clean();
	require( 'view/template.php' );
	?>