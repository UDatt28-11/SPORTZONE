
<?php
$act = isset($_GET['act']) ? $_GET['act'] : 'static';

// secsion_star();
// Nhúng file env và kết nối DB
include '../admin/common/env.php';
include '../admin/common/function.php';
include 'view/layout/header.php';
// Nhúng file controller và models
require_once 'models/product.php';
require_once 'controller/productcontroller.php';
require_once '../admin/controllers/category/categoryController.php';
require_once '../admin/models/Category.php';
require_once '../admin/controllers/brandsController.php';
require_once '../admin/models/brand.php';

// Khởi tạo controller
$controllerCategory = new categoryController();
$controllerBrands = new brandsController();
$productControllers = new Productcontroller();



// Khai báo dữ liệu từ URL

switch ($act) {
    case 'listingProduct' :
        $productControllers->listing();
        break;
    case 'list-Category':
        $controllerCategory->listCategory();
        break;
    case 'edit-Category':
        $controllerCategory->editCategory();
        break;
    case 'add-category':
        $controllerCategory->addCategory();
        break;
    case 'delete-Category':
        $controllerCategory->deleteCategory();
        break;
    case 'list-Brands':
        $controllerBrands->listBrands();
        break;
    case 'add-Brands':
        $controllerBrands->addBrands();
        break;
    case 'delete-Brands':
        $controllerBrands->deleteBrands();
        break;
    case 'edit-Brands':
        $controllerBrands->editBrands();
        break;
}

include 'view/layout/footer.php';
?>