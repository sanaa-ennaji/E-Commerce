<?php

class CommandeLine {
	private $ID_Commande;
	private $ID_Product;
	private $ID_Facture;
	private $Quantity_Cmd;

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
