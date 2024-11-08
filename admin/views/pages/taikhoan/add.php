<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>
    
    <meta charset="utf-8" />
    <title>Thêm danh mục</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lý tài khoản</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách tài khoản</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Thêm tài khoản</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="?act=them-tai-khoan" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">

                                                        
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Tên tài khoản</label>
                                                            <input type="text" class="form-control" placeholder="Nhập tên tài khoản" name="ten_tai_khoan">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['ten_tai_khoan']) ? $_SESSION['error']['ten_tai_khoan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Ảnh đại diện</label>
                                                            <input type="file" class="form-control" placeholder="Nhập ảnh đại diện" name="anh_dai_dien">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['anh_dai_dien']) ? $_SESSION['error']['anh_dai_dien'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Ngày Sinh</label>
                                                            <input type="date" class="form-control" placeholder="Nhập ngày sinh" name="ngay_sinh">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['ngay_sinh']) ? $_SESSION['error']['ngay_sinh'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Email</label>
                                                            <input type="email" class="form-control" placeholder="Nhập email" name="email">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['email']) ? $_SESSION['error']['email'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Số điện thoại</label>
                                                            <input type="text" class="form-control" placeholder="Nhập tên danh mục" name="so_dien_thoai">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['so_dien_thoai']) ? $_SESSION['error']['so_dien_thoai'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Địa chỉ</label>
                                                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="dia_chi">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['dia_chi']) ? $_SESSION['error']['dia_chi'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Mật khẩu</label>
                                                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="mat_khau">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['mat_khau']) ? $_SESSION['error']['mat_khau'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Giới tính</label>
                                                            <select class="form-select" name="gioi_tinh">
                                                                <option selected>Chọn giới tính</option>
                                                                <option value="1">Nam</option>
                                                                <option value="2">Nữ</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['gioi_tinh']) ? $_SESSION['error']['gioi_tinh'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Trạng thái</label>
                                                            <select class="form-select" name="trang_thai">
                                                                <option selected>Chọn trạng thái</option>
                                                                <option value="1">Hiển thị</option>
                                                                <option value="2">Không hiển thị</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['trang_thai']) ? $_SESSION['error']['trang_thai'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>