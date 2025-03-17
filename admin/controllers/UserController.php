<?php
class UserController
{
    // Thực hiện kết nối tới model
    public $modelUser;

    public function __construct()
    {
        $this->modelUser = new User();
    }

    // Hiển thị danh sách
    public function index()
    {
        // Lấy ra dữ liệu từ CSDL
        $listUser = $this->modelUser->getAll();
        var_dump($listUser);

        // Muốn đổ dữ liệu ra view thì sẽ require file view đó vào đây
        require_once './views/list_user.php';
    }

    // Hiển thị form nhập thêm thông tin
    public function add()
    {
        require_once './views/add_user.php'; // Giao diện form add
    }

    // Thêm dữ liệu lên CSDL
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy ra tất cả các dữ liệu
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            $status     = $_POST['status'];
            $file_img   = $_FILES['image'];

            // Kiểm tra dữ liệu
            $error = [];

            // Kiểm tra trường name
            if (empty($name)) { // empty là hàm check trống. Nếu không có dữ liệu sẽ trả về TRUE
                $error['name'] = "Nhập đầy đủ họ tên";
            }

            if (empty($email)) {
                $error['email'] = "Nhập đầy đủ email";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Nhập sai định dạng email";
            }

            $regex = '/(84|0[3|5|7|8|9])+([0-9]{8})\b/';
            if (empty($phone)) {
                $error['phone'] = "Nhập đầy đủ số điện thoại";
            } else if (!preg_match($regex, $phone)) {
                // preg_match: Nếu đúng thỏa mãn regex thì sẽ trả về TRUE
                $error['phone'] = "Nhập sai định dạng số điện thoại";
            }

            // Xử lý hình ảnh
            if (isset($file_img)) {
                // Chọn thư mục lưu ảnh
                $target_dir = "uploads/user/";
                // Lấy tên hình ảnh
                $img_name = uniqid() . '_' . $file_img['name'];
                // Tạo đường dẫn đầy đủ để lưu vào CSDL
                $path_image = $target_dir . $img_name;
                // Tạo ảnh
                move_uploaded_file($file_img['tmp_name'], $path_image);
            }
            

            if (empty($error)) {
                // Nếu ko có lỗi thì tiến hành thêm dữ liệu
                unset($_SESSION['error']); // Xóa các lỗi lưu trên session
                $this->modelUser->postData($name, $email, $phone, $status, $path_image);
                header("Location: ?act=list-user");
                exit();
            } else {
                $_SESSION['error'] = $error;
                header("Location: ?act=form-add-user");
                exit();
            }
        }
    }
    
    // Hiển thị form sửa
    public function edit($id)
    {
        // Lấy ra thông tin chi tiết người dùng
        $userDetail = $this->modelUser->getDetail($id);

        require_once './views/edit_user.php';
    }

    // Cập nhật dữ liệu
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy ra dữ liệu cập nhật lên
            $id     = $_POST['id'];
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            $phone  = $_POST['phone'];
            $status = $_POST['status'];
            $file_img  = $_FILES['image'];

            // Kiểm tra dữ liệu
            $error = [];

            // Kiểm tra trường name
            if (empty($name)) { // empty là hàm check trống. Nếu không có dữ liệu sẽ trả về TRUE
                $error['name'] = "Nhập đầy đủ họ tên";
            }

            if (empty($email)) {
                $error['email'] = "Nhập đầy đủ email";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Nhập sai định dạng email";
            }

            $regex = '/(84|0[3|5|7|8|9])+([0-9]{8})\b/';
            if (empty($phone)) {
                $error['phone'] = "Nhập đầy đủ số điện thoại";
            } else if (!preg_match($regex, $phone)) {
                // preg_match: Nếu đúng thỏa mãn regex thì sẽ trả về TRUE
                $error['phone'] = "Nhập sai định dạng số điện thoại";
            }

            // Lấy lại thông tin chi tiết người dùng để lấy link ảnh
            $userDetail = $this->modelUser->getDetail($id);

            // Xử lý ảnh
            if (isset($file_img) && $file_img['error'] === UPLOAD_ERR_OK) {
                // Chọn thư mục lưu ảnh
                $target_dir = "uploads/user/";
                // Lấy tên hình ảnh
                $img_name = uniqid() . '_' . $file_img['name'];
                // Tạo đường dẫn đầy đủ để lưu vào CSDL
                $path_image = $target_dir . $img_name;
                // Tạo ảnh
                if (move_uploaded_file($file_img['tmp_name'], $path_image)) {
                    // Nếu mà tạo file ảnh thành công thì xóa ảnh cũ trong thư mục

                    if (file_exists($userDetail['image'])) {
                        unlink($userDetail['image']);
                    }
                }
            } else {
                $path_image = $userDetail['image'];
            }

            if (empty($error)) {
                // Nếu ko có lỗi thì tiến hành cập nhật dữ liệu
                unset($_SESSION['error']); // Xóa các lỗi lưu trên session
                $this->modelUser->updateData($id, $name, $email, $phone, $status, $path_image);
                header("Location: ?act=list-user");
                exit();
            } else {
                $_SESSION['error'] = $error;
                header("Location: ?act=form-edit-user");
                exit();
            }
        }
    }

    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];

            // Lấy lại thông tin chi tiết người dùng để xóa hình ảnh
            $userDetail = $this->modelUser->getDetail($id);

            $image_path = $userDetail['image'];

            if ($this->modelUser->destroyData($id)) {
                // Nếu xóa người dùng thành công thì sẽ xóa hình ảnh
                if ($image_path && file_exists($image_path)) {
                    unlink($image_path);
                }
                
                header("Location: ?act=list-user");
                exit();
            }
        }
    }
}