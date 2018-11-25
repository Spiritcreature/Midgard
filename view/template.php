<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Le midgard est un bar à thème mediéval situé à Troyes. Vous y trouverez toutes sortes de boissons.">
	<meta name="keywords" content="midgard, troyes, médiaval, bar, boissons médiévale">
	<meta property="fb:admins" content="ApCvQBhm4MM"/>
	<!-- Meta Facebook-->
	<meta property="og:title" content="<?= $title ?>"/>
	<meta property="og:url" content="https://www.le-midgard.fr/projet5/index.php"/>
	<meta property="og:site_name" content="Le Midgard"/>
	<meta property="og:description" content="Le midgard est un bar à thème mediéval situé à Troyes. Ayant pour décors principal les vikings."/>
	<meta property="og:image" content="http://le-midgard.fr/logo.jpg"/>
	<link rel="shortcut icon" href="yggdrasil.jpg"/>


	<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Nanum+Brush+Script" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--My CSS-->
	<link rel="stylesheet" href="public/css/style.css"/>

	<!-- CSS jquery ui -->
	<link href="public/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">


	<title>
		<?= $title ?>
	</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 left"></div>
			<div class="col-md-8">
				<header>
					<nav class="navbar navbar-expand-lg navbar-dark">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
					
						<a href="index.php"><img class="navbar-brand" src="public/img/logo.jpg" alt="Logo du bar Midgard"></a>
						<div class="collapse navbar-collapse justify-content-center" id="menu">

							<ul class="navbar-nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item"><a class="nav-link nav-menu" href="index.php?action=drinks">Boissons</a>
								</li>
								<li class="nav-item"><a class="nav-link nav-menu" href="index.php?action=actu">Nos Guerriers</a>
								</li>
								<li class="nav-item"><a class="nav-link nav-menu" href="index.php?action=reservations">Réserver</a>
								</li>
								<li class="nav-item"><a class="nav-link nav-menu" href="index.php?action=contact">Infos Pratiques</a>
								</li>
							</ul>
							<?php if (isset($_SESSION['pseudo'])){ ?>
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle admin-link" data-toggle="dropdown" href="" aria-haspopup="true" aria-expanded="false">Administration </a>
									<div class="dropdown-menu">
										<a class="dropdown-item  nav-menu" href="index.php?action=goToAdd">Ajouter</a>
										<a class="dropdown-item  nav-menu" href="index.php?action=editMap">Remettre / Retirer</a>
										<a class="dropdown-item  nav-menu" href="index.php?action=adminReserView">Réservation</a>
										<a class="dropdown-item  nav-menu" href="index.php?action=toDoList">Pense bête</a>
										<a class="dropdown-item  nav-menu" href="index.php?action=logout">Déconnexion</a>
									</div>
							</ul>
							<?php } ?>
						</div>
					</nav>
				</header>
				<section class="container-fluid">
					<?= $content ?>
				</section>
				<footer>
					<div class="row down">
						<div class="col-xs-12 col-md-2 text-center">
							<div class="fb-like" data-href="https://www.facebook.com/Midgard-534627433615465/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
						</div>
						<div class="col-xs-12 col-md-9 text-center">© 2018 Copyright: Alexis Dizet -
							<?php if (!isset($_SESSION['pseudo'])){ ?>
							<a class="admin" href="index.php?action=authentification">Administration</a>
							<?php } ?>
						</div>
					</div>
				</footer>
			</div>
			<div class="col-md-2 right"></div>
		</div>
		<!-- Optional JavaScript -->

		<!-- jQuery first,then Popper.js, then Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<script src="public/js/appinit.js"></script>
		<script src="public/js/button.js"></script>
		<script src="public/js/datepicker.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
			( function ( d, s, id ) {
				var js, fjs = d.getElementsByTagName( s )[ 0 ];
				if ( d.getElementById( id ) ) return;
				js = d.createElement( s );
				js.id = id;
				js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2&appId=226230584617355&autoLogAppEvents=1';
				fjs.parentNode.insertBefore( js, fjs );
			}( document, 'script', 'facebook-jssdk' ) );
		</script>
	</div>
</body>
</html>