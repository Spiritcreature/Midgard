<?php

namespace Model\Frontend;

use Model\Database;
use Model\Frontend\Drink;
use Model\Autoloader;
use \PDO;

require_once('model/autoload.php');
Autoloader::register();


class DrinkManager extends Database
{
	//affiche les boissons médiévales
	public function getDrinks()
	{	
		$drinks=[];
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM listdrinks' );
		while ($data = $req->fetch(PDO::FETCH_ASSOC))
		{
			$drinks[] = new Drink($data);
		}
		
		return $drinks;
	}

	//supprimer les boissons sélectionnées actuellement non utilisée.
	public function delete($ids)
	{	
		$db = $this->dbConnect();
		$del = $db->prepare('DELETE FROM listdrinks WHERE id IN (' . $ids .')');
		$del->execute();
	}
	
	//ajout de boisson
	public function insertDrink($name, $description, $image, $type)
	{	
		$n = htmlspecialchars($name);
		$d = htmlspecialchars($description);
		$i = htmlspecialchars($image);
		$t = htmlspecialchars($type);
		
		$db = $this->dbConnect();
		$del = $db->prepare('INSERT INTO listdrinks(name, description, image, category) VALUES(?, ?, ?, ?)');
		$del->execute(array($n, $d, $i, $t));
	}
	
	//retire de la carte les boissons selectionnées
	public function remove($ids)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE listdrinks set rem= 1 WHERE id IN (' . $ids .')');
		$req->execute(array('id'=>$ids));
	}
	
	//remet sur la carte les boissons selectionnées
	public function resetdr($ids)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE listdrinks set rem= 0 WHERE id IN (' . $ids .')');
		$req->execute(array('id'=>$ids));
	}
}