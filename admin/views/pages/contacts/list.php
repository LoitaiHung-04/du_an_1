<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Liên hệ | SellPhone Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php include "views/layouts/libs_css.php"; ?>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        include "views/layouts/header.php";
        include "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lý liên hệ</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Liên hệ</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Danh sách liên hệ</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-nowrap align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên</th>
                                                            <th>Email</th>
                                                            <th>Trạng thái</th>
                                                            <th>Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($contacts as $contact): ?>
                                                            <tr>
                                                                <td><?php echo $contact['id']; ?></td>
                                                                <td><?php echo htmlspecialchars($contact['ten']); ?></td>
                                                                <td><?php echo htmlspecialchars($contact['email']); ?></td>
                                                                <td><?php echo $contact['trang_thai'] == 1 ? "Hiển thị" : "Không hiển thị"; ?></td> <!-- Hiển thị trạng thái -->
                                                                <td>
                                                                    <a href="index.php?act=chi-tiet-lien-he&id=<?php echo $contact['id']; ?>" class="btn btn-info">Chi tiết</a>
                                                                    <a href="index.php?act=xoa-lien-he&id=<?php echo $contact['id']; ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>

                                    </div><!-- end card-body -->
                                </div><!-- end card -->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

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
            <?php require_once "views/layouts/libs_js.php"; ?>

</body>

</html>