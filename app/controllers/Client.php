<?php 

class Client extends Controller {
    private $serviceProduct;

    public function __construct()
        {
            $this->serviceProduct = new serviceProduct();
            $this->ServiceClient = new ServiceClient;
        }

    public function clientinfo(){
        $data = $this->ServiceClient->getClientInfo($_SESSION['user_id']);
        $this->view('client/clientinfo', $data);
    }
    public function shop() {
            $this->view("client/shop");
    }
    public function getAllProducts() {
        try {
            $products = $this ->serviceProduct->getAllProducts();
            header("Content-Type: application/json");
            echo json_encode($products);
        } catch (Exception $e) {
            // handle error gracefully
            header("Content-Type: application/json", true, 500);
            echo json_encode(["error"=> $e->getMessage()]);
        


        $this->view('admin/product');
    }
}

    public function cart(){
        $this->view('client/panier');
    }
   
}

?>