<?php 
class Productcontroller{
    
    private $productModel;
    
    public function __construct(){
        $this->productModel = new Product();
    }
    public function listing(){
        $product = $this->productModel->getAllProductVariant();
        print_r($product);
        include './view/layout/header.php';
        include './view/product/listing.php';  
    }
}