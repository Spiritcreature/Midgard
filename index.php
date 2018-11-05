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
			case ($_GET['action'] == 'authentification'):
				auth();
				break;
			case ($_GET['action'] == 'login'):
				if (empty($_POST['login'] && $_POST['password']))
				{
					header ( 'Location: index.php?action=authentification');
				}else
				{
					login($_POST['login'],$_POST['password']);
				}
				break;
			case ($_GET['action'] == 'logout'):
				logout();
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


