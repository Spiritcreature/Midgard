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
	
	public function getEvents()
	{
		$events=[];
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM events');
		while ($data = $req->fetch(PDO::FETCH_ASSOC))
		{
			$events[] = new Event($data);
		}
		
		return $events;
	}
	
	public function delevent($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM events WHERE id = :id');
		$req->execute(array('id'=>$id));
	}
	
	public function selectModifEvent($id)
	{
				
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM events WHERE id = :id');
		$req->execute(array('id'=>$id));
		$event = $req->fetch();

		return  new Event ($event);
	}
	
	public function modifyEvent($id, $date,$phone, $nbPerson, $comment)		
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE events set reservationDate = :reservationDate, phone=:phone, nbPerson=:nbPerson, comment=:comment WHERE id= :id');
		$req->execute(array('id'=>$id, 'reservationDate'=>$date, 'phone'=>$phone, 'nbPerson'=>$nbPerson, 'comment'=>$comment));
	}
}