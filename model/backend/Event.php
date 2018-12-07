<?php

namespace Dizet\Midgard\Model;

class Event{
	
	private $_id;
	private $_name;
	private $_email;
	private $_phone;
	private $_catEvent;
	private $_nbPerson;
	private $_comment;
	private $_reservationDate;

	
	
	public function __construct($datas)
	{
		$this->hydrate($datas);
	}
	
	
	// Hydratation de l'objet pour assigner des valeurs aux attributs.
	public function hydrate(array $datas)
	{
		foreach ($datas as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set' . ucfirst($key);
			// Si le setter correspondant existe.
    		if (method_exists($this, $method))
    		{
     			// On appelle le setter.
      			$this->$method($value);
    		}
		}
	}
	
	// liste des getters
	public function id(){ return $this->_id; }
	public function name(){ return $this->_name; }
	public function email(){ return $this->_email; }
	public function phone(){ return $this->_phone; }
	public function catEvent(){ return $this->_catEvent; }
	public function nbPerson(){ return $this->_nbPerson; }
	public function comment(){ return $this->_comment; }
	public function reservationDate(){ return $this->_reservationDate; }
	
	// liste des setters
	public function setId($id)
	{
		//on convertit en nombre entier.
		$id = (int)$id;
		// On vérifie si ce nombre est bien strictement positif.
		if ($id > 0)
		{
		  // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
		  $this->_id = $id;
		}
	}
	
	
	public function setName($name)
	{
		// on vérifie que c'est bien une chaine de caractères. 
		if (is_string($name))
		{
			$this->_name = $name;
		}
	}
	
	public function setEmail($email)
	{
		if (is_string($email))
		{
			$this->_email = $email;
		}
	}
	
	public function setPhone($phone)
	{
		$phone = (int)$phone;
		
		if ($phone > 0)
		{
			$this->_phone = $phone;
		}
	}
	
	public function setCatEvent($catEvent)
	{
		if (is_string($catEvent))
		{
			$this->_catEvent = $catEvent;
		}
	}
	
	public function setNbPerson($nbPerson)
	{
		$nbPerson = (int)$nbPerson;
		
		if ($nbPerson > 0)
		{
			$this->_nbPerson = $nbPerson;
		}
	}
	
	public function setComment($comment)
	{
				
		if (is_string($comment))
		{
			$this->_comment = $comment;
		}
	}
	
	public function setReservationDate($reservationDate)
	{
				
		if (is_string($reservationDate))
		{
			$this->_reservationDate = $reservationDate;
		}
	}
}