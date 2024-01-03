<?php 

    class Admin extends Controller {
        private $serviceCategory;


        public function __construct()
        {
            $this->serviceCategory = new serviceCategory();
        }

        // Product Method And Page 


        // Category Method And Page 

        public function category() {

            $this->view('admin/category');
        }
        // Fetch All Categories 
        public function getAllCategories() {

            try {
                $categories = $this->serviceCategory->getAllCategories();
                header('Content-Type: application/json');
                echo json_encode($categories);
            } catch (Exception $e) {
                // Handle the error gracefully
                header('Content-Type: application/json', true, 500);
                echo json_encode(['error' => $e->getMessage()]);
            }

        }
        public function addCategory() {

            if($_SERVER['REQUEST_METHOD'] === "POST") {

                $data = [
                    'ID_Category' => uniqid(),
                    'nameCategory' => $_POST['name'],
                    'descCategory' => $_POST['desc']
                ];

                $newCategory = new Category();

                $newCategory->ID_Category = $data['ID_Category'];
                $newCategory->Name = $data['nameCategory'];
                $newCategory->Description = $data['descCategory'];


                $this->serviceCategory->addCategory($newCategory);
                echo "Category Added Succefully";

            }

            // $this->view('admin/category');
        }


        // Page 
        public function product() {




            $this->view('admin/product');
        }
    }


?>