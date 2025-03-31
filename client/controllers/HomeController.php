<?php
class HomeController{
    public $modelSanPham;
    
    public function __construct(){
        // $this->modelSanPham = new SanPham();
    }
    public function home(){
        require_once './client/views/home.php';
    }
}
?>