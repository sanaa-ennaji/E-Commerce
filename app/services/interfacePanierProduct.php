<?php


interface Panierofproduct {
  
        public function create(Panierofproduct $ProductOfCart);
        public function read();
        public function delete($id);
        public function fetch($id);

    
}





?>