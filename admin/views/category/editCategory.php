<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Chỉnh sửa danh mục</h3>
          </div>
          <div class="card-body">
            <form action="index.php?act=edit-Category&id=<?= $category['id'] ?>" method="post">
              <div class="mb-3">
                <label for="nameCategory" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" name="name" value="<?= $category['name'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Trạng Thái</label>
                <select class="form-select" name="status">
                  <option value="1" <?= ($category['status'] == 1) ? 'selected' : '' ?>>Hiện</option>
                  <option value="2" <?= ($category['status'] == 2) ? 'selected' : '' ?>>Ẩn</option>
                  <option value="3" <?= ($category['status'] == 3) ? 'selected' : '' ?>>Hết Hàng</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
