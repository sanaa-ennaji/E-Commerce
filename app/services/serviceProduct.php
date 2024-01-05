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
        // ========== Delete Product ==========
        public function deleteProduct($id){

            $sql = "DELETE FROM product WHERE ID_Product = :id";
            try {
                $this->db_conn->query($sql);
                $this->db_conn->bind(':id' , $id);
                $this->db_conn->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        // Function Search  Product 
        public function searchProduct($r){

            $sql = "SELECT * FROM product JOIN category ON product.ID_Category = category.ID_Category WHERE Product_Name LIKE :request";
            try {
                $this->db_conn->query($sql);
                $this->db_conn->bind(":request" , $r . '%');
                $products = $this->db_conn->resultSet();
                return $products;
                echo "am serched";
            } catch (PDOException $e) {
                print_r($e->getMessage());
            }

        }
            // =========== Update Product ===========
        public function updateProduct(Product $product){

            $sql = "UPDATE `product` 
                        SET `Product_Name`= :name ,
                        `IMG_Product`= :img,
                        `Product_Desc`= :desc,
                        `Quantity`= :qte,
                        `Price`= :price,
                        `ID_Category`= :idCategory 
                    WHERE  ID_Product = :idProduct";

            try {
                $this->db_conn->query($sql);
                $this->db_conn->bind(":name" , $product->Name);
                $this->db_conn->bind(":img" , $product->IMG_Product);
                $this->db_conn->bind(":desc" , $product->Description);
                $this->db_conn->bind(":qte" , $product->Quantity);
                $this->db_conn->bind(":price" , $product->Price);
                $this->db_conn->bind(":idCategory" , $product->ID_Category);
                $this->db_conn->bind(":idProduct" , $product->ID_Product);
                $this->db_conn->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }


        }




}






?>