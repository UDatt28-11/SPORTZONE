<?php
session_start();
$act = isset($_GET['act']) ? $_GET['act'] : 'static';

include '../admin/common/env.php';
include '../admin/common/function.php';

require_once 'models/categoryModel.php';

require_once '../admin/controller/categoryController.php';

$controller = new CategoryController();
$action = isset($_GET['act']) ? $_GET['act'] : 'list-category';

switch ($action) {
    case 'list-category':
        $controller->listCategory();
        break;
    case 'form-add-category':
        $controller->formAddCategory();
        break;
    case 'post-add-category':
        $controller->postAddCategory();
        break;
    case 'delete-category':
        $controller->postDeleteCategory();
    case 'form-edit-category':
        $controller->formEditCategory();
    case 'post-edit-category':
        $controller->postEditCategory();
    default:
        $controller->listCategory();
        break;
}
?>
