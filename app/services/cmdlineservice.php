<?php


class Cmdlineservice implements Interfacecmdline {


    private $db;
    public function __construct($db) {
        $this->db = $db;
    }

    public function create(CommandeLine $commandeLine) {
        $sql = "INSERT INTO commandline (ID_Product, ID_Command, Quantity_Cmd, ID_Facture) VALUES (:ID_Product, :ID_Command, :Quantity_Cmd, :ID_Facture)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ID_Product', $commandeLine->ID_Product);
        $stmt->bindParam(':ID_Command', $commandeLine->ID_Command);
        $stmt->bindParam(':Quantity_Cmd', $commandeLine->Quantity_Cmd);
        $stmt->bindParam(':ID_Facture', $commandeLine->ID_Facture);

        return $stmt->execute();
    }

    public function read() {
        $sql = "SELECT * FROM commandline";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function delete($id) {
        
        $sql = "DELETE FROM commandline WHERE ID_Product = :ID_Product";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ID_Product', $id);

        return $stmt->execute();
    }

    public function fetch($id) {
        $sql = "SELECT * FROM commandline WHERE ID_Product = :ID_Product";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ID_Product', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
?>
