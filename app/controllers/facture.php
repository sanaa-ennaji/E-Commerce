<?php

require_once 'app/models/Facture.php'; 
class FactureController {
    public function genererFacture($idCommande) {

        $facture = new Facture();

        $facture->ID_Client = 1; 
        $facture->nomClient = 'Nom du client';
        $facture->emailClient = 'client@example.com';

        $produits = [
            ['nom' => 'Produit 1', 'prix_unitaire' => 20, 'quantite' => 2],
            ['nom' => 'Produit 2', 'prix_unitaire' => 30, 'quantite' => 1],
        ];

        foreach ($produits as $produit) {
            $facture->ajouterProduit($produit);
        }

        $facture->calculerTotal();

        $this->afficherFacture($facture);
    }

    private function afficherFacture($facture) {
      
        include 'app/views/client/facture.php';
    }
}

// Exemple d'utilisation
$factureController = new FactureController();
$factureController->genererFacture(1); 

?>
