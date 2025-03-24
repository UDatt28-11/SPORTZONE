<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <br>
                        <h1 class="fs-16 mb-1">Danh Sách Sản Phẩm</h1>
                        <br>
                        <p class="text-muted mb-0">Danh sách các sản phẩm hiện có.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <a href="./?act=formAddProducts" class="btn btn-primary" style="width: 170px;">Thêm Sản Phẩm
                        </a>
                        <table class="table table-bordered" border="1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Mô Tả Sản Phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Danh Mục</th>
                                    <th>Thương Hiệu</th>
                                    <th>Thời Gian</th>
                                    <th>Trạng Thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Listproduct as $product) : ?>
                                <tr>
                                    <td><?= $product['product_id'] ?></td>
                                    <td><?= $product['name'] ?></td>
                                    <td><?= $product['description'] ?></td>
                                    <td>
                                        <img src="<?= $product['main_image'] ?>" width="100px" alt="">
                                    </td>
                                    <td><?= $product['categoryName'] ?></td>
                                    <td><?= $product['brandName'] ?></td>
                                    <td><?= $product['date_create'] ?></td>
                                    <td><?= $product['status'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning"><i class="fas fa-edit">Sửa</i></a>
                                        <a href="#" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')"
                                            class="btn btn-danger"><i class="fas fa-trash">Xóa</i></a>
                                    </td>
                                </tr>
                                <?php endforeach  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>