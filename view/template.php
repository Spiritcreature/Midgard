<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
			  <nav class="navbar navbar-inverse">
				  <a href="#"><img class="navbar-brand" src="public/img/yggdrasil.jpg" alt="Logo du bar Midgard"></a>
				  <div class="container-fluid">
					  <div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
						  </button>
					  </div>
					  <div class="navbar-collapse collapse">
						  <ul class="nav navbar-nav navbar-right">
							  <li><a href="index.php">Accueil</a></li>
							  <li><a href="index.php?action=drinks">Boissons</a></li>
							  <li><a href="index.php?action=services">Services</a></li>
							  <li><a href="index.php?action=reservations">Reservation</a></li>
							  <li><a href="index.php?action=contact">Contact</a></li>
						  </ul>
					  </div>
				  </div>
			  </nav>
		  </header>
		  <div class="container-fluid content">
				  <?= $content ?>
			  </div>
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
				  <div class="col-xs-12 col-md-8 text-center">© 2018 Copyright: Alexis Dizet - <a class="admin" href="index.php?action=auth">Administration</a></div>
			  </div>
	  </footer>

	
	<!-- Optional JavaScript -->
	  
    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>