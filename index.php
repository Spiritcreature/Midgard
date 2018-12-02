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
				login($_POST['login'],$_POST['password']);
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
					removeDrink($_POST['id']);
				break;
			case ($_GET['action'] == 'reset'):
					resetDrink($_POST['id']);
				break;
			case ($_GET['action'] == 'addDrink'):
					addDrink($_POST['name'], $_POST['desc'], $_FILES['image']['name'],$_POST['cat'],$_FILES['image']['error'],$_FILES['image']['tmp_name'], $_FILES['image']['size']);
				break;
			case ($_GET['action'] == 'addEvent'):
					addEvent($_POST['name'], $_POST['phone'], $_POST['mail'], $_POST['category'], $_POST['nbperson'], $_POST['comment'], $_POST['datepicker']);
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
			case ($_GET['action'] == 'selectEvent'):
				getModifyEvent($_GET['id']);
				break;
			case ($_GET['action'] == 'modifEvent'):
				modifEvent($_GET['id'],$_POST['datepicker'],$_POST['phone'],$_POST['nbperson'],$_POST['comment']);
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


