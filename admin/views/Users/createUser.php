<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="h-100">
                <div class="row mb-3 pb-1">

                </div>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                    rel="stylesheet">
                <style>
                .form-container {
                    background: #ffffff;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    width: 100%;
                    max-width: 100%;
                    background-color: gray;
                }

                .title {
                    color: #007bff;
                    font-weight: bold;
                    margin-bottom: 20px;
                }

                .form-label {
                    font-weight: 600;
                }

                input,
                select {
                    border-radius: 5px;
                }

                .btn-primary {
                    background-color: #007bff;
                    border: none;
                    padding: 10px;
                    font-size: 16px;
                    border-radius: 5px;
                    transition: 0.3s;
                }

                .btn-primary:hover {
                    background-color: #0056b3;
                }
                </style>
                </head>

                <body class="bg-light">
                    <h3 class="text-center title">Thêm Người Dùng</h3>
                    <div class="form-container">
                        <form action="index.php?act=form-user" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" required>Họ và Tên</label>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Nhập họ và tên">

                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" required>Mật Khẩu</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Nhập mật khẩu">

                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" required>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Nhập email">

                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" required>Số Điện Thoại</label>
                                    <input type="text" class="form-control" name="phone_number"
                                        placeholder="Nhập số điện thoại">

                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" required>Địa Chỉ</label>
                                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">

                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Giới Tính</label>
                                    <select class="form-select" name="gender">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="birthdate" required>Ngày Sinh</label>
                                    <input type="date" id="birthdate" name="birthdate">

                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Hình Ảnh</label>
                                    <input type="file" class="form-control" name="avatar" accept="image/*">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Vai Trò</label>
                                    <select name="role">
                                        <option value="">Chọn vai trò</option>
                                        <option value="1">Quản trị viên</option>
                                        <option value="0">Khách hàng</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="date_create" required>Ngày Đăng Ký</label>
                                    <input type="date" id="date_create" name="date_create">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Trạng Thái</label>
                                    <div class="status-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="active"
                                                value="1" checked>
                                            <label class="form-check-label" for="active">
                                                <i class="fas fa-check-circle text-success"></i> Hoạt động
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                                value="0">
                                            <label class="form-check-label" for="inactive">
                                                <i class="fas fa-times-circle text-danger"></i> Khóa
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    Thêm Người Dùng
                                </button>
                            </div>
                        </form>
                    </div>

                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
                    </script>

                    <!-- </div> -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>