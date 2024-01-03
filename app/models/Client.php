<?php

class Client {
	private $ID_Client;
	private $ID_Uer;
	private $Adresse;

	public function __construct() {

	}

	public function __set($property, $value) {
		 if (property_exists($this, $property)){
			$this->$property = $value;
		}
	}

	public function __get($property) {
		 if (property_exists($this, $property)){
			return $this->$property;
		}
	}

}
?>
