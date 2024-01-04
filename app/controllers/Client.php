<?php 

class Client extends Controller {

    public function shop() {
        $this->view("client/shop");
    }
    public function cart(){
        $this->view('client/panier');
    }
   
}

?>