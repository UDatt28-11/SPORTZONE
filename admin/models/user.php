<?php
class User{
    private $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
    public function getUserData(){
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function postUserData($username, $password, $email, $phone_number, $address, $gender, $birthdate, $avatar, $role, $date_create, $status){
        try {
            $sql = "INSERT INTO users (username, password, email, phone_number, address, gender, birthdate, avatar, role, date_create, status) 
                    VALUES (:username, :password, :email, :phone_number, :address, :gender, :birthdate, :avatar, :role, :date_create, :status)";
            $stmt = $this->conn->prepare($sql);
    
            // Gán giá trị vào câu truy vấn
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':avatar', $avatar);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':date_create', $date_create);
            $stmt->bindParam(':status', $status);
    
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log("Lỗi khi thêm người dùng: " . $e->getMessage());
            return false;
        }
    }
    
}
?>