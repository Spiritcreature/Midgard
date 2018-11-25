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
				require('view/frontend/reservation.php');
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
		
				if (empty($_POST['datepicker']) || date('d/m/Y') < $_POST['datepicker'])
				{
					addMessage('wrong','Date invalide ou non remplie');
					header('Location: index.php?action=reservations');
				}
				elseif (empty($_POST['name']))
				{
					addMessage('wrong','Merci de renseigner votre nom');
					header('Location: index.php?action=reservations');
				}
				elseif (empty($_POST['phone']) || !preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['phone']) )
				{
					addMessage('wrong', 'Format de numéro invalide');
					header('Location: index.php?action=reservations');
				}
				elseif (empty($_POST['mail']) || !preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
				{
					addMessage('wrong', 'Adresse mail non valide');
					header('Location: index.php?action=reservations');
				}
				elseif (!isset($_POST['category']))
				{
					addMessage('wrong','Merci de renseigner le type de réservation.');
					header('Location: index.php?action=reservations');
				}
				elseif (!isset($_POST['nbperson']) || $_POST['nbperson']>= 10)
				{
					addMessage('wrong', 'Vous n\'avez pas choisi le nombre de personnes');
					header('Location: index.php?action=reservations');
				}
				elseif (empty($_POST['comment']) && $_POST['category'] == 'Autre')
				{
					addMessage('success','Vous avez sélectionné le choix autre, merci de préciser votre demande en commentaire.');
					header('Location: index.php?action=reservations');
				}
				else
				{
					addEvent($_POST['name'], $_POST['phone'], $_POST['mail'], $_POST['category'], $_POST['nbperson'], $_POST['comment'], $_POST['datepicker']);
				}
				break;
			case ($_GET['action'] == 'adminReserView'):
				adminReservation();
				break;
			case ($_GET['action'] == 'deleteEvent'):
				deleteEvent($_GET['id']);
				break;
			case ($_GET['action'] == 'toDoList'):
				getComment();
				break;
			case ($_GET['action'] == 'addMessage'):
				newComment($_POST['comment']);
				break;
			case ($_GET['action'] == 'deleteComment'):
				delComment($_GET['id']);
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


