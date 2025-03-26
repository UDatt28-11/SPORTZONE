<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
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
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach ($listCategory as $key => $Category) : ?>
                                <tr>
                                    <td><?= $Category['id'] ?></td>
                                    <td><?= $Category['name'] ?></td>
                                    <td><?= $Category['status'] ?></td>
                                    <td>
                                        <a href="index.php?act=edit-Category&id=<?=$Category['id']?>" class="btn btn-primary mb-3">Sửa Danh Mục</a>
                                        <a href="index.php?act=delete-Category&id=<?=$Category['id']?>" class="btn btn-danger mb-3">Xóa Danh Mục</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                <!-- </div> -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
 
</div>