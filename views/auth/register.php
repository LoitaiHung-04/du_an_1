<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Đăng ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="./admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="./admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="./admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="./admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="./admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">ĐĂNG KÝ</h5>

                                    <?php
                                    if (isset($_SESSION['error'])) {
                                        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
                                        unset($_SESSION['error']);
                                    }

                                    if (isset($_SESSION['success'])) {
                                        echo '<p style="color: green;">' . $_SESSION['success'] . '</p>';
                                        unset($_SESSION['success']);
                                    }
                                    ?>
                                </div>

                                <div class="p-2 mt-4">
                                    <form action="?act=register" method="POST">

                                        <div class="mb-3">
                                            <label for="full-name" class="form-label">Họ và tên</label>
                                            <input type="text" class="form-control" id="full-name" name="ho_ten"
                                                placeholder="Nhập đầy đủ họ và tên" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Nhập Email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password-input" class="form-label">Mật khẩu</label>
                                            <input type="password" class="form-control" id="password-input" name="mat_khau"
                                                placeholder="Nhập mật khẩu" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="dob" class="form-label">Ngày sinh</label>
                                            <input type="date" class="form-control" id="dob" name="ngay_sinh" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control" id="phone" name="so_dien_thoai"
                                                placeholder="Nhập số điện thoại của bạn" pattern="^\d{10,15}$" required >
                                        </div>

                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Giới tính</label>
                                            <select class="form-control" id="gender" name="gioi_tinh" required>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Địa chỉ</label>
                                            <textarea class="form-control" id="address" name="dia_chi" rows="3"
                                                placeholder="Nhập địa chỉ của bạn" required></textarea>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Đăng ký</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy; 2024 Client Panel</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
</body>

</html>