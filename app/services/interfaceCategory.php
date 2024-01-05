<?php 

    interface interfaceCategory {
        public function addCategory(Category $category);
        public function getAllCategories();
        public function searchCategory($r);
        public function deleteCategory($id);
        public function updateCategory(Category $category);
        

    }
?>
