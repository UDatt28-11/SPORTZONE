<?php
class Brands{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getListBrands()
    {
        $sql = "SELECT * FROM brands ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getByIdBrand($id)
    {
        $sql = "SELECT * FROM brands WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateBrands($id,$name,$image,$status)
    {
        $sql = "UPDATE brands SET name ='$name' ,logo = '$image',status = '$status' where id = :id ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
    public function addBrands($name,$image,$status)
    {
        $sql = "INSERT INTO brands (name,logo,status) VALUES ('$name','$image','$status')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function deleteBrands($id)
    {
        $sql = "DELETE FROM brands WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>