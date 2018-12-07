<?php

namespace Dizet\Midgard\Model;

class Drink{
	
	private $_id;
	private $_name;
	private $_description;
	private $_image;
	private $_category;
	private $_rem;

	
	
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
	public function description(){ return $this->_description; }
	public function image(){ return $this->_image; }
	public function category(){ return $this->_category; }
	public function rem(){ return $this->_rem; }
	
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
	
	public function setDescription($description)
	{
		if (is_string($description))
		{
			$this->_description = $description;
		}
	}
	
	public function setImage($image)
	{
		if (is_string($image))
		{
			$this->_image = $image;
		}
	}
	
	public function setCategory($category)
	{
		if (is_string($category))
		{
			$this->_category = $category;
		}
	}
	
	public function setRem($rem)
	{
		if (is_string($rem))
		{
			$this->_rem = $rem;
		}
	}
}