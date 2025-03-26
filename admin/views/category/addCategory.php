<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Danh Mục</h3>
                        </div>
                        <div class="card-body">
                            <form action="?act=add-category" method="post">
                                <div class="mb-3">
                                    <label for="nameCategory" class="form-label">Tên Danh Mục</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="status" class="form-label">Trạng Thái</label>
                                    <select class="form-select" name="status">
                                         <option value="Hiện">Hiện</option>
                                         <option value="Ẩn">Ẩn</option>
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
