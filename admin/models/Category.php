<?php
class Category{
    public $conn;

    public function __construct()
    {
        //kết nối db
        $this->conn = connectDB();
    }
    public function getListCategory()
    {
            $sql = "SELECT * FROM categories ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
    }

    public function getByIdCate($id){
        $sql = "SELECT * FROM Categories Where id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateCategory($id,$name,$status)
    {   
        $sql = "UPDATE Categories SET name ='$name' ,status = '$status' where id = :id ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
    public function add($name, $status)
    {
        $sql = "INSERT INTO categories (name, status) VALUES (:name, :status)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR); // Truyền status dưới dạng chuỗi

        return $stmt->execute(); // Thực thi câu truy vấn và trả về kết quả
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>
