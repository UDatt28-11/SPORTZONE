<?php 
class Productcontroller{
    
    private $productModel;
    
    public function __construct(){
        $this->productModel = new Product();
    }
    public function listing(){
        $Listproduct = $this->productModel->getAllProductVariant();
       
        require_once './view/Products/listing.php';
        print_r($Listproduct);
    }
}