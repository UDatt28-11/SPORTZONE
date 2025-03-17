<?php
class User
{
    public $conn;

    // Kết nối đến CSDL
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy ra toàn bộ dữ liệu
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM users";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Thêm dữ liệu
    public function postData($name, $email, $phone, $status, $image)
    {
        try {
            $sql = "INSERT INTO users (name, email, phone, status, image) 
                VALUES (:name, :email, :phone, :status, :image)";
            $stmt = $this->conn->prepare($sql);

            // Gán giá trị vào câu truy vấn
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':image', $image);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // Hàm lấy thông tin chi tiết
    public function getDetail($id)
    {
        try {
            $sql_detail = "SELECT * FROM users WHERE id = :id";

            $stmt = $this->conn->prepare($sql_detail);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    }

    // Hàm cập nhật dữ liệu
    public function updateData($id, $name, $email, $phone, $status, $image)
    {
        try {
            $sql = "UPDATE users SET name = :name, 
                                    email = :email,
                                    phone = :phone,
                                    status = :status,
                                    image = :image
                                    WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            // Gán giá trị vào câu truy vấn
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':image', $image);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function destroyData($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // Hủy kết nối đến CSDL
    public function __destruct()
    {
        $this->conn = null;
    }
}
