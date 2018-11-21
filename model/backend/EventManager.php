<?php

require_once('model/Database.php');
require_once('model/backend/Event.php');



class EventManager extends Database
{
	// récupération de l'utilisateur et du mot de passe
	public function newEvent($name, $phone, $mail, $cat, $nbperson, $comment, $date)
	{	
		$NewName = htmlspecialchars($name);
		$NewPhone = htmlspecialchars($phone);
		$NewMail = htmlspecialchars($mail);
		$NewCat = htmlspecialchars($cat);
		$nbpersons = htmlspecialchars($nbperson);
		$NewComment = htmlspecialchars($comment);
		$NewDate = htmlspecialchars($date);
		
				
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO events (name, phone, email, catEvent, nbPerson, comment, reservationDate ) VALUES ( ?, ?, ?, ?, ?, ?, ?)');
		$req->execute(array($NewName, $NewPhone, $NewMail, $NewCat, $nbpersons, $NewComment, $NewDate));
	}
}