<?php
$act = isset($_GET['act']) ? $_GET['act'] : 'static';

// secsion_star();
// Nhúng file env và kết nối DB
include '../admin/common/env.php';
include '../admin/common/function.php';

// Nhúng file controller và models
require_once '../admin/controllers/categoryController.php';
require '../admin/models/Category.php';

// Khởi tạo controller
$controller = new categoryController();

// Khai báo dữ liệu từ URL

switch ($act) {
    case 'static':
        echo "<a href='index.php?act=list-Category'>Danh Mục Sản Phẩm</a>";
        break;

    case 'list-Category':
        $controller->listCategory();
        break;
    case 'edit-Category':
        $controller->editCategory();
        break;
}
?>
