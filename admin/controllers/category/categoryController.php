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
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $category = $this->categoryModels->getByIdCate($id);
        // require_once './views/category/editCategory.php';
       
        if(isset($_POST['submit'])){// kiểm tra người dùng bấm vào nút sửa
            // lấy dữ liệu người dùng nhập vào form
            $name = $_POST['name'];
            $status =$_POST['status'];
            // thực hiện truy vấn
            $this->categoryModels->updateCateGory($id,$name,$status);
            header("Location:index.php?act=list-Category");
            
        }
        require_once './views/category/editCategory.php';
    }

    public function addCategory()
    {
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $status=$_POST['status'];
            $this->categoryModels->add($name,$status);
            header("Location:./index.php?act=list-Category");
            exit();
        }
        require_once './views/category/addCategory.php';
    
    }
    
    public function deleteCategory()
    {
        $id = $_GET['id'];
        $this->categoryModels->deleteCategory($id);
        header("Location:./index.php?act=list-Category");
    }
       
}
?>