<?php

class ServiceUser implements InterfaceUser {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function authenticate($email, $password) {
        try {

            $this->db->query("SELECT * FROM User WHERE email = :email");
            $this->db->bind(":email", $email);
            $this->db->execute();
            $result = $this->db->single();
        } catch(PDOException $e){
            die("Error:" . $e->getMessage());
        }

        if ($result) {
            // if ($result->ID_User)
            if (password_verify($password, $result->Password)) {
                // return $result;
                $client = getRole('Client', $result->ID_User);
                $admin = getRole('Admin', $result->ID_User);
                if($admin){
                    
                }
            } else {
                echo "wrong password";
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

    public function getRole($table, $ID_User){
        try {
            $this->db->query("SELECT * FROM $table WHERE ID_User = :User");
            $this->db->bind(":User", $ID_User);
            $this->db->execute();
            $client = $this->db->single();
            if (!$client){
                return null;
            }
            return $client;
        } catch(PDOException $e){
            die("Error:" . $e->getMessage());
        }
    }
}

?>