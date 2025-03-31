<?php

// session_start();
class UserController 
{
    private $userModel;
    public function __construct(){
       $this->userModel = new User();
   }   
   public function listUser(){
    $Listuser = $this->userModel->getUserData();
    // print_r($Listuser);
    require_once './views/Users/listUser.php';
   } 
   //Thêm người dùng
   public function createUser(){
    if(isset($_POST['submit'])){
        //Lấy ra toàn bộ dữ liệu 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $avatar = $_FILES['avatar'];
        $role = $_POST['role'];
        $date_create = $_POST['date_create'];
        $status = $_POST['status'];
      
        if (isset($avatar)) {
            // Chọn thư mục lưu ảnh
            $target_dir = "uploads/user/";
            // Lấy tên hình ảnh
            $img_name = uniqid() . '_' . $avatar['name'];
            // Tạo đường dẫn đầy đủ để lưu vào CSDL
            $path_image = $target_dir . $img_name;
            // Tạo ảnh
            move_uploaded_file($avatar['tmp_name'], $path_image);
        }

            $this->userModel->postUserData($username,$password,$email,$phone_number,$address, $gender, $birthdate, $path_image, $role, $date_create, $status);
            header("Location: SPORTZONE/admin/?act=user");
            exit();
       }
      require_once './views/Users/createUser.php';
   }
   
}

?>