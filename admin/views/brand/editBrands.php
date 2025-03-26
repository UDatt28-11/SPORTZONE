<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Chỉnh sửa thương hiệu</h3>
                        </div>
                        <div class="card-body">
                            <form action="index.php?act=edit-Brands&id=<?= $brands['id'] ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nameBrands" class="form-label">Tên Thương hiệu</label>
                                    <input type="text" class="form-control" name="name" value="<?= $brands['name'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="logoBrands" class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                    <div class="mt-2">
                                        <img src="../upload/brands/<?= $brands['logo'] ?>" alt="Logo" width="50px">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Trạng Thái</label>
                                    <select class="form-select" name="status">
                                        <option value="Hiện" <?= ($brands['status'] == "Hiện") ? 'selected' : '' ?>>Hiện</option>
                                        <option value="Ẩn" <?= ($brands['status'] == "Ẩn") ? 'selected' : '' ?>>Ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</div>
