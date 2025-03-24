<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thương Hiệu</title>
</head>
<body>
<div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <h1 class="fs-16 mb-1">Danh Sách Thương Hiệu</h1>
                    <p class="text-muted mb-0">Danh sách các brand sản phẩm hiện có.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Thương Hiệu</th>
                                <th>Logo</th>
                                <th>Trang thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach ($listBrands as $key => $Brands) : ?>
                                <tr>
                                    <td><?= $Brands['id'] ?></td>
                                    <td><?= $Brands['name'] ?></td>
                                    <td><img src="../upload/brands/<?=$Brands['logo']?>" alt=""></td>
                                    <td><?= $Brands['status'] ?></td>

                                    <td>
                                        <a href="?act=edit-Brands&id=<?=$Brands['id']?>" class="btn btn-primary mb-3">Sửa Tên Brands</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>