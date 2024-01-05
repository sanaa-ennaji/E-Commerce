<?php

class Facture {
    private $ID_Facture;
    private $ID_Client;
    private $nomClient;
    private $emailClient;
    private $produits; 
    private $sousTotal;
    private $fraisExpedition;
    private $total;

    public function __construct() {
        $this->produits = array();
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function ajouterProduit($produit) {
        $this->produits[] = $produit;
    }

    public function calculerTotal() {
        $this->sousTotal = 0;

        foreach ($this->produits as $produit) {
            $this->sousTotal += $produit['prix_unitaire'] * $produit['quantite'];
        }

        $this->total = $this->sousTotal + $this->fraisExpedition;
    }
}

?>
