<?php
session_start();
// Require file Common
require_once './client/common/env.php'; // Khai báo biến môi trường
require_once './client/common/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './client/controllers/HomeController.php';

$act = $_GET['act'] ?? '/';
match($act){
    '/' => (new HomeController())->home(), // route trang chủ
};
?>