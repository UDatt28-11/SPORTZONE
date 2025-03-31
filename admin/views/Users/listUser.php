<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <br>
                        <h1 class="fs-16 mb-1">Danh Sách Người Dùng</h1>
                        <br>
                        <p class="text-muted mb-0">Danh sách các người dùng hiện có</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <a href="index.php?act=form-user" class="btn btn-primary" style="width: 170px;">Thêm Người Dùng
                        </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Người Dùng</th>
                                    <th>Mật Khẩu</th>
                                    <th>Email</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Giới Tính</th>
                                    <th>Ngày Sinh</th>
                                    <th>Avatar</th>
                                    <th>Vai Trò</th>
                                    <th>Ngày Đăng Ký</th>
                                    <th>Trạng Thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Listuser as $user) : ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['username'] ?></td>
                                    <td><?= $user['password'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['phone_number'] ?></td>
                                    <td><?= $user['address'] ?></td>
                                    <td><?= $user['gender'] == 1 ? 'Nam' : 'Nữ' ?></td>
                                    <td><?= $user['birthdate'] ?></td>
                                    <td>
                                        <img src="<?= $user['avatar'] ?>" width="100px" alt="">
                                    </td>
                                    <td><?= $user['role'] == 1 ? 'Quản trị viên' : 'Khách hàng' ?></td>
                                    <td><?= $user['date_create'] ?></td>
                                    <td><?= $user['status'] == 1 ? 'Hoạt động' : 'Bị Khóa' ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning"><i class="fas fa-edit">Sửa</i></a>
                                        <a href="#" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')"
                                            class="btn btn-danger"><i class="fas fa-trash">Xóa</i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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