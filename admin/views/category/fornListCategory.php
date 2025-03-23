<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục</title>
</head>
<body>
<div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <h1 class="fs-16 mb-1">Danh Sách Danh Mục</h1>
                    <p class="text-muted mb-0">Danh sách các danh mục sản phẩm hiện có.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Danh Mục</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach ($listCategory as $key => $Category) : ?>
                                <tr>
                                    <td><?= $Category['id'] ?></td>
                                    <td><?= $Category['name'] ?></td>
                                    <td>
                                        <a href="?act=edit-Category&id=<?=$Category['id']?>" class="btn btn-primary mb-3">Sửa Danh Mục</a>
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