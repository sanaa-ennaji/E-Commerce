<?php 

    class Admin extends Controller {
        private $serviceCategory;
        private $serviceProduct;


        public function __construct()
        {
            $this->serviceCategory = new serviceCategory();
            $this->serviceProduct = new serviceProduct();
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

        // Add new Product =================
        public function addProduct() {

            if ($_SERVER['REQUEST_METHOD'] == "POST")  {
                $addData = [
                    'ID_product' => uniqid(),
                    'productName' => $_POST['productName'],
                    'descProduct' => $_POST['descProduct'],
                    'quantity' => $_POST['quantity'],
                    'price' => $_POST['price'],
                    'imgProduct' => $_FILES['img_product'],
                    'ID_category' => $_POST['categories'],
                ];

                $imgStore = $_SERVER['DOCUMENT_ROOT'] . '/E-Commerce/public/images/products/';

                $imageName = basename($addData['imgProduct']['name']);
                $placement = $imgStore.$imageName;
                
                if (move_uploaded_file($addData['imgProduct']['tmp_name'] , $placement)) {

                    $newProduct = new Product();

                    $newProduct->ID_Product = $addData['ID_product'];
                    $newProduct->Name = $addData['productName'];
                    $newProduct->Description = $addData['descProduct'];
                    $newProduct->Quantity = $addData['quantity'];
                    $newProduct->Price = $addData['price'];
                    $newProduct->IMG_Product = $imageName;
                    $newProduct->ID_Category = $addData['ID_category'];

                    $result = $this->serviceProduct->addProduct($newProduct);
                    if ($result) {
                        $data = [
                            'products' => $this->serviceProduct->getAllProduct(),
                            'succes' => 'Product Added Succefully'
                        ];
                        header('Content-Type: application/json');
                        echo json_encode($data);
                    }else{
                        echo "Product Not Added";
                    }

                }
                
            }
        }

        public function getAllProducts() {
            $data = [
                'products' => $this->serviceProduct->getAllProduct(),
            ];
            echo json_encode($data);
        }

        // ============ Delete product =========
        public function deleteProduct() {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $result = $this->serviceProduct->deleteProduct($_POST['productID']);
                if ($result) {
                    $data = [
                        'products' => $this->serviceProduct->getAllProduct(),
                        'delete' => 'Product Deleted Succefully'
                    ];
                    header('Content-Type: application/json');
                    echo json_encode($data);
                }else{
                    echo "Product Not Added";
                }
            }
        }
        // =========== Update product ==============
        public function updateProduct() {

            




        }
        // =========== Update product ==============
        public function searchProduct() {

             if (isset($_POST['search'])) {

                $products =  $this->serviceProduct->searchProduct($_POST['search']);
                header('Content-Type: application/json');
                echo json_encode($products);

           }
            




        }
    }


?>