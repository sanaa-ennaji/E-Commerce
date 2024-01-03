<?php 

    class Admin extends Controller {
        private $serviceCategory;


        public function __construct()
        {
            $this->serviceCategory = new serviceCategory();
        }

        // Product Method And Page 

        public function product() {




            $this->view('admin/product');
        }
        // Category Method And Page 

        public function category() {




            $this->view('admin/category');
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





            }

            // $this->view('admin/category');
        }



    }


?>