<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <h4 class="fs-16 mb-1">Thêm Danh Mục</h4>
                    <p class="text-muted mb-0">Thêm danh mục sản phẩm mới.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="?act=post-add-category" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="categoryName"
                                name="categoryName" required>
                        </div>
                       
                        <div class="mb-3">
                            <label for="categoryStatus" class="form-label">Trạng Thái</label>
                            <select class="form-select" id="categoryStatus" name="categoryStatus"
                                required>
                                <option value="1">Hoạt động</option>
                                <option value="0">Ngừng hoạt động</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
                        <a href="?act=list-category" class="btn btn-secondary">Quay lại Danh
                            Sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>