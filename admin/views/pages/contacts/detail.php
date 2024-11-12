<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Chi tiết liên hệ</title>
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

            <div class="container" style="margin-top: 100px;">
                <h1>Danh sách liên hệ</h1>
                <table class=" table">

                    <tbody>
                        <div id="layout-wrapper">
                            <div class="main-content">
                                <div class="container" style="margin-top: 100px;">
                                    <h2>Chi tiết Liên hệ</h2>
                                    <p><strong>Tên:</strong> <?php echo htmlspecialchars($contact['ten']); ?></p>
                                    <p><strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?></p>
                                    <p><strong>Nội dung:</strong> <?php echo nl2br(htmlspecialchars($contact['message'])); ?></p>
                                    <a href="index.php?act=lien-he" class="btn btn-secondary">Quay lại</a>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
                <!-- <a href="index.php?act=form-them-lien-he" class="btn btn-success">Thêm liên hệ</a> -->
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