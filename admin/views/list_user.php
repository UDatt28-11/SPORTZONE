<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
</head>

<body>
    <h2>Danh sách người dùng</h2>
    <a href="?act=form-add-user">
        <button>Thêm người dùng</button>
    </a>
    <table border="1">
        <thead>
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($listUser as $index => $user) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td>
                        <img src="<?= $user['image'] ?>" alt="Hình ảnh" width="80px">
                    </td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td><?= $user['status'] == 1 ? "Active" : "Unactive" ?></td>
                    <td>
                        <a href="?act=form-edit-user&id=<?= $user['id'] ?>">
                            <button>Sửa</button>
                        </a>
                        <form action="?act=delete-user" method="POST"
                            onsubmit="return confirm('Bạn có đồng ý xóa không?')"
                            style="display: inline;">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>