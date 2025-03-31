<?php 
session_start();
// Kết nối
include 'common/env.php';
include 'common/function.php';

// Data base
require_once 'models/product.php';
require_once 'models/user.php';
require_once 'models/brand.php';

// controllers
require_once 'controllers/userController.php';
require_once 'controllers/productcontroller.php';
require_once 'controllers/brandsController.php';


$act = isset($_GET['act']) ? $_GET['act'] : "";

$productControllers = new Productcontroller();
$userControllers = new UserController(); 
$controllerBrands = new brandsController();
// giao diện
include 'views/layout/header.php';

switch($act){
    //Products Admin
    case 'listingProduct' :
        $productControllers->listing();
        break;
        //User admin
    case 'user':
        $userControllers->listUser();
        break;   
    case 'form-user':
        $userControllers->createUser();
        break;  
    // Brands
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
include 'views/layout/footer.php';

?>