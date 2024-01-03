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
            $data = [
                'categories' => $this->serviceCategory->getAllCategories(),
            ];
            header('Content-Type: application/json');
            echo json_encode($data);
            
        }

        // ============== Delete  Categories =================
        public function deleteCategory() {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $this->serviceCategory->deleteCategory($_POST['categoryID']);
                
                $data = [
                    'categories' => $this->serviceCategory->getAllCategories(),
                    'delMessage' => 'Category Deleted Sucessfully',
                ];
                header('Content-Type: application/json');
                echo json_encode($data);

            }
        }


        // ============== Search Categories =================
        public function searchCategories() {

            if (isset($_POST['search'])) {
                
                 $categories =  $this->serviceCategory->searchCategory($_POST['search']);
                 header('Content-Type: application/json');
                    echo json_encode($categories);

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

                    $data = [
                        'categories' => $this->serviceCategory->getAllCategories(),
                        'addMessage' => 'Added Category Succefully'
                    ];
                    header('Content-Type: application/json');
                    echo json_encode($data);
     

            }

            // $this->view('admin/category');
        }
        // Update Category ================
        public function updateCategory() {


            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    
                    if (isset($_POST['id'])) {
                        $update = [
                        'id' => $_POST['id'],
                        'name' => $_POST['newName'],
                        'desc' => $_POST['newDesc'],
                        ];

                        $updateCategory = new Category();
                        $updateCategory->ID_Category = $update['id'];
                        $updateCategory->Name = $update['name'];
                        $updateCategory->Description = $update['desc'];

                        $this->serviceCategory->updateCategory($updateCategory);
                        $data = [
                            'categories' => $this->serviceCategory->getAllCategories(),
                            'updateMeassge' => 'Category updated Succefully'
                        ];
                        header('Content-Type: application/json');
                        echo json_encode($data);
                    }




            }



        }

        // Page 
        public function product() {




            $this->view('admin/product');
        }
    }


?>