<?php
session_start();
require('controller/frontend.php');
require('controller/backend.php');


if (isset($_GET['action']) && !empty($_GET['action']))
	{
		switch ($_GET['action'])
		{
			case ($_GET['action'] == 'drinks'):
				drinks();
				break;
			case ($_GET['action'] == 'services'):
				services();
				break;
			case ($_GET['action'] == 'reservations'):
				reservations();
				break;
			case ($_GET['action'] == 'contact'):
				contact();
				break;
			case ($_GET['action'] == 'auth'):
				auth();
				break;
			default:
				header('HTTP/1.0 404 Not Found');
				include('view/frontend/error-404.php');
				exit();
		}
	}
	else
	{
		welcome();
	}


