<?php
session_start();

use Dizet\Midgard\Controller\FrontController;
use Dizet\Midgard\Controller\BackController;
use Dizet\Midgard\Model\Autoloader;

Autoloader::register();


if (isset($_GET['action']) && !empty($_GET['action']))
	{
		switch ($_GET['action'])
		{
			case ($_GET['action'] == 'drinks'):
				$frontController = new FrontController();
				$drink = $frontController->drinks();
				break;
			case ($_GET['action'] == 'actu'):
				require('view/frontend/avis.php');
				break;
			case ($_GET['action'] == 'reservations'):
				$frontController = new FrontController();
				$reservation = $frontController->reservation();
				break;
			case ($_GET['action'] == 'contact'):
				$frontController = new FrontController();
				$contact = $frontController->contact();
				break;
			case ($_GET['action'] == 'authentification'):
				$frontController = new FrontController();
				$auth = $frontController->auth();
				break;
			case ($_GET['action'] == 'wrongUser'):
				$frontController = new FrontController();
				$wrongUser = $frontController->wrongUser();
				break;
			case ($_GET['action'] == 'login'):
				$frontController = new FrontController();
				$login = $frontController->login($_POST['login'],$_POST['password']);
				break;
			case ($_GET['action'] == 'logout'):
				$frontController = new FrontController();
				$logout = $frontController->logout();
				break;
			case ($_GET['action'] == 'goToAdd'):
				require('view/backend/addDrink.php');
				break;
			case ($_GET['action'] == 'editMap'):
				$backController = new BackController();
				$editMap = $backController->editMap();
				break;
			case ($_GET['action'] == 'remove'):
				$backController = new BackController();
				$remove = $backController->removeDrink($_POST['id']);
				break;
			case ($_GET['action'] == 'reset'):
				$backController = new BackController();
				$reset = $backController->resetDrink($_POST['id']);
				break;
			case ($_GET['action'] == 'addDrink'):
				$backController = new BackController();
				$addDrink = $backController->addDrink($_POST['name'], $_POST['desc'], $_FILES['image']['name'],$_POST['cat'],$_FILES['image']['error'],$_FILES['image']['tmp_name'], $_FILES['image']['size']);
				break;
			case ($_GET['action'] == 'addEvent'):
				$backController = new BackController();
				$addEvent = $backController->addEvent($_POST['name'], $_POST['phone'], $_POST['mail'], $_POST['category'], $_POST['nbperson'], $_POST['comment'], $_POST['datepicker']);
				break;
			case ($_GET['action'] == 'adminReserView'):
				$backController = new BackController();
				$adminReservation = $backController->adminReservation();
				break;
			case ($_GET['action'] == 'deleteEvent'):
				$backController = new BackController();
				$deleteEvent = $backController->deleteEvent($_GET['id']);
				break;
			case ($_GET['action'] == 'toDoList'):
				$backController = new BackController();
				$message = $backController->getComment();
				break;
			case ($_GET['action'] == 'addMessage'):
				$backController = new BackController();
				$addMessage = $backController->newComment($_POST['comment']);
				break;
			case ($_GET['action'] == 'deleteComment'):
				$backController = new BackController();
				$deleteComment = $backController->delComment($_GET['id']);
				break;
			case ($_GET['action'] == 'selectEvent'):
				$backController = new BackController();
				$selectEvent = $backController->getModifyEvent($_GET['id']);
				break;
			case ($_GET['action'] == 'modifEvent'):
				$backController = new BackController();
				$modifEvent = $backController->modifEvent($_GET['id'],$_POST['datepicker'],$_POST['phone'],$_POST['nbperson'],$_POST['comment']);
				break;
			default:
				header('HTTP/1.0 404 Not Found');
				include('view/frontend/error-404.php');
				exit();
		}
	}
	else
	{
		$frontController= new FrontController();
		$index = $frontController->welcome();
	}


