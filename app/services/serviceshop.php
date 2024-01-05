<?php 

    class serviceShop implements interfaceShop {
        private $connect_db;
        public function __construct() {
            $this->connect_db = Database::getInstance();


    }
    public function getProducts() {
        $sql = "SELECT * FROM product";
        try{
            $this->connect_db->query($sql);
            $products = $this->connect_db->resultSet();
            return $products;
        }catch (PDOException $e){
            print_r($e->getMessage());
    }
}
}

?>