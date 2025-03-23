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
}