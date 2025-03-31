<?php 
class Productcontroller{
    
    private $productModel;
    
    public function __construct(){
        $this->productModel = new Product();
    }
    public function listing(){
        $Listproduct = $this->productModel->getAllProduct();
    //    print_r($Listproduct);    
        require_once './views/Products/listing.php';
    }
}