<?php

class categoryController
{
    public $categoryModels;
    
    public function __construct()
    {
        $this->categoryModels = new Category(); // khởi tạo object
    }
 
    public function listCategory()
        {
            $listCategory = $this->categoryModels->getListCategory();
            require_once './views/category/fornListCategory.php';
        }
    public function editCategory()
    {
        $id = $_GET['id'];
        $category = $this->categoryModels->getByIdCate($id);
        // include './views/category/editCategory.php';
       
        if(isset($_POST['submit'])){// kiểm tra người dùng bấm vào nút sửa
            // lấy dữ liệu người dùng nhập vào form
            $name = $_POST['name'];
            $status =$_POST['status'];
            // thực hiện truy vấn
            $this->categoryModels->updateCateGory($id,$name,$status);
            header("location: index.php?act=list-Category");
            exit();
        }
         require_once './views/category/editCategory.php';
    }
       
}