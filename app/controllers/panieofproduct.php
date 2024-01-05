<?php

class PanierOfProductController extends Controller {
    private $panierProductService;
 private 
    public function __construct() {
        $this->panierProductService = new panierofproductservice(); 
    }
    public function read() {
        $panierProducts = $this->panierProductService->read();
        echo json_encode($panierProducts);
    }

    public function add() {
        $panierProduct = new PanierOfProduct();
        $panierProduct->ID_Pannier = $_POST['idPanier'];
        $panierProduct->ID_Product = $_POST['idProduct'];

        $this->panierProductService->create($panierProduct);
    }

  
    public function get($id) {
        $panierProduct = $this->panierProductService->fetch($id);
        echo json_encode($panierProduct);
    }

    public function remove($id) {
        $this->panierProductService->delete($id);
    }
}

?>


