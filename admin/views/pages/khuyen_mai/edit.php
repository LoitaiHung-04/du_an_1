<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>cập nhật bài viết | NN Shop</title>
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
                                <h4 class="mb-sm-0">Quản lí khuyến mãi</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">khuyến mãi</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Cập nhật khuyến mãi</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                        <form action="?act=sua-khuyen-mai" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?=$KhuyenMai['id']?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Tên Khuyến Mãi</label>
                                                    <input type="text" class="form-control" placeholder="Nhập trạng thái " name="ten_khuyen_mai" value="<?=$KhuyenMai['ten_khuyen_mai']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['ten_khuyen_mai']) ? $_SESSION['error']['ten_khuyen_mai'] : '' ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Mô tả</label>
                                                    <input type="text" class="form-control" placeholder="Nhập trạng thái " name="mo_ta" value="<?=$KhuyenMai['mo_ta']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['mo_ta']) ? $_SESSION['error']['mo_ta'] : '' ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Giảm giá</label>
                                                    <input type="text" class="form-control" placeholder="Nhập trạng thái " name="giam_gia" value="<?=$KhuyenMai['giam_gia']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['giam_gia']) ? $_SESSION['error']['giam_gia'] : '' ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Ngày bắt đầu</label>
                                                    <input type="date" class="form-control" placeholder="Nhập trạng thái " name="ngay_bat_dau" value="<?=$KhuyenMai['ngay_bat_dau']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['ngay_bat_dau']) ? $_SESSION['error']['ngay_bat_dau'] : '' ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Ngày kết thúc</label>
                                                    <input type="date" class="form-control" placeholder="Nhập trạng thái " name="ngay_ket_thuc" value="<?=$KhuyenMai['ngay_ket_thuc']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['ngay_ket_thuc']) ? $_SESSION['error']['ngay_ket_thuc'] : '' ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Trạng thái</label>
                                                    <input type="text" class="form-control" placeholder="Nhập trạng thái " name="trang_thai" value="<?=$KhuyenMai['trang_thai']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['trang_thai']) ? $_SESSION['error']['trang_thai'] : '' ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailidInput" class="form-label">Số lượng</label>
                                                    <input type="number" class="form-control" placeholder="Nhập trạng thái " name="so_luong" value="<?=$KhuyenMai['so_luong']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['error']['so_luong']) ? $_SESSION['error']['so_luong'] : '' ?>
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

                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div> <!-- end .h-100-->
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-ngày sinh -->

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
