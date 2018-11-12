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
				require('view/frontend/services.php');
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
			case ($_GET['action'] == 'goToAdd'):
				require('view/backend/addDrink.php');
				break;
			case ($_GET['action'] == 'editMap'):
				editMap();
				break;
				/*
			case ($_GET['action'] == 'delete'):
				delete($_POST['id']);
				break;
				*/
			case ($_GET['action'] == 'remove'):
				if (!empty($_POST['id']))
				{
					removeDrink($_POST['id']);
				}
				else
				{
					echo('Champ vide');
				}
				break;
			case ($_GET['action'] == 'reset'):
				if (!empty($_POST['id']))
				{
					resetDrink($_POST['id']);
				}
				else
				{
					echo('Champ vide');
				}
				break;
			case ($_GET['action'] == 'addDrink'):
				if(empty($_POST['name']))
				{
					echo('Nom vide.');
				}
				if(empty($_POST['desc']))
				{
					echo('Description vide.');
				}
				if($_POST['cat'] === 'Catégorie...' )
				{
					echo('Catégorie vide.');
				}
				if($_FILES['image']['error'] > 0)
				{
					echo('Image vide');
				}
				else
				{
					upload($_FILES['image']['name'],$_FILES['image']['type'],$_FILES['image']['size'],$_FILES['image']['tmp_name'],$_FILES['image']['error']);
					addDrink($_POST['name'], $_POST['desc'], $_FILES['image']['name'],$_POST['cat']);
					
					header('Location: index.php?action=addDrink');
				}
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


