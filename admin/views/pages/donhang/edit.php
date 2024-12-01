<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Cập nhật danh mục</title>
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


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lí thông tin đơn hàng</h4>
                                </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Quản lí thông tin đơn hàng</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Sửa thông tin đơn hàng
                                            <?= $donHang['ma_don_hang'] ?>
                                        </h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="?act=sua-don-hang" method="POST">
                                                <input type="hidden" name="id" value="<?= $donHang['id'] ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Tên người
                                                                nhận</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nhập tên người nhận" name="ten_nguoi_nhan"
                                                                value="<?= $donHang['ten_nguoi_nhan'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['ten_nguoi_nhan']) ? $_SESSION['errors']['ten_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Số điện
                                                                thoại</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nhập sdt" name="sdt_nguoi_nhan"
                                                                value="<?= $donHang['sdt_nguoi_nhan'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['sdt_nguoi_nhan']) ? $_SESSION['errors']['sdt_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Email</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nhập email người nhận"
                                                                name="email_nguoi_nhan"
                                                                value="<?= $donHang['email_nguoi_nhan'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['email_nguoi_nhan']) ? $_SESSION['errors']['email_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Địa
                                                                chỉ</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nhập địa chỉ người nhận"
                                                                name="dia_chi_nguoi_nhan"
                                                                value="<?= $donHang['dia_chi_nguoi_nhan'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['dia_chi_nguoi_nhan']) ? $_SESSION['errors']['dia_chi_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ghi_chu">GHI CHÚ</label>
                                                            <textarea name="ghi_chu" id="ghi_chu"
                                                                style="width:630px"><?= $donHang['ghi_chu'] ?></textarea>
                                                            <?= !empty($_SESSION['errors']['ghi_chu']) ? '<div class="text-danger">' . $_SESSION['errors']['ghi_chu'] . '</div>' : '' ?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="ForminputState" class="form-label">Trạng thái đơn
                                                            hàng</label>
                                                        <select id="ForminputState" class="form-select"
                                                            name="trang_thai_id">
                                                            <?php foreach ($listTrangThaiDonHang as $trangThai): ?>
                                                                <option value="<?= $trangThai['id'] ?>" <?php
                                                                                                        if ($donHang['trang_thai_id'] > $trangThai['id']) {
                                                                                                            echo 'disabled';
                                                                                                        } elseif (in_array($donHang['trang_thai_id'], [9, 10, 11])) {
                                                                                                            echo 'disabled';
                                                                                                        }
                                                                                                        ?>
                                                                    <?= $trangThai['id'] == $donHang['trang_thai_id'] ? 'selected' : '' ?>>
                                                                    <?= $trangThai['ten_trang_thai_id']; ?>
                                                                </option>
                                                            <?php endforeach; ?>

                                                        </select>
                                                        <span class="text-danger">
                                                            <?= !empty($_SESSION['error']['trang_thai_id']) ? $_SESSION['error']['trang_thai_id'] : '' ?>
                                                        </span>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
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
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>