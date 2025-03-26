<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Thương Hiệu</h3>
                        </div>
                        <div class="card-body">
                            <form action="?act=add-Brands" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nameCategory" class="form-label">Tên Thương Hiệu</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="nameCategory" class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" required>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="status" class="form-label">Trạng Thái</label>
                                    <select class="form-select" name="status">
                                         <option value="1">Hiện</option>
                                         <option value="2">Ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Thêm Danh Mục</button>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</div>
