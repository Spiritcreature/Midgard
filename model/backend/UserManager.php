<?php

namespace Model\Backend;

use Model\Database;
use Model\Backend\User;
use Model\Autoloader;
use \PDO;

require_once('Model/Autoload.php');
Autoloader::register();



class UserManager extends \Database
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
}