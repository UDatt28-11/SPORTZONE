<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
</head>

<body>
    <h2>Thêm người dùng mới</h2>
    <form action="?act=create-user" method="POST" enctype="multipart/form-data">
        <label for="">Họ tên:</label>
        <input type="text" name="name" placeholder="Nhập họ tên">
        <span style="color: red;">
            <?= !empty($_SESSION['error']['name']) ? $_SESSION['error']['name'] : '' ?>
        </span>        
        <br />
        <label for="">Email:</label>
        <input type="text" name="email" placeholder="Nhập email">
        <span style="color: red;">
            <?= !empty($_SESSION['error']['email']) ? $_SESSION['error']['email'] : '' ?>
        </span> 
        <br />
        <label for="">Số điện thoại:</label>
        <input type="text" name="phone" placeholder="Nhập số điện thoại">
        <span style="color: red;">
            <?= !empty($_SESSION['error']['phone']) ? $_SESSION['error']['phone'] : '' ?>
        </span> 
        <br />
        <label for="">Trạng thái:</label>
        <select name="status" id="">
            <option value="0">Unactive</option>
            <option value="1">Active</option>
        </select>
        <br />
        <label for="">Hình ảnh:</label>
        <input type="file" name="image">
        <br />
        <button type="submit">Submit</button>
    </form>
</body>

</html>