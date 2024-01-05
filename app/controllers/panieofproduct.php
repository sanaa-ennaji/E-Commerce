<?php

// require_once 'PanierOfProductService.php'; 

// class PanierController {
//     private $panierService;

//     public function __construct($db) {
//         $this->panierService = new PanierOfProduct();
//     }

//     public function addToPanier($panierID, $productID) {
   
//         $panierOfProduct = new PanierOfProduct();
//         $panierOfProduct->ID_Pannier = $panierID;
//         $panierOfProduct->ID_Product = $productID;

  
//         $result = $this->panierService->create($panierOfProduct);

      
//         if ($result) {
//             echo "Product added to Panier successfully.";
//         } else {
//             echo "Failed to add product to Panier.";
//         }
//     }

//     public function viewPanier($panierID) {
     
//         $panierProducts = $this->panierService->read($panierID);

//         echo '<h1>Panier Contents</h1>';
//         foreach ($panierProducts as $product) {
//             echo '<div>';
//             echo '<p>Product ID: ' . $product['ID_Product'] . '</p>';
          
//             echo '<button onclick="removeFromPanier(' . $product['ID_Pannier'] . ')">Remove from Panier</button>';
//             echo '</div>';
//         }

//         echo '<button onclick="validatePanier()">Valide Panier</button>';
//     }

//     public function removeFromPanier($panierID, $productID) {
      
//         $result = $this->panierService->delete($panierID);

       
//         if ($result) {
//             echo "Product removed from Panier successfully.";
//         } else {
//             echo "Failed to remove product from Panier.";
//         }
//     }

//     public function validatePanier($panierID) {
    
//         echo "Panier validated!";
//     }
// }


// $db = new PDO("your_database_connection_details");
// $panierController = new PanierController($db);
// $panierController->addToPanier($panierID, $productID);
// $panierController->viewPanier($panierID);
// $panierController->removeFromPanier($panierID, $productID);
// $panierController->validatePanier($panierID);
?>
