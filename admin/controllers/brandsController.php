<?php
class brandsController{
    public $brandsModels;
    public function __construct()
    {
        $this->brandsModels = new Brands(); // khởi tạo object
    }
    
    public function listBrands()
    {
        $listBrands = $this->brandsModels->getListBrands();
        require_once './views/brand/fromListBrands.php';
    }

    public function editBrands()
    {
        $id = $_GET['id'];
        $brands = $this->brandsModels->getByIdBrand($id);
       
        if(isset($_POST['submit'])){// kiểm tra người dùng bấm vào nút sửa
            // lấy dữ liệu người dùng nhập vào form
            $name = $_POST['name'];
            // $logo = $_POST['logo'];
            $status =$_POST['status'];

            if(isset($_FILES['logo']) && $_FILES['logo']['name']){
                $file = $_FILES['logo'];
                $image = $file['name'];
                $form = $file['tmp_name'];
                $to = '../upload/brands/'.$image;
                move_uploaded_file($form,$to);
            }
            else{
                $image = $brands['logo'];
            }
            $this->brandsModels->updateBrands($id,$name,$image,$status);
            // thực hiện truy vấn
            header("location: index.php?act=list-Brands");
            exit();
        }
       
         require_once './views/brand/editBrands.php';
    }
}