<?php 

    class serviceShop implements interfaceShop {
        private $connect_db;
        public function __construct() {
            $this->connect_db = Database::getInstance();


    }


    public function getCategories() {

        $sql = "SELECT * FROM category";
        try {
            $this->connect_db->query($sql);
            $categories = $this->connect_db->resultSet();
            return $categories;
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }

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