<?php
$act = isset($_GET['act']) ? $_GET['act'] : 'static';

// secsion_star();
// Nhúng file env và kết nối DB
include '../admin/common/env.php';
include '../admin/common/function.php';

// Nhúng file controller và models
require_once '../admin/controllers/categoryController.php';
require_once '../admin/models/Category.php';
require_once '../admin/controllers/brandsController.php';
require_once '../admin/models/brand.php';

// Khởi tạo controller
$controllerCategory = new categoryController();
$controllerBrands = new brandsController();



// Khai báo dữ liệu từ URL

switch ($act) {
    case 'static':
        echo "<a href='index.php?act=list-Category'>Danh Mục Sản Phẩm</a>";
        echo "<a href='index.php?act=list-Brands'>Thương Hiệu</a>";
        break;

    case 'list-Category':
        $controllerCategory->listCategory();
        break;
    case 'edit-Category':
        $controllerCategory->editCategory();
        break;
    case 'list-Brands':
        $controllerBrands->listBrands();
        break;
    case 'edit-Brands':
        $controllerBrands->editBrands();
        break;
}
?>
