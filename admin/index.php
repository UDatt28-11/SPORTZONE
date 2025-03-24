<?php 
include 'common/env.php';
include 'common/function.php';



require_once 'models/product.php';

require_once 'controller/productcontroller.php';

$act = isset($_GET['act']) ? $_GET['act'] : "";

$productControllers = new Productcontroller();
// giao diện
include 'view/layout/header.php';

switch($act){
    case 'listingProduct' :
        $productControllers->listing();
        break;
}
include 'view/layout/footer.php';

?>