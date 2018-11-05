<?php

require_once('model/Database.php');
require_once('model/backend/User.php');



class UserManager extends Database
{
	// récupération de l'utilisateur et du mot de passe
	public function getUser($login)
	{	
		$pseudo = htmlspecialchars($login);
		
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM users WHERE login = :login' );
		$req->execute(array('login'=>$pseudo));
		$answer = $req->fetch(PDO::FETCH_ASSOC);
		
		return $answer;
	}
	
	// fonction pour se déloguer
	function logout()
{
	session_start();
	session_destroy();
	unset($_SESSION['pseudo']);
	header('location: index.php');
	exit();
}
}