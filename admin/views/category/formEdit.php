<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <h4 class="fs-16 mb-1">Sửa Danh Mục</h4>
                    <p class="text-muted mb-0" style="font-size: 20px;">Chỉnh sửa thông tin danh mục sản phẩm
                        <span style="font-weight: 700;"><?php echo $Category['name']; ?></span>.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="./?act=post-edit-category" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="editCategoryID" class="form-label">ID Danh Mục</label>
                            <input type="text" class="form-control" name="danh_muc_id" id="editCategoryID" value="<?php echo $Category['id']; ?>" required disabled>
                        </div>
                        <div class="mb-3">
                            <label for="editCategoryName" class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="editCategoryName" name="ten_danh_muc" value="<?php echo $Category['name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCategoryStatus" class="form-label">Trạng Thái</label>
                            <select class="form-select" id="editCategoryStatus" name="trang_thai" required>
                                <option value="1" <?php echo $Category['status'] == '1' ? 'selected' : ''; ?>>Hoạt động</option>
                                <option value="0" <?php echo $Category['status'] == '0' ? 'selected' : ''; ?>>Ngừng hoạt động</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
                        <a href="?act=list-category" class="btn btn-secondary">Quay lại Danh Sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>