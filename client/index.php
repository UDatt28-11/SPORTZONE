<?php
// nhúng file env và conn kết nối db;
require './client/common/env.php';
require './client/common/function.php';
// nhúng file controller và models
require './client/controllers/categoryController.php';
require './client/models/Category.php';
// Khởi tạo controler
$controller = new categoryController();

// Khai báo dữ liệu từ url
$act =isset($_GET['act']) ? $_GET['act'] : '/';

switch($act){
    case '/':
        echo "<a href = 'index.php?act=categary>Danh Mục Sản Phẩm</a>";
        break;
  
}