<?php

require "InterfaceClient.php";
class ServiceClient implements InterfaceClient{
    private $db;

    public function __construct() {
        // $this->db = new Database();
        $this->db = Database::getInstance();
    }

    public function add(Client $client) {
        $ID_User = uniqid();
        $ID_Client = uniqid();
        try {
            $query = "INSERT INTO User (ID_User, Name, Email, Password) VALUES (:id, :name, :email, :password)";
            $this->db->query($query);
            $this->db->bind(':id', $ID_User);
            $this->db->bind(':name', $client->Name);
            $this->db->bind(':email', $client->Email);
            $this->db->bind(':password', $client->Password);
            $this->db->execute();

            $this->db->query("INSERT INTO Client (ID_Client, Adresse, ID_User) VALUES (:id, :adresse, :ID_User)");
            $this->db->bind(':id', $ID_Client);
            $this->db->bind(':adresse', $client->Adresse);
            $this->db->bind(':ID_User', $ID_User);
            $this->db->execute();

            $this->db->query("INSERT INTO Panier (ID_Panier, ID_Client) VALUES (:id, :client)");
            $this->db->bind(':id', uniqid());
            $this->db->bind(':client', $ID_Client);
            $this->db->execute();

        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function update(Client $client) {
        try {
            $query = "UPDATE Client SET Name = :name, Email = :email, Adresse = :adresse WHERE ID_Client = :id";
            $this->db->query($query);

            $this->db->bind(':id', $client->ID_Client);
            $this->db->bind(':name', $client->Name);
            $this->db->bind(':email', $client->Email);
            $this->db->bind(':addresse', $client->Adresse);

            $this->db->execute();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function delete($ID_Client) {
        try {
            $query = "DELETE FROM Client WHERE ID_User = :id";
            $this->db->query($query);

            $this->db->bind(':id', $ID_Client);

            $this->db->execute();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function display(){
        try{
            $query = "SELECT * FROM Client";
            $this->db->query($query);

            $data = $this->db->resultSet();
            return $data;
        } catch (PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }

    public function getClientInfo($client_UserID){
        try{
            // $query = "SELECT User.Name, User.Email, User.Password, Client.Adresse FROM User INNER JOIN Client ON User.ID_User = :ClientID_User";
            $query = "SELECT * FROM User WHERE ID_User = :Client";
            $this->db->query($query);
            $this->db->bind(':Client', $client_UserID);
            $data1 = $this->db->single();
            $query = "SELECT * FROM Client WHERE ID_User = :Client";
            $this->db->query($query);
            $this->db->bind(':Client', $client_UserID);
            $data = [
                'client' => $this->db->single(),
                'user' => $data1
            ];

            return $data;
        } catch (PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }

    public function authenticate($email, $password) {
        try {

            $this->db->query("SELECT * FROM Client WHERE email = :email");
            $this->db->bind(":email", $email);
            $this->db->execute();
            $result = $this->db->single();
        } catch(PDOException $e){
            die("Error:" . $e->getMessage());
        }
        if ($result) {
            if (password_verify($password, $result->pw)) {
                return $result;
            }
        }
        return false;
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM User WHERE Email = :email');
        $this->db->bind(':email', $email);

        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}



?>