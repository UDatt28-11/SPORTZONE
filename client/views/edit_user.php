<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
</head>

<body>
    <h2>Cập nhật thông tin người dùng</h2>
    <form action="?act=update-user" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $userDetail['id'] ?>">

        <label for="">Họ tên:</label>
        <input type="text" name="name" value="<?= $userDetail['name'] ?>" placeholder="Nhập họ tên">
        <span style="color: red;">
            <?= !empty($error['name']) ? $error['name'] : '' ?>
        </span>
        <br />
        <label for="">Email:</label>
        <input type="text" name="email" value="<?= $userDetail['email'] ?>" placeholder="Nhập email">
        <span style="color: red;">
            <?= !empty($error['email']) ? $error['email'] : '' ?>
        </span>
        <br />
        <label for="">Số điện thoại:</label>
        <input type="text" name="phone" value="<?= $userDetail['phone'] ?>" placeholder="Nhập số điện thoại">
        <span style="color: red;">
            <?= !empty($error['phone']) ? $error['phone'] : '' ?>
        </span>
        <br />
        <label for="">Trạng thái:</label>
        <select name="status" id="">
            <option value="0" <?= $userDetail['status'] == '0' ? 'selected' : '' ?>>Unactive</option>
            <option value="1" <?= $userDetail['status'] == '1' ? 'selected' : '' ?>>Active</option>
        </select>
        <br />

        <label for="">Hình ảnh:</label>
        <input type="file" name="image">
        <br />
        <img src="<?= $userDetail['image'] ?>" alt="Hình ảnh" width="80px">
        <br />

        <button type="submit">Submit</button>
    </form>
</body>

</html>