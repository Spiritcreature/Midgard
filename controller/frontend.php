<?php

// Chargement des classes
require_once('model/backend/UserManager.php');
require_once('model/frontend/DrinkManager.php');


function welcome(){
	require('view/frontend/welcome.php');
}


function drinks(){
	$drinkmanager = new DrinkManager();
	$allDrinks = $drinkmanager->getDrinks();
		
	require('view/frontend/allDrinks.php');
}

function reservations(){
	
	require('view/frontend/reservation.php');
}

function contact(){
	
	require('view/frontend/contact.php');
}

function auth(){
	
	require('view/frontend/authentification.php');
}

function login($login, $password){
	$userManager = new UserManager();
	$loginExist = $userManager->getUser($login);

	if ($loginExist != false )
    {
        $userExist = new User($loginExist);
		
        if (password_verify($password, $userExist->password()) == true)
        {
            $_SESSION['pseudo'] = $userExist->login();
			$_SESSION['id'] = $userExist->id();
			header( 'Location: index.php?action=editMap' );
			exit();
			
        }else{
            addMessage('danger','Nom d\'utilisateur ou mot de passe incorrect !');
        }
    }else{
        addMessage('danger','Nom d\'utilisateur ou mot de passe incorrect !');
    }
	require('view/frontend/authentification.php');
}

function logout(){
	session_start();
	session_destroy();
	unset($_SESSION['pseudo']);
	header('location: index.php');
	exit();
}