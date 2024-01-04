<?php
class PanierProduct implements interfacePanierProduct
{
        private $db; 
    
        public function __construct($db) {
            $this->db = $db;
        }
    
        public function create(PanierOfProduct $productOfCart) {

            $sql = "INSERT INTO panierofproduct (ID_Pannier, ID_Product) VALUES (:ID_Pannier, :ID_Product)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_Pannier', $productOfCart->ID_Pannier);
            $stmt->bindParam(':ID_Product', $productOfCart->ID_Product);
            
            return $stmt->execute();
        }
    
        public function read() {
            $sql = "SELECT * FROM panierofproduct";
            $stmt = $this->db->query($sql);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $results;
        }
    
        public function delete($id) {
           
            $sql = "DELETE FROM panierofproduct WHERE ID_Pannier = :ID_Pannier";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_Pannier', $id);
            
            return $stmt->execute();
        }
    
        public function fetch($id) {
        
            $sql = "SELECT * FROM panierofproduct WHERE ID_Pannier = :ID_Pannier";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_Pannier', $id);
            $stmt->execute();
    
           
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $result;
        }
    }
    ?>
    
?>