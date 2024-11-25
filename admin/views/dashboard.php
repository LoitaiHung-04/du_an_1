<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | NN Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php require_once "layouts/libs_css.php"; ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- HEADER -->
        <?php
        require_once "layouts/header.php";
        require_once "layouts/siderbar.php";
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
                    <h5>Welcome! I particularly like <?= $_SESSION['user_admin']['ho_ten'] ?></h5>




                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Good Morning,
                                                    <?php echo $_SESSION['user_admin']['ho_ten']; ?>!</h4>
                                                <p class="text-muted mb-0">Here's what's happening with your store
                                                    today.</p>
                                            </div>
                                            <div class="mt-3 mt-lg-0">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3 mb-0 align-items-center">
                                                        <div class="col-auto">
                                                            <button type="button"
                                                                class="btn btn-soft-success material-shadow-none"><i
                                                                    class="ri-add-circle-line align-middle me-1"></i>
                                                                Add Product</button>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-auto">
                                                            <button type="button"
                                                                class="btn btn-soft-info btn-icon waves-effect material-shadow-none waves-light layout-rightside-btn"><i
                                                                    class="ri-pulse-line"></i></button>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                            Total Earnings</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                            +16.24 %
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                                class="counter-value"
                                                                data-target="<?= $doanhThu['doanh_thu'] ?>"><?= $doanhThu['doanh_thu'] ?></span>k
                                                        </h4>
                                                        <a href="#" class="text-decoration-underline">View net
                                                            earnings</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                                            <i class="bx bx-dollar-circle text-success"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                            Customers</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                            +29.08 %
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            <span class="counter-value"
                                                                data-target="<?= $soLuongTaiKhoan ?>">0</span> M
                                                        </h4>
                                                        <a href="#" class="text-decoration-underline">See details</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                            <i class="bx bx-user-circle text-warning"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <?php if (!empty($donHangTheoTrangThai)): ?>
                                        <?php foreach ($donHangTheoTrangThai as $trangThai): ?>
                                            <?php if ($trangThai['so_luong_don_hang'] > 0): ?>
                                                <div class="col-xl-3 col-md-6">
                                                    <!-- card -->
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p
                                                                        class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                                        <?= htmlspecialchars($trangThai['ten_trang_thai_id']) ?>
                                                                    </p>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <h5 class="text-success fs-14 mb-0">
                                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                                        <?= $trangThai['so_luong_don_hang'] ?> Orders
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                                <div>
                                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                                        <span class="counter-value"
                                                                            data-target="<?= $trangThai['so_luong_don_hang'] ?>">
                                                                            <?= $trangThai['so_luong_don_hang'] ?>
                                                                        </span>
                                                                    </h4>
                                                                    <a href="?act=don-hangs" class="text-decoration-underline">View
                                                                        all orders</a>
                                                                </div>
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                                                        <i class="bx bx-shopping-bag text-info"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col -->
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>No orders found for any status.</p>
                                    <?php endif; ?>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Doanh Thu Hàng Ngày</h4>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="fw-semibold text-uppercase fs-12">Sắp xếp
                                                                    theo:</span><span class="text-muted">Hôm nay<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Hôm nay</a>
                                                                <a class="dropdown-item" href="#">Hôm qua</a>
                                                                <a class="dropdown-item" href="#">7 Ngày Qua</a>
                                                                <a class="dropdown-item" href="#">30 Ngày Qua</a>
                                                                <a class="dropdown-item" href="#">Tháng Này</a>
                                                                <a class="dropdown-item" href="#">Tháng Trước</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card header -->

                                                <div class="card-body">
                                                    <div class="table-responsive table-card">
                                                        <table
                                                            class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Ngày</th>
                                                                    <th>Doanh thu (VND)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($doanhThuHangNgay as $doanhThu) {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo date('d M Y', strtotime($doanhThu['ngay'])); ?>
                                                                        </td>
                                                                        <td><?php echo number_format($doanhThu['doanh_thu'], 0, ',', '.'); ?>
                                                                            VND</td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->










                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Top 5 Sản Phẩm Bán Chạy Nhất
                                                    </h4>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="fw-semibold text-uppercase fs-12">Sắp xếp
                                                                    theo:</span><span class="text-muted">Hôm nay<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Hôm nay</a>
                                                                <a class="dropdown-item" href="#">Hôm qua</a>
                                                                <a class="dropdown-item" href="#">7 Ngày Qua</a>
                                                                <a class="dropdown-item" href="#">30 Ngày Qua</a>
                                                                <a class="dropdown-item" href="#">Tháng Này</a>
                                                                <a class="dropdown-item" href="#">Tháng Trước</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card header -->

                                                <div class="card-body">
                                                    <div class="table-responsive table-card">
                                                        <table
                                                            class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                            <tbody>
                                                                <?php
                                                                foreach ($topSanPham as $sanPham) {
                                                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="avatar-sm bg-light rounded p-1 me-2">
                                                                                    <img src="/du_an_1/uploads/products/<?php echo $sanPham['hinh_anh']; ?>"
                                                                                        alt="" class="img-fluid d-block" />
                                                                                </div>
                                                                                <div>
                                                                                    <h5 class="fs-14 my-1"><a
                                                                                            href="apps-ecommerce-product-details.html?id=<?php echo $sanPham['id']; ?>"
                                                                                            class="text-reset"><?php echo $sanPham['ten_san_pham']; ?></a>
                                                                                    </h5>
                                                                                    <span
                                                                                        class="text-muted"><?php echo date('d M Y'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                                <?php echo number_format($sanPham['gia_san_pham'], 0, ',', '.'); ?>
                                                                                VND
                                                                            </h5>
                                                                            <span class="text-muted">Giá</span>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                                <?php echo $sanPham['so_luong_ban']; ?>
                                                                            </h5>
                                                                            <span class="text-muted">Đã bán</span>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                                <?php echo $sanPham['luot_xem']; ?>
                                                                            </h5>
                                                                            <span class="text-muted">Lượt xem</span>
                                                                        </td>
                                                                        <td>
                                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                                <?php echo number_format($sanPham['doanh_thu'], 0, ',', '.'); ?>
                                                                                VND
                                                                            </h5>
                                                                            <span class="text-muted">Doanh thu</span>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->






                                    <div
                                        class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                        <div class="col-sm">
                                            <div class="text-muted">
                                                Showing <span class="fw-semibold">5</span> of <span
                                                    class="fw-semibold">25</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto  mt-3 mt-sm-0">
                                            <ul
                                                class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link">←</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">→</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

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


    <!-- Đặt các cột phía trên và giữa -->


    <!-- Cột thống kê đơn hàng theo trạng thái ở giữa -->


    </div><!-- container-fluid -->
    </div><!-- .page-content -->
    </div><!-- end main content -->

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
    </div><!-- end layout-wrapper -->


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button><!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

        <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
        </div>

        <!-- JAVASCRIPT -->
        <?php require_once "layouts/libs_js.php"; ?>
</body>

</html>