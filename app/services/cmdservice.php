<?php
    
    class CmdService implements Interfacecmd {
        private $db; 
    
        public function __construct($db) {
            $this->db = $db;
        }
    
        public function create(Commande $cmd) {
           
            $sql = "INSERT INTO commande (ID_commande, ID_Client) VALUES (:ID_commande, :ID_Client)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_commande', $cmd->ID_commande);
            $stmt->bindParam(':ID_Client', $cmd->ID_Client);
            return $stmt->execute();
        }
    
        public function read() {
           
            $sql = "SELECT * FROM commande";
            $stmt = $this->db->query($sql);

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $results;
        }
    
        public function delete($id) {
         
            $sql = "DELETE FROM commande WHERE ID_commande = :ID_commande";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_commande', $id);
    
            return $stmt->execute();
        }
    
        public function fetch($id) {
     
            $sql = "SELECT * FROM commande WHERE ID_commande = :ID_commande";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ID_commande', $id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $result;
        }
    }
    ?>
    