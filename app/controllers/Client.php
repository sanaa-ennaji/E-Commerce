<?php 

class Client extends Controller {
    private $serviceShop;

    public function __construct()
        {
            $this->serviceShop = new serviceShop();
        }

    public function clientinfo(){
        $data = $this->ServiceClient->getClientInfo($_SESSION['user_id']);
        $this->view('client/clientinfo', $data);
    }
    public function shop() {
            $this->view("client/shop");
    }


    public function getProducts() {
        try {
            $products = $this ->serviceShop->getProducts();
            header("Content-Type: application/json");
            echo json_encode($products);
        } catch (Exception $e) {
            // handle error gracefully
            header("Content-Type: application/json", true, 500);
            echo json_encode(["error"=> $e->getMessage()]);
        


        $this->view('admin/product');
    }
}

    public function panier(){
        $this->view('client/panier');
    }

}

?>