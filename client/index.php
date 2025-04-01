<?php
session_start();
include '../admin/common/env.php';
include '../admin/common/function.php';

require_once "./models/pdo.php";
require_once "./models/user.php";
require_once "./models/products.php";
require_once "./models/slide.php";
require_once "./models/binhluan.php";
require_once "./models/OrderModel.php";

require_once "./controllers/authController.php";
require_once "./controllers/OrderController.php";
require_once "./controllers/CartController.php";


// $authController = new AuthController();
// $products = loadAll_sanpham_home();
// $dstop10 = loadAll_sanpham_top10();
// $listSlides = getSlides();
// $cartController = new CartController();

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){

    }
}