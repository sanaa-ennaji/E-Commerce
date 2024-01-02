<?php 

    class Admin extends Controller {


        // Product Method And Page 

        public function product() {




            $this->view('admin/product');
        }
        // Category Method And Page 

        public function category() {




            $this->view('admin/category');
        }



    }


?>