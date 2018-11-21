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
			case ($_GET['action'] == 'actu'):
				require('view/frontend/avis.php');
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
			case ($_GET['action'] == 'wrongUser'):
				require('view/frontend/wrongUser.php');
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
				elseif(empty($_POST['desc']))
				{
					echo('Description vide.');
				}
				elseif($_POST['cat'] === 'Catégorie...' )
				{
					echo('Catégorie vide.');
				}
				elseif($_FILES['image']['error'] > 0)
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
			case ($_GET['action'] == 'addEvent'):
				
				if (empty($_POST['datepicker']) || $_POST['datepicker'] <= date('d/m/Y'))
				{
					echo('Date invalide ou non remplie');
				}
				elseif (empty($_POST['name']) /*|| preg_match("#^[^ \w]#")*/)
				{
					echo('Merci de renseigner votre nom');
				}
				elseif (empty($_POST['phone']) || !preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['phone']) )
				{
					echo('Merci de renseigner votre numéro de téléphone');
				}
				elseif (empty($_POST['mail']) || !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['phone']))
				{
					echo('Merci de renseigner une adresse mail valide');
				}
				elseif (empty($_POST['category']))
				{
					echo('Merci de faire votre choix');
				}
				elseif (empty($_POST['nbperson']) || $_POST['nbperson']< 10)
				{
					echo('Merci de faire votre choix');
				}
				elseif ($_POST['category'] == 'Autre' && empty($_POST['comment']))
				{
					echo('Vous avez sélectionné le choix autre, merci de préciser votre demande');
				}
				else
				{
					addEvent($_POST['name'], $_POST['phone'], $_POST['mail'], $_POST['category'], $_POST['nbperson'], $_POST['comment'], $_POST['datepicker']);
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


