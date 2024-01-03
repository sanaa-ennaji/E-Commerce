<?php 
    class serviceCategory implements interfaceCategory {
        private $connect_db;

        public function __construct()
        {
            $this->connect_db = new Database();
        }



        public function addCategory(Category $category)
        {
            $sql = "INSERT INTO category VALUES(:ID_category , :name , :desc)";

            try {
                $this->connect_db->query($sql);
                $this->connect_db->bind(":ID_category" , $category->ID_Category);
                $this->connect_db->bind(":name" , $category->Name);
                $this->connect_db->bind(":desc" , $category->Description);
                $this->connect_db->execute();
            } catch (PDOException $e) {
                print_r($e->getMessage());
            }



        }

    }