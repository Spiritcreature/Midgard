<?php

namespace Controller;

use Model\Backend\UserManager;
use Model\Frontend\DrinkManager;
use Model\Backend\MessageManager;
use Model\Autoloader;
use Model\Backend\User;


// Chargement des classes
require_once('model/autoload.php');
Autoloader::register();


class FrontController {
	
	public function welcome(){
		$messageManager = new MessageManager();
		$listComments = $messageManager->getMessage();

		require('view/frontend/welcome.php');
	}

	public function reservation(){

		require('view/frontend/reservation.php');
	}

	public function drinks(){
		$drinkmanager = new DrinkManager();
		$allDrinks = $drinkmanager->getDrinks();

		require('view/frontend/allDrinks.php');
	}

	public function contact(){

		require('view/frontend/contact.php');
	}

	public function auth(){

		require('view/frontend/authentification.php');
	}

	public function login($login, $password){
		if (empty($login && $password))
					{
						header ( 'Location: index.php?action=authentification');
					}
		else
		{
			$userManager = new UserManager();
			$loginExist = $userManager->getUser($login);

			if ($loginExist != false )
			{
				$userExist = new User($loginExist);

				if (password_verify($password, $userExist->password()) == true)
				{
					$_SESSION['pseudo'] = $userExist->login();
					$_SESSION['id'] = $userExist->id();
					header( 'Location: index.php' );
					exit();

				}else{
					header('Location: index.php?action=wrongUser');
				}
			}
			else{
				header('Location: index.php?action=wrongUser');
			}
			require('view/frontend/authentification.php');
		}
	}

	public function wrongUser(){

		require('view/frontend/wrongUser.php');
	}


	public function logout(){
		session_start();
		session_destroy();
		unset($_SESSION['pseudo']);
		header('location: index.php');
		exit();
	}
	
}