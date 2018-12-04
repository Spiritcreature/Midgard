	<?php 
		$title = "Contacter le midgard";
		ob_start(); 
	?>

	<div class="row justify-content-center">
		<div class="col-md-10">
			<img class="img-fluid rounded" alt="Responsive image" src="public/img/baniere01.jpg" alt="Banière du Midgard">
		</div>
		<div class="col-md-7">
			<div data-component-maps="" style="min-height:270px;min-width:240px;position:relative">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.141441104446!2d4.07802881595707!3d48.300131079236756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee98f131219e59%3A0xc57f702e96e40e6d!2sRue+de+la+Cit%C3%A9%2C+10000+Troyes!5e0!3m2!1sfr!2sfr!4v1542290865311" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-white bg-color mb-5" style="max-width: 20rem;">
					<div class="opening-time four">
						<span>N</span><span>o</span><span>s</span> &nbsp;
						<span>H</span><span>o</span><span>r</span><span>a</span><span>i</span><span>r</span><span>e</span><span>s</span>
					</div>
				<div class="card-body">
					<div class="card-text">
						<p>Lundi et Dimanche : Fermé</p>
						<p>Mardi au Jeudi : 17h à minuit</p>
						<p>Vendredi et samedi : 17h à 1h</p>
						<address>
							<div class="opening-time four">
								<span>A</span><span>d</span><span>d</span><span>r</span><span>e</span><span>s</span><span>s</span><span>e</span>
							</div>
							Rue de la Cité<br>
							10000, Troyes<br>
							<i class="fas fa-phone"></i> : 00.00.00.00.00
							<a href="mailto:midgardconcept@gmail.com">midgardconcept@gmail.com</a>
						</address>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php

	$content = ob_get_clean();
		require('view/template.php'); ?>