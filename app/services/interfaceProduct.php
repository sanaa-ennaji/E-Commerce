<?php 

    interface interfaceProduct {
        public function addProduct(Product $product);
        public function getAllProduct();
        public function searchProduct($r);
        public function updateProduct(Product $product);
        
    }

?>