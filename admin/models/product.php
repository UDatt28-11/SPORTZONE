<?php
   class Product{
    private $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
    //Lấy ra toàn bộ dữ liệu của Biến thể sản phẩm
    public function getAllProductVariant()
    {
        try {
            $sql = "SELECT
                    product_variants.id,
                    products.name,
                    products.description,
                    products.main_image,
                    categories.name,
                    brands.name,
                    products.date_create,
                    product_sizes.size,
                    product_colors.color,
                    product_variants.stock,
                    product_variants.price,
                    product_variants.status
                    FROM product_variants
                    INNER JOIN products ON product_variants.product_id = products.id
                    INNER JOIN categories ON products.category_id = categories.id
                    INNER JOIN brands ON products.brand_id = brands.id
                    INNER JOIN product_sizes ON product_variants.product_size_id = product_sizes.id
                    INNER JOIN product_colors ON product_variants.product_color_id = product_colors.id
                    ";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

   public function addProductVariant(){
    
   }
}
?>