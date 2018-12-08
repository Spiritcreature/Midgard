<?php


namespace Model\Backend;


use Model\Database;
use Model\Backend\Message;
use Model\Autoloader;
use \PDO;

require_once('Model/Autoload.php');
Autoloader::register();



class MessageManager extends \Database
{
	
	public function addComment($comment)
	{	
		$com = htmlspecialchars($comment);
		
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO message (comment, creationDate) VALUES(?, NOW())');
		$req->execute(array($com));
	}
	
	public function getMessage()
	{
		$message=[];
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM message');
		while ($data = $req->fetch(PDO::FETCH_ASSOC))
		{
			$message[]= new Message($data);
		}
		
		return $message;
	}
	
	public function deleteComment($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM message WHERE id= :id');
		$req->execute(array('id'=>$id));
	}
}