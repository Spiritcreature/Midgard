<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Le midgard est un bar à thème mediéval situé à Troyes. Vous y trouverez toutes sortes de boissons.">
	<meta name="keywords" content="midgard, troyes, médiaval, bar, boissons médiévale">
	
	<!-- Meta Facebook-->
	<meta property="og:title" content="<?= $title ?>" />
	<meta property="og:url" content="https://www.le-midgard.fr/projet5/index.php"/>
	<meta property="og:site_name" content="Le Midgard"/>
	<meta property="og:description" content="Le midgard est un bar à thème mediéval situé à Troyes. Ayant pour décors principal les vikings."/>
	<meta property="og:image" content="http://le-midgard.fr/logo.jpg"/>
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!--My CSS-->
	<link rel="stylesheet" href="public/css/style.css" />
	  
	<link rel="shortcut icon" href="yggdrasil.jpg"/>

    <title><?= $title ?></title>
  </head>
  <body>
	  <div class="container">
		  <header>
			  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
				  </button>
				  <a href="#"><img class="navbar-brand" src="public/img/baniere.jpg" alt="Logo du bar Midgard"></a>
				  <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
					  <?php if (!isset($_SESSION['pseudo'])){ ?>
					  <ul class="navbar-nav nav-pills mb-3" id="pills-tab" role="tablist">
						  <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
						  <li class="nav-item"><a class="nav-link" href="index.php?action=drinks">Boissons</a></li>
						  <li class="nav-item"><a class="nav-link" href="index.php?action=services">Services</a></li>
						  <li class="nav-item"><a class="nav-link" href="index.php?action=reservations">Reservation</a></li>
						  <li class="nav-item"><a class="nav-link" href="index.php?action=contact">Contact</a></li>
					  </ul>
					  <?php }else{ ?>
					  <ul class="navbar-nav">
						  <li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Gestion carte</a>
							  <div class="dropdown-menu">
								  <a class="dropdown-item" href="index.php?action=goToAdd">Ajouter une nouvelle boisson</a>
								  <a class="dropdown-item" href="index.php?action=editMap">Remettre / Retirer une boisson</a>
							  </div>
						  </li>
						  <li class="nav-item"><a class="nav-link" href="index.php?action=drinks">Reservations</a></li>
						  <li class="nav-item"><a class="nav-link" href="index.php?action=services">TO DO</a></li>
					  </ul>
					  <?php } ?>
				  </div>
			  </nav>
		  </header>
		  <div class="container content">
				  <?= $content ?>
		  </div>
	  </div>
	  <footer>
		  <div class="container">
			  <div class="row down">
				  <div class="col-xs-12 col-md-1 text-center">
					  <a class="btn-floating btn-lg btn-facebook" ><i class="fab fa-facebook"></i></a>
				  </div>
				  <div class="col-xs-12 col-md-1 text-center">
					  <a class="btn-floating btn-lg btn-instagram" ><i class="fab fa-instagram"></i></a>
				  </div>
				  <div class="col-xs-12 col-md-8 text-center">© 2018 Copyright: Alexis Dizet -
					  <?php if (!isset($_SESSION['pseudo'])){ ?>
					  <a class="admin" href="index.php?action=authentification">Administration</a>
					  <?php }else{ ?>
					  <a class="admin" href="index.php?action=logout">Déconnexion</a>
					  <?php } ?>
				  </div>
			  </div>
	  </footer>
	<!-- Optional JavaScript -->
	  
    <!-- jQuery first,then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="public/js/appinit.js"></script>
	<script src="public/js/button.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>