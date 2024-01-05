<?php

class serviceProduct implements interfaceProduct
{
    private $db_conn;


        public function __construct()
        {
            $this->db_conn = Database::getInstance();
        }

        // Add new Product =================

        public function addProduct(Product $product) {

            $sql = "INSERT INTO product VALUES(:ID_product , :name , :img , :desc , :quantity , :price , :ID_Category)";

            try {
                $this->db_conn->query($sql);
                $this->db_conn->bind(':ID_product' , $product->ID_Product);
                $this->db_conn->bind(':name' , $product->Name);
                $this->db_conn->bind(':img' , $product->IMG_Product);
                $this->db_conn->bind(':desc' , $product->Description);
                $this->db_conn->bind(':quantity' , $product->Quantity);
                $this->db_conn->bind(':price' , $product->Price);
                $this->db_conn->bind(':ID_Category' , $product->ID_Category);

                $this->db_conn->execute();
                return true;
            } catch (PDOException $e) {
                print_r($e->getMessage());
            }



        }
        // get All Product ==============
        public function getAllProduct()
        {
            $sql = "SELECT * FROM product JOIN category ON product.ID_Category = category.ID_Category";

            try {
                $this->db_conn->query($sql);
                $products = $this->db_conn->resultSet();
                return $products;

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

    }




?>