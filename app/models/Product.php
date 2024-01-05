<?php

class Product {
	private $ID_Product;
	private $Name;
	private $IMG_Product;
	private $Description;
	
	private $ID_Category;
	private $Quantity;
	private $Price;

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
